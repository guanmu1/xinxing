<?php
namespace Common\Util;

Class Category {
    static public $id;
    static public $parent_id;

    public function __construct($id,$parent_id) {
        self::$id = $id;
        self::$parent_id = $parent_id;
    }

    /**
     * @param Array  $cate  分类表结果集
     * @param Intval  $parent_id   树形数组的根元素id
     * * */
    static public function getTreeArray($cate, $parent_id = 0) {
        $arr = Array();
        foreach ($cate as $v) {
            if ($v['parent_id'] == $parent_id) {
                $v['child'] = self::getTreeArray($cate, $v[self::$id]);
                $arr[] = $v;
            }
        }
        return $arr;
    }


    /**
     * @param  array  $cate  分类表结果集
     * @param  integer $parent_id   树形数组的根元素id
     * @return 返回当前节点下面的所有子级group_id
     */
    static public function getAllChildInfoByGroupid($cate, $parent_id = 0) {
       
        $ids = '';
        foreach ($cate as $v) {
            if ($v['parent_id'] == $parent_id) {
                $ids .= $v[self::$id].',';
                $ids .= self::getAllChildInfoByGroupid($cate, $v[self::$id]);
                
            }
        }
        return $ids;
    }

    /**
    *   getAnotherTreeArray    获得另一种形式的树状数组，直接一级foreach即可实现无线级遍历
    *
    *
    */
    static public function getAnotherTreeArray($cate, $need_show_field = array('id','name','pid'), $level = 0) {
        $newLevel = $level+1;
        $returnArr = array();
        foreach ($cate as $key => $value) {
            $arr = array();
            foreach ($need_show_field as $k => $v) {//遍历需要显示的字段，依次赋值
                $arr[$v] = $value[$v];
            }
            $arr['level'] = $newLevel;
            $returnArr[] = $arr;
            if ($value['child']) {
                $returnArr = array_merge($returnArr,self::getAnotherTreeArray($value['child'],$need_show_field,$newLevel));
            }
        }
        return $returnArr;
    }


    /**
     * @param Array  $cate  分类表结果集
     * @param Array  $attribute 要添加属性的元素id和对应属性 例:array(6=>array('selected'=>'selected'),8=>array('class'=>'active'))
     * @param Intval  $parent_id 要添加属性的子集的根元素id
     * @param Intval  $level 子集的起始级别,一般从零级开始不需要传参
     * * */
    static public function addAttribute($cate, $attribute, $parent_id = 0, $level = 0) {
        $arr = array();
        foreach ($cate as $v) {
            if ($v['parent_id'] == $parent_id) {
                $v['level'] = $level + 1;
                if (isset($attribute[$v[self::$id]]) && is_array($attribute[$v[self::$id]])) {
                    foreach ($attribute[$v[self::$id]] as $key => $value) {
                        $v['attribute'][$key] = $value;
                    }
                }
                $arr[] = $v;
                $arr = array_merge($arr, self::addAttribute($cate, $attribute, $v[self::$id], $level + 1));
            }
        }
        return $arr;
    }

    /**
     * @param Array  $cate  分类表结果集
     * @param Intval  $id  要查找的当前元素id
     * * */
    static public function getParentsArray($cate, $id) {
        $arr = array();
        foreach ($cate as $v) {
            if ($v['id'] == $id) {
                $arr[] = $v;
                $arr = array_merge(self::getParentsArray($cate, $v['id']), $arr);
            }
        }
        return $arr;
    }

    /**
     * @param Array  $cate  分类表结果集
     * @param Intval  $parent_id  要查找的子集的根元素id
     * * */
    static public function getChildsArray($cate, $parent_id) {
        $arr = array();
        foreach ($cate as $v) {
            if ($v['parent_id'] == $parent_id) {
                $arr[] = $v;
                $arr = array_merge($arr, self::getChildsArray($cate, $v['id']));
            }
        }
        return $arr;
    }

    /**
     * @param Array  $cate  分类表结果集
     * @param Intval  $id  要查找的当前元素id
     * * */
    static public function getBrothersArray($cate, $id) {
        $arr = $current = array();
        foreach ($cate as $value) {
            if ($value['id'] == $id) {
                $current = $value;
            }
        }
        foreach ($cate as $value) {
            if ($value['parent_id'] == $current['parent_id']) {
                $arr[] = $value;
            }
        }
        return $arr;
    }

    /**
     * @Member Array  $icon  树形html需要的三种节点图标
     * @Member String  $nbsp  子集与父级之间的缩进标识
     * @Member String  $html  树形html最终生成结果
     * * */
    static public $icon = array('│', '├', '└');
    static public $nbsp = "&nbsp;";
    static public $html = '';

    /**
     * @param Array  $cate  树形数组该数组由getTreeArray方法生成
     * @param String  $tpl   生成html的模板字符串例:"<option value=\$id \$attribute>\$spacer\$name</option>"
     * 其中"\$id","\$name"等均为结果集固有字段,"\$attribute"为通过addAttribute方法添加的属性拼装字符串,"\spacer"
     * 为$icon和$nbsp属性结合生成的缩进字符串
     * @param Boolean  $isRoot  生成不同的子集缩进效果,该值有true和false供选择
     * * */
    static public function getTreeHtml($cate, $tpl, $isRoot = true) {
        if ($isRoot === true) {
            $isRoot = '';
        } elseif ($isRoot === false) {
            $isRoot = ' ';
        }
        $number = 1;
        if (is_array($cate)) {
            $total = count($cate);
            foreach ($cate as $id => $value) {
                $j = $k = '';
                if ($number == $total) {
                    $j .= self::$icon[2];
                } else {
                    $j .= self::$icon[1];
                    $k = $isRoot ? self::$icon[0] : '';
                }
                $spacer = $isRoot ? $isRoot . $j : '';
                //$selected = $id == $sid ? 'selected' : '';
                @extract($value);
                if (is_array($attribute)) {
                    $tmp = $attribute;
                    $attribute = '';
                    foreach ($tmp as $x => $y) {
                        $attribute.=' ' . $x . '="' . $y . '" ';
                    }
                }
                eval("\$nstr = \"$tpl\";");
                unset($attribute);
                self::$html .= $nstr;
                $nbsp = self::$nbsp;
                self::getTreeHtml($value['child'], $tpl, $isRoot . $k . $nbsp);
                $number++;
            }
        }
        return self::$html;
    }

}
