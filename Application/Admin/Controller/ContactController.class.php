<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-15                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class ContactController extends CommonController {

    public function edit(){
        if (IS_POST) {
            //var_dump($_POST['form']);die;
            $groupId = 0;
            //M('Contact')->where('group_id = %d',$groupId)->save(array('deleted'=>1));
            M('Contact')->where('group_id = %d',$groupId)->delete();

            $insertArr = array();
            $formData = $_POST['form'];
            foreach ($formData as $key => $value) {
                $oneData = array();
                $oneData['contact_title'] = $value['contact_title'];
                $oneData['contact_address'] = $value['contact_address'];
                $oneData['contact_img'] = $value['img'];
                $oneData['email'] = $value['email'];
                $oneData['phone1'] = $value['phone1'];
                $oneData['phone2'] = $value['phone2'];
                $oneData['group_id'] = $groupId;
                $oneData['form_id'] = $key;
                $oneData['create_time'] = time();
                foreach ($value['language'] as $v) {
                    $oneData['language'] = $v;
                    $insertArr[] = $oneData;
                }
            }

            if (M('Contact')->addAll($insertArr)) {
                $this->success('修改成功',U('Contact/index'));
            } else {
                $this->error('修改失败');
            }
        } else {

            //按照groupId查询出符合条件的数据
            $groupId = 0;
            $allInfo = M('Contact')->where('group_id=%d and deleted=0',$groupId)->select();


            //临时数组，$hadLangArr 用于存放按照form_id区分的已选语言。$hadLangArr2用于存放所有已选语言，不区分form_id
            $hadLangArr = array();
            $hadLangArr2 = array();
            foreach ($allInfo as $value) {
                $hadLangArr[$value['form_id']][] = $value['language'];
                $hadLangArr2[] = $value['language'];
            }


            //组装7组数据
            $rInfo = array();
            for ($i = 0; $i < 7; $i++) {
                $rInfo[ $i ] = array();
                foreach ($allInfo as $value) {

                    if ($value['form_id'] == $i) {

                        $rInfo[$i]['contact_title'] = $value['contact_title'];
                        $rInfo[$i]['contact_address'] = $value['contact_address'];
                        $rInfo[$i]['contact_img'] = $value['contact_img'];
                        $rInfo[$i]['email'] = $value['email'];
                        $rInfo[$i]['phone1'] = $value['phone1'];
                        $rInfo[$i]['phone2'] = $value['phone2'];

                        foreach ($this->allLangArr as $k => $v) {
                            $rInfo[$i]['language'][$k]['name'] = $this->allLangToCH[$v];
                            $rInfo[$i]['language'][$k]['value'] = $v;

                            if (in_array($v, $hadLangArr[ $value['form_id'] ])) {
                                $rInfo[$i]['language'][$k]['state'] = 2;
                            } elseif (in_array($v, $hadLangArr2)) {
                                $rInfo[$i]['language'][$k]['state'] = 0;
                            } else {
                                $rInfo[$i]['language'][$k]['state'] = 1;
                            }

                        }

                    }
                }

                //如果找不到记录
                if ( !$rInfo[$i] ) {
                    $rInfo[$i]['contact_title'] = '';
                    $rInfo[$i]['contact_img'] = '';
                    $rInfo[$i]['email'] = '';
                    $rInfo[$i]['phone1'] = '';
                    $rInfo[$i]['phone2'] = '';


                    foreach ($this->allLangArr as $k => $v) {
                        $rInfo[$i]['language'][$k]['name'] = $this->allLangToCH[$v];
                        $rInfo[$i]['language'][$k]['value'] = $v;

                        if (in_array($v, $hadLangArr2)) {//注意两种判断方式不一样
                            $rInfo[$i]['language'][$k]['state'] = 0;
                        } else {
                            $rInfo[$i]['language'][$k]['state'] = 1;
                        }
                    }
                }

            }

            //dump($rInfo);
            $this->assign('rInfo',$rInfo);
            $this->display();
        }
    }

    public function revoke(){
        $videoId = I('get.contact_id');
        $videoData['video_status'] = 0;
        M('Contact')->where('contact_id=%d',$videoId)->save($videoData);
        $this->success('撤销成功',U('Contact/index'));
    }

    public function publish(){
        $videoId = I('get.contact_id');
        $videoData['video_status'] = 1;
        M('Contact')->where('contact_id=%d',$videoId)->save($videoData);
        $this->success('发布成功',U('Contact/index'));
    }

    public function del(){
        $groupId = I('post.group_id');
        $re = M('Contact')->where('group_id=%d',$groupId)->save(array('deleted'=>1));
        $returnResult = array();
        if ($re) {
            $returnResult['status'] = 1;
            $returnResult['msg'] = "删除成功";
        } else {
            $returnResult['status'] = -1;
            $returnResult['msg'] = "删除失败";
        }
        $this->ajaxReturn($returnResult);
    }

}