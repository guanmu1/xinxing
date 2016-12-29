<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-15                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class BrandController extends CommonController {
    public function index(){
        $size = I('get.size') ? I('get.size') : 10;
        $count = M('Brand')->where('flag=1')->count();
        $Page  = new \Common\Util\Page($count,'Brand/index',$size);// 实例化分页类
        $list  =  M('Brand')->where('flag=1')->order('brand_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();

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
            $brandData['brand_title'] = I('post.title');
            $brandData['brand_content'] = $_POST['editorValue'];
            $brandData['brand_time'] = date('Y-m-d H:i:s',time());
            $brandData['brand_status'] = 1;

            if (M('Brand')->add($brandData)) {
                $this->success('发布成功',U('Brand/index'));
            } else {
                $this->error('发布失败');
            }
        } else {
            $this->display();
        }
    }


    public function edit(){
        if (IS_POST) {
            $brandId = I('post.brand_id');
            $brandData['brand_title'] = I('post.title');
            $brandData['brand_content'] = $_POST['editorValue'];
            $brandData['brand_time'] = date('Y-m-d H:i:s',time());
            $brandData['brand_status'] = 1;

            if (M('Brand')->where('brand_id=%d',$brandId)->save($brandData)) {
                $this->success('修改成功',U('Brand/index'));
            } else {
                $this->error('修改失败');
            }
        } else {
            $brandId = I('get.brand_id');
            $info = M('Brand')->where('brand_id=%d and flag=1',$brandId)->find();
            $this->assign('info',$info);
            $this->display();
        }
    }

    public function revoke(){
        $brandId = I('get.brand_id');
        $brandData['brand_status'] = 0;
        M('Brand')->where('brand_id=%d',$brandId)->save($brandData);
        $this->success('撤销成功',U('Brand/index'));
    }

    public function publish(){
        $brandId = I('get.brand_id');
        $brandData['brand_status'] = 1;
        M('Brand')->where('brand_id=%d',$brandId)->save($brandData);
        $this->success('发布成功',U('Brand/index'));
    }

    public function del(){
        $brandId = I('get.brand_id');
        $brandData['flag'] = 0;
        M('Brand')->where('brand_id=%d',$brandId)->save($brandData);
        $this->success('删除成功',U('Brand/index'));
    }

}