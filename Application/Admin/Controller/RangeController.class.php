<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-15                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class RangeController extends CommonController {
    public function index(){
        $size = I('get.size') ? I('get.size') : 20;
        $count =M('Range')->alias('n')
            ->join("left join trade_lang l ON l.lang_code = n.language")
            ->where('n.deleted=0')
            ->count('distinct n.group_id');
        $Page  = new \Common\Util\Page($count,'Range/index',$size);// 实例化分页类
        $list  =  M('Range')->alias('n')
            ->field('n.range_id,n.range_title,n.range_img,n.create_time,l.lang_name,n.group_id')
            ->join("left join trade_lang l ON l.lang_code = n.language")
            ->where('n.deleted=0')
            ->group('n.group_id')
            ->order('l.lang_level asc,n.range_id desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

        //dump($list);die;
        if(empty($list)){
            $noData='无结果。。。';
            $data['noData'] = $noData;
            $this->assign('no',1);// 赋值分页输出
        }
        $list = null_to_string($list);
        $show = $Page->show();// 分页显示输出
        $this->assign('_list', $list);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('size',$size);// 每页分页数

        $this->display();
    }


    public function add(){
        if (IS_POST) {

            $g = M('Range')->max('group_id');
            $gid = $g ? $g : 0;

            $insertArr = array();
            $formData = $_POST['form'];
            foreach ($formData as $key => $value) {
                $oneData = array();
                $oneData['range_title'] = $value['title'];
                $oneData['range_img'] = $value['img'];
                $oneData['group_id'] = $gid+1;
                $oneData['form_id'] = $key;
                $oneData['create_time'] = time();
                foreach ($value['language'] as $v) {
                    $oneData['language'] = $v;
                    $insertArr[] = $oneData;
                }
            }

            if (M('Range')->addAll($insertArr)) {
                $this->success('发布成功',U('Range/index'));
            } else {
                $this->error('发布失败');
            }
        } else {
            $this->display();
        }
    }


    public function edit(){
        if (IS_POST) {
            //var_dump($_POST['form']);die;
            $groupId = I('post.groupId');
            //M('Range')->where('group_id = %d',$groupId)->save(array('deleted'=>1));
            M('Range')->where('group_id = %d',$groupId)->delete();

            $insertArr = array();
            $formData = $_POST['form'];
            foreach ($formData as $key => $value) {
                $oneData = array();
                $oneData['range_title'] = $value['title'];
                $oneData['range_img'] = $value['img'];
                $oneData['group_id'] = $groupId;
                $oneData['form_id'] = $key;
                $oneData['create_time'] = time();
                foreach ($value['language'] as $v) {
                    $oneData['language'] = $v;
                    $insertArr[] = $oneData;
                }
            }


            if (M('Range')->addAll($insertArr)) {
                $this->success('修改成功',U('Range/index'));
            } else {
                $this->error('修改失败');
            }
        } else {

            //按照groupId查询出符合条件的数据
            $groupId = I('get.groupId');
            $allInfo = M('Range')->where('group_id=%d and deleted=0',$groupId)->select();

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
                        $rInfo[$i]['range_title'] = $value['range_title'];
                        $rInfo[$i]['range_img'] = $value['range_img'];

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
                    $rInfo[$i]['range_title'] = '';
                    $rInfo[$i]['range_img'] = '';

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
        $videoId = I('get.range_id');
        $videoData['video_status'] = 0;
        M('Range')->where('range_id=%d',$videoId)->save($videoData);
        $this->success('撤销成功',U('Range/index'));
    }

    public function publish(){
        $videoId = I('get.range_id');
        $videoData['video_status'] = 1;
        M('Range')->where('range_id=%d',$videoId)->save($videoData);
        $this->success('发布成功',U('Range/index'));
    }

    public function del(){
        $groupId = I('post.group_id');
        $re = M('Range')->where('group_id=%d',$groupId)->save(array('deleted'=>1));
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