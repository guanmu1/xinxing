<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-14                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public $allLangArr = array('cn','en','fr','es','pt','ru','ar');
    public $allLangToCH = array('cn'=>'中文','en'=>'英语','fr'=>'法语','es'=>'西班牙语','pt'=>'葡萄牙语','ru'=>'俄语','ar'=>'阿拉伯语');

    public function _initialize(){
        if(isset($_POST['str'])){
            session_id($_POST['str']);
            session_start();
        }else{
            session_start();
        }
        if (!session('isLogin')) {
            $this->redirect('Index/Login');
        }

    }

   

}