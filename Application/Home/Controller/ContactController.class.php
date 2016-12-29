<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2015-09-15                                      */
/*                                                            */
/**************************************************************/
namespace Home\Controller;
use Think\Controller;
class ContactController extends CommonController {
    public function index(){
        $info = M('Contact')->where('group_id = 0 and language="%s"',cookie('lang_value'))->find();
        $this->assign('info',$info);
        $this->display();
    }
}