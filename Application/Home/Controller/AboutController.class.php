<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2015-09-15                                      */
/*                                                            */
/**************************************************************/
namespace Home\Controller;
use Think\Controller;
class AboutController extends CommonController {
    public function index(){
        $size = 8;
        $count  =  M('News')->alias('n')
            ->where('n.deleted=0 and news_type=1 and language="%s"',cookie('lang_value'))
            ->count();
        $Page  = new \Common\Util\Page($count,'About/index',$size);// 实例化分页类
        $list  =  M('News')->alias('n')
            ->field('n.news_id,n.news_title,n.news_content,n.img,n.create_time,n.language,n.group_id')
            ->where('n.deleted=0 and news_type=1 and language="%s"',cookie('lang_value'))
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

    public function intro(){
        $info = M('News')->where('group_id = 1 and language="%s"',cookie('lang_value'))->find();
        $this->assign('info',$info);
        $this->display();
    }

    public function honor(){
        $info = M('Honor')->where('language="%s"',cookie('lang_value'))->select();
        //dump($info);
        $this->assign('info',$info);
        $this->display();
    }

    // public function home(){
    //     $newsList = M('News')->where('flag = 1 and news_status=1')->order('news_time desc')->limit(10)->select();
    //     foreach ($newsList as &$value) {
    //         preg_match("/<img.*?\/>/", $value['news_content'], $matches);
    //         $arr = explode("src=\"",$matches[0]);
    //         $arr1 = explode('"',$arr[1]);
    //         $value['img'] = $arr1[0];
    //         $value['news_content'] = mb_substr(strip_tags($value['news_content']),0,50);
    //         $value['date'] = date('Y-m-d',strtotime($value['news_time']));

    //     }
    //     $activityList = M('Activity')->where('flag = 1 and activity_status=1')->order('activity_time desc')->limit(5)->select();
    //     foreach ($activityList as &$value) {
    //         preg_match("/<img.*?\/>/", $value['activity_content'], $matches);
    //         $arr = explode("src=\"",$matches[0]);
    //         $arr1 = explode('"',$arr[1]);
    //         $value['img'] = $arr1[0];
    //         $value['date'] = date('Y-m-d',strtotime($value['activity_time']));

    //     }

    //     $teacherInfo = M('Teacher')->where('flag = 1 and teacher_status = 1')->order('add_time asc')->limit(5)->select();
    //     $studentInfo = M('Student')->where('flag = 1 and student_status = 1')->order('add_time asc')->limit(5)->select();
    //     $videoList = M('Video')->where('flag = 1 and video_status = 1')->order('video_time desc')->limit(3)->select();

    //     $this->assign('newsList',$newsList);
    //     $this->assign('videoList',$videoList);
    //     $this->assign('activityList',$activityList);
    //     $this->assign('teacherInfo',$teacherInfo);
    //     $this->assign('studentInfo',$studentInfo);

    //     $this->display();
    // }


}