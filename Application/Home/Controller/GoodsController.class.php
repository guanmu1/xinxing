<?php
/**************************************************************/
/*                      主页控制器                         */
/*  @vision ： V1.0                                            */
/*  @date   ： 2015-09-15                                      */
/*                                                            */
/**************************************************************/
namespace Home\Controller;
use Think\Controller;
class GoodsController extends CommonController {
    public function index(){
        $where['n.deleted'] = 0;
        $where['n.language'] = cookie('lang_value');

        $cid = I('get.cid');
        if ($cid) {
            $where['n.category_id'] = $cid;
        } else {
            $where['n.category_pid'] = I('get.cpid') ? I('get.cpid') : 1;//默认为1
        }



        $size = 8;
        $count  =  M('Goods')->alias('n')
            ->where($where)
            ->count();
        $Page  = new \Common\Util\Page($count,'Goods/index',$size);// 实例化分页类
        $list  =  M('Goods')->alias('n')
            ->field('n.goods_id,n.goods_name,n.goods_code,n.goods_weight,n.goods_size,n.goods_img0,n.create_time,n.language,n.group_id,c1.category_name as category_pname')
            ->join('left join trade_category c1 ON c1.category_id = n.category_pid')
            ->join('left join trade_category c2 ON c2.category_id = n.category_id')
            ->where($where)
            ->order('n.create_time desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();

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
        $this->assign('count',$count);

        $this->assign('thisCpid',$where['n.category_pid']);

        $this->display();
    }

    public function search(){
        $keyword = I('get.keyword');

        $where['n.deleted'] = 0;
        $where['n.language'] = cookie('lang_value');
        $where['n.goods_name'] = array('like','%'.$keyword.'%');

        $size = 8;
        $count  =  M('Goods')->alias('n')
            ->where($where)
            ->count();
        $Page  = new \Common\Util\Page($count,'Goods/index',$size);// 实例化分页类
        $list  =  M('Goods')->alias('n')
            ->field('n.goods_id,n.goods_name,n.goods_code,n.goods_weight,n.goods_size,n.goods_img0,n.create_time,n.language,n.group_id')
            ->where($where)
            ->order('n.create_time desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();
        //echo M('Goods')->getLastSql();

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
        $this->assign('count',$count);

        $this->display();
    }

    public function detail(){
        $goods_id = I('get.id');
        $goodsInfo = M('Goods')->where("goods_id = ".$goods_id."")->find();
        //得到商品的分类
        $cateInfo = M("Category")->field('category_name')->where("category_id = ".$goodsInfo['category_pid']."")->find();
        $goodsInfo['category_name'] = $cateInfo['category_name'];
        $imgArr = array();
        if($goodsInfo['goods_img0']){
            $pos = strrpos($goodsInfo['goods_img0'], '/');
            $imgArr[] = substr($goodsInfo['goods_img0'], ($pos + 1));
        }
        if($goodsInfo['goods_img1']){
            $pos = strrpos($goodsInfo['goods_img1'], '/');
            $imgArr[] = substr($goodsInfo['goods_img1'], ($pos + 1));
        }
        if($goodsInfo['goods_img2']){
            $pos = strrpos($goodsInfo['goods_img2'], '/');
            $imgArr[] = substr($goodsInfo['goods_img2'], ($pos + 1));
        }
        if($goodsInfo['goods_img3']){
            $pos = strrpos($goodsInfo['goods_img3'], '/');
            $imgArr[] = substr($goodsInfo['goods_img3'], ($pos + 1));
        }
        if($goodsInfo['goods_img4']){
            $pos = strrpos($goodsInfo['goods_img4'], '/');
            $imgArr[] = substr($goodsInfo['goods_img4'], ($pos + 1));
        }
        if($goodsInfo['goods_img5']){
            $pos = strrpos($goodsInfo['goods_img5'], '/');
            $imgArr[] = substr($goodsInfo['goods_img5'], ($pos + 1));
        }

        $goodsInfo['img'] = $imgArr;
//        dump($goodsInfo);

        $this->assign('goodsInfo', $goodsInfo);
        $this->display();
    }
}