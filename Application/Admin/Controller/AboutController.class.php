<?php
/**************************************************************/
/*                      关于我们控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-15                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class AboutController extends CommonController {

    public function edit(){
        if (IS_POST) {
            $aboutId = I('post.about_id');
            $aboutData['about_title'] = I('post.title');
            $aboutData['about_content'] = $_POST['editorValue'];
            $aboutData['about_time'] = date('Y-m-d H:i:s',time());
            if (M('About')->where('about_id=%d',$aboutId)->save($aboutData)) {
                $this->success('修改成功',U('About/edit',array('about_id'=>$aboutId)));
            } else {
                $this->error('修改失败');
            }
        } else {
            $aboutId = I('get.about_id');
            $info = M('About')->where('about_id=%d ',$aboutId)->find();
            $this->assign('info',$info);
            $this->display();
        }
    }
}