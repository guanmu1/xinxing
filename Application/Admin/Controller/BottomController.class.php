<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-15                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class BottomController extends CommonController {

    public function edit(){
        if (IS_POST) {
            $id = I('post.id');
            $data = I('post.');

            if (M('Bottom')->where('id=%d',$id)->save($data)) {
                $this->success('修改成功',U('Bottom/edit',array('id'=>$id)));
            } else {
                $this->error('修改失败');
            }
        } else {
            $id = 1;
            $info = M('Bottom')->where('id=%d',$id)->find();
            $this->assign('info',$info);
            $this->display();
        }
    }

}