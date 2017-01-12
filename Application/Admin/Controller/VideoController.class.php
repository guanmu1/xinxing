<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-15                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class VideoController extends CommonController {
    public function index(){
        $size = I('get.size') ? I('get.size') : 20;
        $countArr = M('Video')->distinct(true)->field('group_id')->where('`deleted` = 0')->select();
        $count = count($countArr);
//        echo $count;exit;
        $Page  = new \Common\Util\Page($count,'Video/index',$size);// 实例化分页类
        $list  =  M('Video')->alias('n')
            ->field('n.video_id,n.video_title,n.video_link,n.create_time,l.lang_name,n.group_id')
            ->join("left join trade_lang l ON l.lang_code = n.language")
            ->where('n.deleted=0')
            ->group('n.group_id')
            ->order('l.lang_level asc,n.video_id desc')
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
            $g = M('Video')->max('group_id');
            $gid = $g ? $g : 0;
            $insertArr = array();
            $formData = $_POST['form'];
            foreach ($formData as $key => $value) {
                $oneData = array();
                $oneData['video_title'] = $value['title'];
                if($value['choose'] == 1){
                    $oneData['video_link'] = $value['link'];
                }else{
                    $oneData['video_link'] = $value['up'];
                }
                $oneData['video_type'] = $value['choose'];
                $oneData['group_id'] = $gid+1;
                $oneData['form_id'] = $key;
                $oneData['create_time'] = time();
                foreach ($value['language'] as $v) {
                    $oneData['language'] = $v;
                    $insertArr[] = $oneData;
                }
            }

            if (M('Video')->addAll($insertArr)) {
                $this->success('发布成功',U('Video/index'));
            } else {
                $this->error('发布失败');
            }
        } else {
            $this->assign('phpsessid', session_id());
            $this->display();
        }
    }

    public function edit(){
        if (IS_POST) {
            //var_dump($_POST['form']);die;
            $groupId = I('post.groupId');
            //M('Video')->where('group_id = %d',$groupId)->save(array('deleted'=>1));
            M('Video')->where('group_id = %d',$groupId)->delete();
            $insertArr = array();
            $formData = $_POST['form'];
            foreach ($formData as $key => $value) {
                $oneData = array();
                $oneData['video_title'] = $value['title'];
                $oneData['group_id'] = $groupId;
                $oneData['form_id'] = $key;
                if($value['choose'] == 1){
                    $oneData['video_link'] = $value['link'];
                }else{
                    $oneData['video_link'] = $value['up'];
                }
                $oneData['video_type'] = $value['choose'];
                $oneData['create_time'] = time();
                foreach ($value['language'] as $v) {
                    $oneData['language'] = $v;
                    $insertArr[] = $oneData;
                }
            }



            if (M('Video')->addAll($insertArr)) {
                $this->success('修改成功',U('Video/index'));
            } else {
                $this->error('修改失败');
            }
        } else {

            //按照groupId查询出符合条件的数据
            $groupId = I('get.groupId');
            $allInfo = M('Video')->where('group_id=%d and deleted=0',$groupId)->select();

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
                        $rInfo[$i]['video_title'] = $value['video_title'];
                        $rInfo[$i]['video_link'] = $value['video_link'];
                        $rInfo[$i]['choose'] =$value['video_type'];

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
                    $rInfo[$i]['video_title'] = '';
                    $rInfo[$i]['video_link'] = '';
                    $rInfo[$i]['choose'] = '';

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


//            dump($rInfo);
            $this->assign('phpsessid', session_id());
            $this->assign('rInfo',$rInfo);
            $this->display();
        }
    }

    public function revoke(){
        $videoId = I('get.video_id');
        $videoData['video_status'] = 0;
        M('Video')->where('video_id=%d',$videoId)->save($videoData);
        $this->success('撤销成功',U('Video/index'));
    }

    public function publish(){
        $videoId = I('get.video_id');
        $videoData['video_status'] = 1;
        M('Video')->where('video_id=%d',$videoId)->save($videoData);
        $this->success('发布成功',U('Video/index'));
    }

    public function del(){
        $groupId = I('post.group_id');
        $re = M('Video')->where('group_id=%d',$groupId)->save(array('deleted'=>1));
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

    //上传视频
    public function uploadVideo(){
        $imageName = date('YmdHis',time()).rand(1000,9999);
        $upload = new \Think\Upload();// 实例化上传类
//        $upload->maxSize  = 1024*1024*2 ;// 设置附件上传大小 2MB
        $upload->exts     = array("mp4");// 设置附件上传类型
        $upload->rootPath = 'Uploads/'; // 设置附件上传根目录
        $upload->savePath = 'ImagePic'; // 设置附件上传（子）目录
        $upload->saveName = $imageName;  // 防止重名

        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //进行图片压缩
            foreach($info as $file){
                $inputFile=$upload->rootPath.$file['savepath'].$file['savename'];
            }

            $data['code']=200;
            $data['name'] = $info['Filedata']['name'];
            $data['videoURL'] =__ROOT__. '/' . $inputFile;
            //$data['pictURL'] ='http://' . $_SERVER['HTTP_HOST'] .__ROOT__. '/' . $inputFile;
            $this->ajaxReturn($data);
        }
    }


}