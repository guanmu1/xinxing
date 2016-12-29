<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-14                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {
    public function index(){

    	echo 123;
    }

    public function updatePassword(){
        if (IS_POST) {
            $oldPassword = I('post.old_password');
            $newPassword = I('post.new_password');
            $confirmPassword = I('post.confirm_password');
            if ($newPassword !== $confirmPassword) {
                $this->error('两次输入的密码不一致');
                return;
            }
            $where['username'] = session('userName');
            $where['password'] = md5($oldPassword);
            $oldUserInfo = M('User')->where($where)->find();
            if ($oldUserInfo) {
                $updateData['password'] = md5($confirmPassword);
                $res = M('User')->where('id=%d',$oldUserInfo['id'])->save($updateData);
                if ($res) {
                    $this->success('修改密码成功,请重新登录',U('Index/Logout'));
                } else {
                    $this->error('修改失败,请联系运维人员');
                }
            }

        } else {
            $this->display();
        }
    }

}