<?php
/*
*	Nodecheck	   权限节点控制器类
*	@author    tangrongbo	
*	@date    2015-07-31
*/
namespace Common\TagLib;
use Think\Template\TagLib;

class Nodecheck extends TagLib{
	protected $tags = array(
		'node' => array('attr' => 'module,controller,action'),
	);

	//自定义标签<node></node>
	public function _node($tag,$content)   {
		$module     =   $tag['module'];
		$controller =	$tag['controller'];
		$action		=	$tag['action'];

		$return = checkAuth($module,$controller,$action);
		// dump($return);die;
		// $return = checkAuth($module,$controller,$action);
		
		if( $return){
			return $content;
		}else{
			return '';
		}
	}





}