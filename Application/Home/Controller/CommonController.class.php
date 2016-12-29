<?php

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller{
    public function _initialize(){
        if (!cookie('lang_value')) {
            cookie('lang_value','cn');
        }

        //分类数据
        $category = M("Category")->where("`deleted` = 0 and `language` = 'cn' and `category_pid` = 0")->select();
        foreach ($category as &$value) {
            $value['children'] = M("Category")->where("`deleted` = 0 and `language` = '%s' and `category_pid` = %d",cookie('lang_value'),$value['category_id'])->select();
        }
        //var_dump($category);
        $this->assign('category', $category);

        $list  =  M('ImageHome')->alias('n')
            ->where('n.deleted=0 and language="%s"',cookie('lang_value'))
            ->order('n.create_time desc')
            ->select();

        $list = null_to_string($list);
        $this->assign('imageHeader', $list);


        $listOther  =  M('ImageOther')->alias('n')
            ->where('n.deleted=0 and language="%s"',cookie('lang_value'))
            ->order('n.create_time desc')
            ->select();

        $list = null_to_string($list);
        $this->assign('imageOther', $listOther);

        $contactInfo = M('Contact')->where('group_id = 0 and language="%s" and deleted = 0',cookie('lang_value'))->find();
        $this->assign('contactInfo',$contactInfo);

    }
}