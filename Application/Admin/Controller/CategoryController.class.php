<?php 
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends CommonController{
	//分类列表
	public function index(){
//		$size = I('get.size') ? I('get.size') : 20;
		$category = M("Category")->where("`deleted` = 0  and `language` = 'cn'")->group(`group`)->select();
        $topInfo = array();
        foreach($category as $val){
        	$topInfo[$val['category_id']] = $val['category_name'];
        }
//        $count = M('Category')->where('deleted=0')->group('group_id')->count();
//        $Page  = new \Common\Util\Page($count,'Category/index',$size);// 实例化分页类
        $list  =  M('Category')->alias('c')
            ->field('c.category_id,c.category_name,c.category_pid,l.lang_name,c.group_id,c.create_time')
            ->join("left join trade_lang l ON l.lang_code = c.language")
            ->where('c.deleted=0 and c.language = "cn"')
//            ->group('c.group_id')
            ->order('l.lang_level asc,c.category_id desc')
            ->select();
        $i = 1;
        foreach($list as &$val){
        	$val['id'] = $i;
        	$val['pname'] = $topInfo[$val['category_pid']] ? $topInfo[$val['category_pid']] : '顶级';
            $i++;
        }
        $p_cate = M("Category")->where("deleted = 0 and category_pid = 0")->select();
        $info = $list;
        $res = array();
        foreach ($p_cate as $key=>$val){
            foreach ($info as $k=>$v){
                if($v['category_pid'] == $val['category_id']){
                    $res[$val['category_name']][] = $v;
                }else{
                    $res[$val['category_name']][] = array();
                }
            }
        }

        if(empty($list)){
            $noData='无结果。。。';
            $data['noData'] = $noData;
            $this->assign('no',1);// 赋值分页输出
        }
//        dump($res);
        $list = null_to_string($res);
//        $show = $Page->show();// 分页显示输出
        $this->assign('_list', $res);
//        $this->assign('page',$show);// 赋值分页输出
//        $this->assign('size',$size);// 每页分页数
		$this->display();
	}
	//添加
	public function add(){
		if(IS_POST){
            $g = M('Category')->max('group_id');
            $gid = $g ? $g : 0;
            $postData = I('post.');
            $insertArr = array();
            foreach($postData['name'] as $key=>$val){
                $oneData['category_name'] = $val;
                if($key == 0){
                    $oneData['language'] = 'cn';
                }
                if($key == 1){
                    $oneData['language'] = 'en';
                }
                if($key == 2){
                    $oneData['language'] = 'fr';
                }
                if($key == 3){
                    $oneData['language'] = 'es';
                }
                if($key == 4){
                    $oneData['language'] = 'pt';
                }
                if($key == 5){
                    $oneData['language'] = 'ru';
                }
                if($key == 6){
                    $oneData['language'] = 'ar';
                }
                $oneData['category_pid'] = $postData['pid'];
                $oneData['group_id'] = $g + 1;
                $oneData['create_time'] = time();
                $oneData['update_time'] = time();
                $insertArr[] = $oneData;
            }

			if (M('Category')->addAll($insertArr)) {
                $this->success('添加成功',U('Category/index'));
            } else {
                $this->error('添加失败');
            }
		}else{
            $cateInfo = M('Category')->where("`category_pid` = 0")->select();
            $this->assign('cateInfo', $cateInfo);
			$this->display();
		}
		
	}
    //修改
    public function edit(){
        if (IS_POST) {
            $groupId = I('post.groupId');
//            M('News')->where('group_id = %d',$groupId)->delete();
//            $insertArr = array();
//            $formData = $_POST['form'];
//            foreach ($formData as $key => $value) {
//                $oneData = array();
//                $oneData['category_name'] = $value['title'];
//                $oneData['category_pid'] = $value['pid'];
//                $oneData['group_id'] = $groupId;
//                $oneData['form_id'] = $key;
//                $oneData['update_time'] = time();
//                foreach ($value['language'] as $v) {
//                    $oneData['language'] = $v;
//                    $insertArr[] = $oneData;
//                }
//            }

            M('Category')->where('group_id = %d',$groupId)->delete();
            $postData = I('post.');
            $insertArr = array();
            foreach($postData['name'] as $key=>$val){
                $oneData['category_name'] = $val;
                if($key == 0){
                    $oneData['language'] = 'cn';
                }
                if($key == 1){
                    $oneData['language'] = 'en';
                }
                if($key == 2){
                    $oneData['language'] = 'fr';
                }
                if($key == 3){
                    $oneData['language'] = 'es';
                }
                if($key == 4){
                    $oneData['language'] = 'pt';
                }
                if($key == 5){
                    $oneData['language'] = 'ru';
                }
                if($key == 6){
                    $oneData['language'] = 'ar';
                }
                $oneData['category_pid'] = $postData['pid'];
                $oneData['group_id'] = $groupId;
                $oneData['create_time'] = time();
                $oneData['update_time'] = time();
                $insertArr[] = $oneData;
            }
            if (M('Category')->addAll($insertArr)) {
                $this->success('修改成功',U('Category/index'));
            } else {
                $this->error('修改失败');
            }
        } else {

            //按照groupId查询出符合条件的数据
            $groupId = I('get.groupId');
            $allInfo = M('Category')->where('`group_id`=%d and `deleted`=0',$groupId)->select();
            $info = array();
            foreach ($allInfo as $val){
                $info['pid'] = $val['category_pid'];
                $info[$val['language']] = $val['category_name'];
            }
            $cateInfo = M('Category')->where("`category_pid` = 0")->select();
//            dump($info);
//            dump($allInfo);exit;

//            //临时数组，$hadLangArr 用于存放按照form_id区分的已选语言。$hadLangArr2用于存放所有已选语言，不区分form_id
//            $hadLangArr = array();
//            $hadLangArr2 = array();
//            foreach ($allInfo as $value) {
//                $hadLangArr[$value['form_id']][] = $value['language'];
//                $hadLangArr2[] = $value['language'];
//            }
//
//
//            //组装7组数据
//            $rInfo = array();
//            for ($i = 0; $i < 7; $i++) {
//                foreach ($allInfo as $value) {
//                    if ($value['form_id'] == $i) {
//                        $rInfo[$i]['category_name'] = $value['category_name'];
//                        $rInfo[$i]['category_pid'] = $value['category_pid'];
//
//                        foreach ($this->allLangArr as $k => $v) {
//                            $rInfo[$i]['language'][$k]['name'] = $this->allLangToCH[$v];
//                            $rInfo[$i]['language'][$k]['value'] = $v;
//
//                            if (in_array($v, $hadLangArr[ $value['form_id'] ])) {
//                                $rInfo[$i]['language'][$k]['state'] = 2;
//                            } elseif (in_array($v, $hadLangArr2)) {
//                                $rInfo[$i]['language'][$k]['state'] = 0;
//                            } else {
//                                $rInfo[$i]['language'][$k]['state'] = 1;
//                            }
//
//                        }
//
//                    }
//                }
//
//                //如果找不到记录
//                if ( !$rInfo[$i] ) {
//                    $rInfo[$i]['category_name'] = '';
//                    $rInfo[$i]['category_pid'] = '';
//
//                    foreach ($this->allLangArr as $k => $v) {
//                        $rInfo[$i]['language'][$k]['name'] = $this->allLangToCH[$v];
//                        $rInfo[$i]['language'][$k]['value'] = $v;
//
//                        if (in_array($v, $hadLangArr2)) {//注意两种判断方式不一样
//                            $rInfo[$i]['language'][$k]['state'] = 0;
//                        } else {
//                            $rInfo[$i]['language'][$k]['state'] = 1;
//                        }
//                    }
//                }
//
//            }
//            $cateInfo = M('Category')->where("`category_pid` = 0")->select();
            $this->assign('cateInfo', $cateInfo);
            $this->assign('info',$info);
            $this->display();
        }
    }

    //删除
    public function del(){
        $groupId = I('post.group_id');
//        dump($groupId);
        $returnResult = array();
        $info = M('Category')->where("group_id = %d and deleted = 0", $groupId)->select();
        $ids = array();
        foreach($info as $val){
            if($val['category_pid'] != 0){
                $ids[] = $val['category_id'];
            }
        }
//        dump($info);dump($ids);exit;
        $map['category_id'] = array('in', $ids);
        $map['deleted'] = 0;
        $info = M('Category')->where($map)->find();
        if($info){
            $returnResult['status'] = -1;
            $returnResult['msg'] = "请先移除该分类下的商品。。";
            return $this->ajaxReturn($returnResult);
        }

        $re = M('Category')->where('group_id=%d',$groupId)->save(array('deleted'=>1));
        if ($re) {
            $returnResult['status'] = 1;
            $returnResult['msg'] = "删除成功";
        } else {
            $returnResult['status'] = -1;
            $returnResult['msg'] = "删除失败";
        }
        return $this->ajaxReturn($returnResult);
    }
}