<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2015-09-15                                      */
/*                                                            */
/**************************************************************/
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $list  =  M('ImageHome')->alias('n')
            ->where('n.deleted=0 and language="%s"',cookie('lang_value'))
            ->order('n.create_time desc')
            ->select();

        $list = null_to_string($list);
        //dump($list);die;
        $this->assign('list_imgs', $list);
        //得到每个分类下的首页展示的产品
        $goodInfo = M('Goods')
            ->where("deleted = 0 and language='%s' and show_home = 1", cookie('lang_value'))
            ->order('category_pid asc')
            ->select();
        $goodsInfo = array();
        $cate_pid = array();
        foreach($goodInfo as $val){
            $cate_pid[] = $val['category_pid'];
            if($val['category_pid'] == 1){
                $goodsInfo[1] = $val;
            }
            if($val['category_pid'] == 2){
                $goodsInfo[2] = $val;
            }
            if($val['category_pid'] == 3){
                $goodsInfo[3] = $val;
            }
            if($val['category_pid'] == 4){
                $goodsInfo[4] = $val;
            }
            if($val['category_pid'] == 5){
                $goodsInfo[5] = $val;
            }
            if($val['category_pid'] == 6){
                $goodsInfo[6] = $val;
            }
        }

        $allCate = array(1,2,3,4,5,6);
        foreach($allCate as $val){
            if(!in_array($val, $cate_pid)){
                $goodsInfo[$val] = M('Goods')->where("deleted = 0 and language = '%s' and category_pid = %d", cookie('lang_value'), $val)->order("create_time desc")->find();
            }
        }


        $this->assign('goodInfo', $goodsInfo);
        $coopInfo = M('Coop')->where('deleted = 0 and language="%s"',cookie('lang_value'))->select();
        $this->assign('coopInfo',$coopInfo);
        $this->display();
    }

    public function lang(){
        switch(I('get.lang')){
            case 'cn'://汉语
                cookie('lang_value','cn');
                cookie('think_language','zh-cn');
                break;
            case 'en'://英语
                cookie('lang_value','en');
                cookie('think_language','en-us');
                break;
            case 'fr'://法语
                cookie('lang_value','fr');
                cookie('think_language','fr-fr');
                break;
            case 'es'://西班牙语
                cookie('lang_value','es');
                cookie('think_language','es-es');
                break;
            case 'pt'://葡萄牙语
                cookie('lang_value','pt');
                cookie('think_language','pt-br');
                break;
            case 'ru'://法语
                cookie('lang_value','ru');
                cookie('think_language','ru-mo');
                break;
            case 'ar'://阿拉伯语
                cookie('lang_value','ar');
                cookie('think_language','ar-sa');
                break;
        }
    }

}