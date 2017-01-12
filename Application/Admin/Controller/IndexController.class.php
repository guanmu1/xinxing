<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-14                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        session_start();
        if (!session('isLogin')) {
            $this->redirect('Index/login');
        } else {
            $this->display();
        }
    }

    public function login(){
        $this->display();
    }

    public function doLogin(){
        $name = I('post.name');
        $password = I('post.password');
        $userInfo = M('User')->where('username = "%s" and password = "%s"',$name,md5($password))->find();
        session_start();
        if ($userInfo) {
            session('isLogin',true);
            session('userName',$name);
            $this->redirect('News/index');
        } else {
            $this->error('密码错误');
        }
    }


    public function logout(){
        session_destroy();
        $this->redirect('Index/login');
    }


}