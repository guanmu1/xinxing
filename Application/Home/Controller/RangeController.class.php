<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2015-09-15                                      */
/*                                                            */
/**************************************************************/
namespace Home\Controller;
use Think\Controller;
class RangeController extends CommonController {
    public function index(){
        $info = M('Range')->where('deleted = 0 and language="%s"',cookie('lang_value'))->select();
        //dump($info);
        $this->assign('info',$info);
        $this->display();
    }
}