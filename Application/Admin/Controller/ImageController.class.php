<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2016-04-15                                      */
/*                                                            */
/**************************************************************/
namespace Admin\Controller;
use Think\Controller;
class ImageController extends CommonController {

    public function index(){
        if (IS_POST) {
            $id = I('post.id');
            $imageData = I('post.');
            //dump(M('Image')->where('id=%d',$id)->save($imageData));
            //dump(M('Image')->getLastSql());die;
            //dump($imageData);die;
            if (M('Image')->where('id=%d',$id)->save($imageData)) {
                $this->success('修改成功',U('Image/index'));
            } else {
                $this->error('修改失败');
            }
        } else {
            //$imageId = I('get.id');
            $info = M('Image')->find();
            $this->assign('info',$info);
            $this->display();
        }
    }


    public function uploadPic(){
        $imageName = date('YmdHis',time()).rand(1000,9999);
        $subName = 'ImagePic';
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     20000000 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->subName   =     $subName; // 设置附件上传（子）目录
        $upload->saveName  =     $imageName;
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
            echo $upload->getError();
        }else{// 上传成功
            $path = 'Uploads/'.$info['upfile']['savepath'].$info['upfile']['savename'];
            $image = new \Think\Image();//实例化图片处理类
            $image->open($path);

            $width = $image->width(); // 返回图片的宽度
            $height = $image->height();
            $image->thumb($width,$height)->save($path);//原图

            //$imageType = $image->type();
            //$imageName2x2 = 's_200_200_'.$info['upfile']['savename'];
            //$imageName7x4 = 'm_700_400_'.$info['upfile']['savename'];
            //
            //$image->thumb(700,400,\Think\Image::IMAGE_THUMB_FILLED)->save('Uploads/'.$info['upfile']['savepath'].$imageName7x4);
            //
            //$imageThumb = new \Think\Image();//实例化图片处理类
            //$imageThumb->open($path);
            //$imageThumb->thumb(200,200,\Think\Image::IMAGE_THUMB_FILLED)->save('Uploads/'.$info['upfile']['savepath'].$imageName2x2);

            //echo C('CURRENT_URL').'/specialSelling/'.$path;
            echo __ROOT__.'/'.$path;
        }
    }


    public function uploadMusic(){
        $imageName = date('YmdHis',time()).rand(1000,9999);
        $subName = 'Music';
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     20000000 ;// 设置附件上传大小
        $upload->exts      =     array('mp3');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->subName   =     $subName; // 设置附件上传（子）目录
        $upload->saveName  =     '';
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
            echo $upload->getError();
        }else{// 上传成功
            $path = 'Uploads/'.$info['upfile']['savepath'].$info['upfile']['savename'];

            //$image = new \Think\Image();//实例化图片处理类
            //$image->open($path);

            //$width = $image->width(); // 返回图片的宽度
            //$height = $image->height();
            //$image->thumb($width,$height)->save($path);//原图

            //$imageType = $image->type();
            //$imageName2x2 = 's_200_200_'.$info['upfile']['savename'];
            //$imageName7x4 = 'm_700_400_'.$info['upfile']['savename'];
            //
            //$image->thumb(700,400,\Think\Image::IMAGE_THUMB_FILLED)->save('Uploads/'.$info['upfile']['savepath'].$imageName7x4);
            //
            //$imageThumb = new \Think\Image();//实例化图片处理类
            //$imageThumb->open($path);
            //$imageThumb->thumb(200,200,\Think\Image::IMAGE_THUMB_FILLED)->save('Uploads/'.$info['upfile']['savepath'].$imageName2x2);

            //echo C('CURRENT_URL').'/specialSelling/'.$path;
            echo __ROOT__.'/'.$path;
        }
    }
}