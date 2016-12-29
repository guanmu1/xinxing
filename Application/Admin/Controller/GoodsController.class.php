<?php
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends CommonController{

    public function index(){
        $size = I('get.size') ? I('get.size') : 20;
        $count = M('Goods')->alias('n')
            ->join('left join trade_category c1 ON c1.category_id = n.category_id')
            ->join('left join trade_category c2 ON c2.category_id = n.category_pid')
            ->join("left join trade_lang l ON l.lang_code = n.language")
            ->where('n.deleted=0')
            ->count('distinct n.group_id');

        $Page  = new \Common\Util\Page($count,'Goods/index',$size);// 实例化分页类
        $list  =  M('Goods')->alias('n')
            ->field('n.goods_name,n.show_home,n.goods_code,c1.category_name as category_name,c2.category_name as category_pname,n.create_time,l.lang_name,n.group_id,n.category_pid')

            ->join('left join trade_category c1 ON c1.category_id = n.category_id')
            ->join('left join trade_category c2 ON c2.category_id = n.category_pid')

            ->join("left join trade_lang l ON l.lang_code = n.language")
            ->where('n.deleted=0')
            ->group('n.group_id')
            ->order('l.lang_level asc,n.goods_id desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

        //dump($list);die;
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
        if(IS_POST){
            $g = M('Goods')->max('group_id');
            $gid = $g ? $g : 0;
            $insertArr = array();
            $formData = $_POST['form'];
            foreach ($formData as $key => $value) {
                $oneData                      = array();
                $oneData['goods_name']        = $value['goods_name'];
                $oneData['goods_code']        = $value['goods_code'];
                $oneData['goods_intro']       = $value['goods_intro'];
                $oneData['goods_weight']       = $value['goods_weight'];
                $oneData['goods_size']       = $value['goods_size'];
                $oneData['goods_description'] = $value['goods_description'];
                $oneData['category_pid']      = $value['category_pid'];
                //$oneData['category_id']       = $value['category_id'];

                $categoryGroupId = M('Category')->where('category_id = %d',$value['category_id'])->getField('group_id');
                if($categoryGroupId){
                    $categoryInfo = M('Category')->where("`group_id` = %d", $categoryGroupId)->select();
                }else{
                    $categoryInfo = array();
                }

                foreach($value['ad_content_urls'] as $k=>$val){
                    $oneData['goods_img'.$k]        = $val;
                }

//                $oneData['goods_img1']        = $value['goods_img1'];
//                $oneData['goods_img2']        = $value['goods_img2'];
//                $oneData['goods_img3']        = $value['goods_img3'];
//                $oneData['goods_img4']        = $value['goods_img4'];
//                $oneData['goods_img5']        = $value['goods_img5'];
//                $oneData['goods_img6']        = $value['goods_img6'];
//                $oneData['goods_img7']        = $value['goods_img7'];
//                $oneData['goods_img8']        = $value['goods_img8'];
                $oneData['group_id']          = $gid + 1;
                $oneData['form_id']           = $key;
                $oneData['create_time']       = time();
                foreach ($value['language'] as $v) {
                    $oneData['language'] = $v;
                    //根据语言找到对应的二级分类id
                    foreach ($categoryInfo as $cv) {
                        if ($cv['language'] == $v) {
                            $oneData['category_id'] = $cv['category_id'];
                            break;
                        }
                    }
                    $insertArr[] = $oneData;
                }
            }
//            dump($insertArr);

            if (M('Goods')->addAll($insertArr)) {
                $this->success('添加成功',U('Goods/index'));
            } else {
                $this->error('添加失败');
            }


        }else{
            $category = M("Category")->where("`deleted` = 0 and `language` = 'cn' and `category_pid` = 0")->select();
            $this->assign('category', $category);
            $this->assign('phpsessid', session_id());
            $this->display();
        }
    }

    public function edit(){
        if (IS_POST) {
            //var_dump($_POST['form']);die;
            $groupId = I('post.groupId');
            //M('Goods')->where('group_id = %d',$groupId)->save(array('deleted'=>1));
//            M('Goods')->where('group_id = %d',$groupId)->delete();

            $insertArr = array();
            $formData = $_POST['form'];
            $insertArr = array();
            foreach ($formData as $key => $value) {
                $oneData                      = array();
                $oneData['goods_name']        = $value['goods_name'];
                $oneData['goods_code']        = $value['goods_code'];
                $oneData['goods_intro']       = $value['goods_intro'];
                $oneData['goods_weight']       = $value['goods_weight'];
                $oneData['goods_size']       = $value['goods_size'];
                $oneData['goods_description'] = $value['goods_description'];
                $oneData['category_pid']      = $value['category_pid'];
                $oneData['show_home']         = $value['show_home'];
                //$oneData['category_id']       = $value['category_id'];
                $categoryGroupId = M('Category')->where("`category_id` = '".$value['category_id']."'")->getField('group_id');
                if($categoryGroupId){
                    $categoryInfo = M('Category')->where("group_id = '".$categoryGroupId."'")->select();
                }else{
                    $categoryInfo = array();
                }

                foreach($value['ad_content_urls'] as $k=>$val){
                    $oneData['goods_img'.$k]        = $val;
                }

//                $oneData['goods_img1']        = $value['goods_img1'];
//                $oneData['goods_img2']        = $value['goods_img2'];
//                $oneData['goods_img3']        = $value['goods_img3'];
//                $oneData['goods_img4']        = $value['goods_img4'];
//                $oneData['goods_img5']        = $value['goods_img5'];
//                $oneData['goods_img6']        = $value['goods_img6'];
//                $oneData['goods_img7']        = $value['goods_img7'];
//                $oneData['goods_img8']        = $value['goods_img8'];
                $oneData['group_id']          = $groupId;
                $oneData['form_id']           = $key;
                $oneData['create_time']       = time();
                foreach ($value['language'] as $v) {
                    $oneData['language'] = $v;
                    //根据语言找到对应的二级分类id
                    foreach ($categoryInfo as $cv) {
                        if ($cv['language'] == $v) {
                            $oneData['category_id'] = $cv['category_id'];
                            break;
                        }
                    }
                    $insertArr[] = $oneData;
                }
            }

            if (M('Goods')->addAll($insertArr)) {
                $this->success('修改成功',U('Goods/index'));
            } else {
                $this->error('修改失败');
            }
        } else {

            //按照groupId查询出符合条件的数据
            $groupId = I('get.groupId');
            $allInfo = M('Goods')->where('group_id=%d and deleted=0',$groupId)->select();

            //临时数组，$hadLangArr 用于存放按照form_id区分的已选语言。$hadLangArr2用于存放所有已选语言，不区分form_id
            $hadLangArr = array();
            $hadLangArr2 = array();
            foreach ($allInfo as $value) {
                $hadLangArr[$value['form_id']][] = $value['language'];
                $hadLangArr2[] = $value['language'];
            }


            //组装7组数据
            $rInfo = array();
            for ($i = 0; $i < 7; $i++) {
                $rInfo[ $i ] = array();
                foreach ($allInfo as $value) {

                    if ($value['form_id'] == $i) {
                        $cate = M("Category")->where("category_pid = %d and deleted = 0 and language = 'cn'", $value['category_pid'])->select();
                        $rInfo[ $i ]['goods_name']        = $value['goods_name'];
                        $rInfo[ $i ]['goods_code']        = $value['goods_code'];
                        $rInfo[ $i ]['goods_weight']      = $value['goods_weight'];
                        $rInfo[ $i ]['goods_size']        = $value['goods_size'];
                        $rInfo[ $i ]['goods_intro']       = $value['goods_intro'];
                        $rInfo[ $i ]['goods_description'] = $value['goods_description'];
                        $rInfo[ $i ]['category_pid']      = $value['category_pid'];
                        $rInfo[$i]['show_home']           = $value['show_home'];
                        $rInfo[ $i ]['category_id']       = $this->getCnSecondId($value['category_id']);
                        $rInfo[ $i ]['ad_content_urls'][0]       = $value['goods_img0'];
                        $rInfo[ $i ]['ad_content_urls'][1]       = $value['goods_img1'];
                        $rInfo[ $i ]['ad_content_urls'][2]       = $value['goods_img2'];
                        $rInfo[ $i ]['ad_content_urls'][3]       = $value['goods_img3'];
                        $rInfo[ $i ]['ad_content_urls'][4]       = $value['goods_img4'];
                        $rInfo[ $i ]['ad_content_urls'][5]       = $value['goods_img5'];
                        $rInfo[ $i ]['ad_content_urls'][6]       = $value['goods_img6'];
                        $rInfo[ $i ]['ad_content_urls'][7]       = $value['goods_img7'];
                        $rInfo[ $i ]['ad_content_urls'][8]       = $value['goods_img8'];
                        $rInfo[$i]['sec_cate'] = $cate;

                        foreach ($this->allLangArr as $k => $v) {
                            $rInfo[$i]['language'][$k]['name'] = $this->allLangToCH[$v];
                            $rInfo[$i]['language'][$k]['value'] = $v;

                            if (in_array($v, $hadLangArr[ $value['form_id'] ])) {
                                $rInfo[$i]['language'][$k]['state'] = 2;
                            } elseif (in_array($v, $hadLangArr2)) {
                                $rInfo[$i]['language'][$k]['state'] = 0;
                            } else {
                                $rInfo[$i]['language'][$k]['state'] = 1;
                            }

                        }

                    }
                }

                //如果找不到记录
                if ( !$rInfo[$i] ) {
                    $rInfo[ $i ]['goods_name']        = '';
                    $rInfo[ $i ]['goods_code']        = '';
                    $rInfo[ $i ]['goods_weight']      = '';
                    $rInfo[ $i ]['goods_size']        = '';
                    $rInfo[ $i ]['goods_intro']       = '';
                    $rInfo[ $i ]['goods_description'] = '';
                    $rInfo[ $i ]['category_pid']      = '';
                    $rInfo[ $i ]['category_id']       = '';
                    $rInfo[ $i ]['ad_content_urls'][0]       = '';
                    $rInfo[ $i ]['ad_content_urls'][1]       = '';
                    $rInfo[ $i ]['ad_content_urls'][2]       = '';
                    $rInfo[ $i ]['ad_content_urls'][3]       = '';
                    $rInfo[ $i ]['ad_content_urls'][4]       = '';
                    $rInfo[ $i ]['ad_content_urls'][5]       = '';
                    $rInfo[ $i ]['ad_content_urls'][6]       = '';
                    $rInfo[ $i ]['ad_content_urls'][7]       = '';
                    $rInfo[ $i ]['ad_content_urls'][8]       = '';
                    $rInfo[$i]['sec_cate']                   = array();


                    foreach ($this->allLangArr as $k => $v) {
                        $rInfo[$i]['language'][$k]['name'] = $this->allLangToCH[$v];
                        $rInfo[$i]['language'][$k]['value'] = $v;

                        if (in_array($v, $hadLangArr2)) {//注意两种判断方式不一样
                            $rInfo[$i]['language'][$k]['state'] = 0;
                        } else {
                            $rInfo[$i]['language'][$k]['state'] = 1;
                        }
                    }
                }

            }

//            dump($rInfo);
            $arr1 = array();
            $arr2 = array();
            foreach ($rInfo as $value) {
                if ($value['goods_name']) {
                    $arr1[] = $value;
                } else {
                    $arr2[] = $value;
                }
            }

            $retInfo = array_merge($arr1,$arr2);
            $category = M("Category")->where("`deleted` = 0 and `language` = 'cn' and `category_pid` = 0")->select();
            $this->assign('category', $category);
            $this->assign('rInfo',$retInfo);
            $this->assign('phpsessid', session_id());
            $this->display();
        }
    }

    //根据商品二级分类id得到对应的中文分类id
    protected function getCnSecondId($category_id){
        $id = '';
        if(!$category_id){
           $id = '';
        }else{
            $info = M("Category")->field('group_id')->where("category_id = %d", $category_id)->find();
            $cateInfo = M("Category")->field('category_id')->where("group_id = %d and language = 'cn'", $info['group_id'])->find();
            $id = $cateInfo['category_id'];
        }

        return $id;
    }


    public function getCategory(){
        $pid = I('post.pid');
        $cate = M('Category')->where("category_pid = %d and language='cn' ", $pid)->select();
        $returnResult = array();
        if($cate){
            $returnResult['status'] = 1;
            $returnResult['msg'] = $cate;
        }else{
            $returnResult['status'] = -1;
            $returnResult['msg'] = "该分类下无二级分类";
        }
        $this->ajaxReturn($returnResult);
    }

    //上传图片
    public function uploadPic(){
        $imageName = date('YmdHis',time()).rand(1000,9999);
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  = 1024*1024*2 ;// 设置附件上传大小 2MB
        $upload->exts     = array("jpeg", "jpg", "png", "gif");// 设置附件上传类型
        $upload->rootPath = 'Uploads/'; // 设置附件上传根目录
        $upload->savePath = 'ImagePic'; // 设置附件上传（子）目录
        $upload->saveName = $imageName;  // 防止重名

        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //进行图片压缩
            $path = 'Uploads/'.$info['Filedata']['savepath'].$info['Filedata']['savename'];
            $image = new \Think\Image();//实例化图片处理类
            $image->open($path);
//            //添加图片水印
//            $image->open('./'.$info)->water('./Data/logo.png',\Think\Image::IMAGE_WATER_NORTHWEST,50)->save('./'.$info);
//            //添加文字水印
//            //$image->open('./'.$info)->text('姜医生','./Data/1.ttf',20,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->save($info);
            $image->water('Uploads/ImagePic/logo.png', $image::IMAGE_WATER_NORTHWEST, 50)->save($path);
            $image->thumb(800,800,\Think\Image::IMAGE_THUMB_FILLED)->save('Public/goods/big/'.$info['Filedata']['savename']);
            $image->thumb(400,400,\Think\Image::IMAGE_THUMB_FILLED)->save('Public/goods/mid/'.$info['Filedata']['savename']);
            $image->thumb(100,100,\Think\Image::IMAGE_THUMB_FILLED)->save('Public/goods/small/'.$info['Filedata']['savename']);

            foreach($info as $file){
                $inputFile=$upload->rootPath.$file['savepath'].$file['savename'];
            }

            $data['code']=200;
            $data['pictURL'] =__ROOT__. '/' . $inputFile;
            //$data['pictURL'] ='http://' . $_SERVER['HTTP_HOST'] .__ROOT__. '/' . $inputFile;
            $this->ajaxReturn($data);
        }
    }


    function setShowHome(){
        $groupId    = I('get.groupId');
        $categoryPid = I('get.categoryPid');
        if ($groupId) {
            $allUpdateArr['show_home'] = 0;
            M('Goods')->where('group_id != %d and category_pid=%d',$groupId,$categoryPid)->save($allUpdateArr);

            $updateArr['show_home'] = 1;
            M('Goods')->where('group_id = %d and category_pid=%d',$groupId,$categoryPid)->save($updateArr);
            $this->success('设置成功',U('Goods/index'));
        } else {
            $this->error('参数错误');
        }
    }

    public function del(){
        $groupId = I('post.group_id');
        $re = M('Goods')->where('group_id=%d',$groupId)->save(array('deleted'=>1));
        $returnResult = array();
        if ($re) {
            $returnResult['status'] = 1;
            $returnResult['msg'] = "删除成功";
        } else {
            $returnResult['status'] = -1;
            $returnResult['msg'] = "删除失败";
        }
        $this->ajaxReturn($returnResult);
    }


}