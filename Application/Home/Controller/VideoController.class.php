<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2015-09-15                                      */
/*                                                            */
/**************************************************************/
namespace Home\Controller;
use Think\Controller;
class VideoController extends CommonController {
    public function index(){
        $size = 8;
        $count  =  M('Video')->alias('n')
            ->where('n.deleted=0 and language="%s"',cookie('lang_value'))
            ->count();
        $Page  = new \Common\Util\Page($count,'Video/index',$size);// 实例化分页类
        $list  =  M('Video')->alias('n')
            ->field('n.video_id,n.video_title,n.video_link,n.create_time,n.language,n.group_id')
            ->where('n.deleted=0 and language="%s"',cookie('lang_value'))
            ->order('n.create_time desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

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
}