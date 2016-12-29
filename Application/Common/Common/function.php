<?php

function getStatusName($m){
    switch ($m) {
        case 1:return '已发布';break;
        case 0:return '未发布';break;
        default:return '';break;
    }
}

function getDealStatusName($m){
    switch ($m) {
        case 1:return '已处理';break;
        case 0:return '未处理';break;
        default:return '';break;
    }
}


/**
 * 检测用户是否登录
 * @return integer 0-未登录，大于0-当前登录用户ID
 */
function is_login(){
    $user = session('user_auth');
    if (empty($user)) {
        return 0;
    } else {
        return session('user_auth_sign') == data_auth_sign($user) ? $user['uid'] : 0;
    }
}

/**
 * 检测当前用户是否为管理员
 * @return boolean true-管理员，false-非管理员
 */
function is_administrator($uid = null){
    $uid = is_null($uid) ? is_login() : $uid;
    return $uid && (intval($uid) === C('USER_ADMINISTRATOR'));
}


/**
 * 系统非常规MD5加密方法
 * @param  string $str 要加密的字符串
 * @return string
 */
function think_auth_md5($str, $key = 'DHCFCS'){
	return '' === $str ? '' : md5(sha1($str) . $key);
}


/**
 * 检测验证码
 * @param  integer $id 验证码ID
 * @return boolean     检测结果
 */
function check_verify($code, $id = 1){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

/**
 * 数据签名认证
 * @param  array  $data 被认证的数据
 * @return string       签名
 */
function data_auth_sign($data) {
    //数据类型检测
    if(!is_array($data)){
        $data = (array)$data;
    }
    ksort($data); //排序
    $code = http_build_query($data); //url编码并生成query字符串
    $sign = sha1($code); //生成签名
    return $sign;
}



/**
 * 把返回的数据集转换成Tree
 * @param array $list 要转换的数据集
 * @param string $pid parent标记字段
 * @param string $level level标记字段
 * @return array
 */
function list_to_tree($list, $pk='id', $pid = 'pid', $child = '_child', $root = 0) {
    // 创建Tree
    $tree = array();
    if(is_array($list)) {
        // 创建基于主键的数组引用
        $refer = array();
        foreach ($list as $key => $data) {
            $refer[$data[$pk]] =& $list[$key];
        }
        foreach ($list as $key => $data) {
            // 判断是否存在parent
            $parentId =  $data[$pid];
            if ($root == $parentId) {
                $tree[] =& $list[$key];
            }else{
                if (isset($refer[$parentId])) {
                    $parent =& $refer[$parentId];
                    $parent[$child][] =& $list[$key];
                }
            }
        }
    }
    return $tree;
}

/**
 * 将list_to_tree的树还原成列表
 * @param  array $tree  原来的树
 * @param  string $child 孩子节点的键
 * @param  string $order 排序显示的键，一般是主键 升序排列
 * @param  array  $list  过渡用的中间数组，
 * @return array        返回排过序的列表数组
 */
function tree_to_list($tree, $child = '_child', $order='id', &$list = array()){
    if(is_array($tree)) {
        $refer = array();
        foreach ($tree as $key => $value) {
            $reffer = $value;
            if(isset($reffer[$child])){
                unset($reffer[$child]);
                tree_to_list($value[$child], $child, $order, $list);
            }
            $list[] = $reffer;
        }
        $list = list_sort_by($list, $order, $sortby='asc');
    }
    return $list;
}


function null_to_string(&$data){
    if($data === false || $data === null ){
        return $data;
    }

    $data = (array)$data;
    foreach ($data as $key => $row){
        foreach ($row as $k => $v) {
            if($v == null){
                $data[$key][$k] = '';
            }
        }

    }
    return $data;
}

/**
 * @return string       用户名
 */
function get_username(){
   //获取当前登录用户名
    return session('user_auth.username');
}

/**
 * @return string       昵
 */
function get_nickname(){
   //获取当前登录用户名
    return session('user_auth.nickname');
}
/**
 * @return string       用户id
 */
function get_userid(){
   //获取当前登录用户名
    return session('user_auth.uid');
}


function format_birthday($date){
    if($date == null || $date == ''){
        return '';
    }
    return date('Y-m-d',strtotime($date));
}

function sex($sex){
    switch ($sex) {
        case 1:return '男';break;
        case 2:return '女';break;
        default:return '未知';break;
    }
}

function marital($m){
   switch ($m) {
        case '1':return '已婚';break;
        case '0':return '未婚';break;
        default:return '未知';break;
    }

}

function customer_type($m){
   switch ($m) {
        case 1:return '普通用户';break;
        case 2:return '活跃用户';break;
        case 3:return '低迷用户';break;
        default:return '';break;
    }
}



function communityType($m){
    switch ($m) {
        case 1:return '大社区';break;
        case 2:return '小社区';break;
        default:return '';break;
    }
}

function siteStatus($m){
    switch ($m) {
        case 1:return '规划中';break;
        case 2:return '建设中';break; 
        case 3:return '运营中';break;
        case 4:return '已关闭';break;
        default:return '';break;
    }
}

function memberType($m){
    switch ($m) {
        case 1:return '妻子';break;
        case 2:return '丈夫';break;
        case 3:return '爸爸';break;
        case 4:return '妈妈';break;
        case 5:return '儿子';break;
        case 6:return '女儿';break;
        case 7:return '哥哥';break;
        case 8:return '姐姐';break;
        case 9:return '孙子';break;
        case 10:return '孙女';break;
        default:return '未知';break;
    }
}

function accountType($m){
    switch ($m) {
        case 1:return '手机号';break;
        case 2:return '邮箱';break;
        case 3:return '支付宝';break;
        case 4:return '车牌号';break;
        case 10:return '微博号';break;
        case 11:return '微博平台号';break;
        case 12:return '微博公众号';break;
        case 13:return '微信号';break;
        case 14:return '微信平台号';break;
        case 15:return '微信公众号';break;
        case 16:return 'QQ账号';break;
        case 17:return 'QQ平台号';break;
        case 18:return 'QQ公众号';break;
        case 20:return '银行卡';break;
        case 21:return '中国银行';break;
        case 22:return '农业银行';break;
        case 23:return '交通银行';break;
        case 24:return '会员卡账号';break;
        case 100:return '固定电话';break;
        case 101:return 'CA卡号';break;
        case 102:return '机顶盒号';break;
        case 103:return '燃气号';break;
        case 104:return '水表号';break;
        case 105:return '电表号';break;
        case 106:return '宽带号';break;
        default:return '';break;
    }
}

function templateType($m){
    switch ($m) {
        case 1:return '用户模板';break;
        case 2:return '账号模板';break;
        case 3:return '家庭模板';break;
        default:return '';break;
    }
}



/**
 * 获取用户注册错误信息
 * @param  integer $code 错误编码
 * @return string        错误信息
 */
function showRegError($code = 0){
    switch ($code) {
        //公用
        case -8001: $error = '只能为数字'; break;

        //user
        case -1:    $error = '登陆名长度必须在16个字符以内！'; break;
        case -2:    $error = '登陆名被禁止注册！'; break;
        case -3:    $error = '登陆名被占用！'; break;
        case -4:    $error = '密码长度必须在4-30个字符之间！'; break;
        case -5:    $error = '邮箱格式不正确！'; break;
        case -6:    $error = '邮箱长度必须在1-32个字符之间！'; break;
        case -7:    $error = '邮箱被禁止注册！'; break;
        case -8:    $error = '邮箱被占用！'; break;
        case -9:    $error = '手机格式不正确！'; break;
        case -10:   $error = '手机被禁止注册！'; break;
        case -11:   $error = '手机号被占用！'; break;
        case -12:   $error = '昵称长度必须在16个字符以内！'; break;
        case -13:   $error = '昵称被占用！'; break;

        //family
        case -101:  $error = '家庭名长度必须在32个字符以内';break;
        case -102:  $error = '家庭签名长度必须在150个字符以内';break;
        case -103:  $error = '详细地址长度必须在150个字符以内';break;
        case -104:  $error = '家庭描述长度必须在150个字符以内';break;
        case -105:  $error = '家庭成员数量只能为数字';break;
        case -106:  $error = '楼号只能为数字';break;
        case -107:  $error = '单元只能为数字';break;
        case -108:  $error = '门牌号只能为数字';break;


        case -120:  $error = '名称长度必须在32个字符以内';break;
        case -121:  $error = '描述长度必须在150个字符以内';break;

        //building
        case -201: $error = '请选择所属小区';break;

        default:  $error = '未知错误';
    }
    return $error;
}



/**
 *   checkAuth   检查权限
 *
 */
function checkAuth($module,$controller,$action){
    $name = $module.'/'.$controller.'/'.$action;
    $user_id = session('user_auth.uid');
    //对某个节点进行权限判断，false则不显示该节点
    $nodesArr = session('auth_nodes');
    if (in_array($name, $nodesArr) || C('USER_ADMINISTRATOR') === intval($user_id)) {
        $ret = true;
    } else {
        $ret = false;
    }
    return $ret;
}


/**
 * 枚举类型统一处理
 * @param  [type] $data            [select()数据]
 * @param  [type] $field           [枚举字段]
 * @param  [type] $dictionaryField [对应数据字典的字段]
 * @return [type]                  [description]
 */
function handle_dictionary($data,$field,$dictionaryField){
    if($data === false || $data === null ){
        return $data;
    }

    $data = (array)$data;
    foreach ($data as $key => $row){
        foreach ($row as $k => $v) {
            if($v == null){
                $data[$key][$k] = '';
            }
        }

        $data[$key][$field.'_name'] = site_partner_type($row[$field],C('AppDictionaryInfo.'.$dictionaryField));


    }
    return $data;
}

function site_partner_type($val,$dictionaryInfo){
    
    foreach ($dictionaryInfo as $key => $value) {
        if($key == $val){
            return $value;
        }
    }
}




function _log($msg){
    \Think\Log::write('===========>'.$msg.'<===============');
}




?>
