<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>新兴进出口总公司</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <title>Universe, Website Template</title>
    <meta name="keywords" content="universe, black, website template, templatemo" />
    <meta name="description" content="Universe is free website template by templatemo.com for everyone." />
    <link href="/xinxing/Public/css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/xinxing/Public/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/xinxing/Public/css/lunbo.css">
    <link rel="stylesheet" type="text/css" href="/xinxing/Public/css/ddsmoothmenu.css" />
    <link rel="stylesheet" href="/xinxing/Public/css/slimbox2.css" type="text/css" media="screen" />


    <script type="text/javascript" src="/xinxing/Public/js/jquery-2.1.1.min.js" ></script>
    <script type="text/javascript" src="/xinxing/Public/js/jquery-ui.min.js" ></script>
    <script type="text/javascript" src="/xinxing/Public/js/ddsmoothmenu.js"></script>
    <script type="text/JavaScript" src="/xinxing/Public/js/slimbox2.js"></script>
    <script src="/xinxing/Public/js/slider.js"></script>


    <style>
        .span-dian{color:red;margin: 0 10px;font-size: 16px;}
        .goods-menu-ul>li>a{color:green;font-size: 20px;}

        .first-div{height:30px;background:#9c9d9e;min-width: 1000px;}
        .first-div-container{width: 980px;margin: 0 auto;}
        .first-div-left>a{float:left;margin:6px 0 0 6px;text-decoration: none;color:#F29871;font-size: 12px;}
        .first-div-right{float:right;}
        .first-div-right>a{line-height: 30px;margin-right: 8px;}
        .first-div-right>select{margin-left: 8px;}

        .video-div{background: #524c4c;height: 40px;min-width: 1000px;}
        .video-div-container{width: 980px;margin: 0 auto;}
        .video-div-1{height: 2px;background:#fff;float: left;width: 250px;margin-top: 19px;}
        .video-div-2{height: 2px;background:#f00;float: left;width: 40px;margin-top: 19px;}
        .video-div-3{padding-top: 7px;width: 370px;margin: 0 auto;}
        .video-div-3 img{height: 25px;float: left;border-radius: 5px;margin-left: 20px;}
        .video-div-3 h5{width: 250px;margin-left: 90px;color:#fff;text-align: center;background: red;border-radius: 20px;height: 26px;line-height: 26px;}
        .video-div-4{height: 2px;background:#f00;float: right;width: 290px;margin-top: -24px;}
        .video-div-5{height: 2px;background:#fff;float: right;width: 250px;margin-top: -24px;}

        .products-one{width: 310px;float: left;margin: 10px 0 10px 25px;}
        .products-top-name{height: 20px;width: 100%;border-bottom: 2px solid red;line-height: 23px;}
        .products-top-image{height: 80px;width: 100%;margin: 5px auto;text-align: center;background-size: contain;}
        .products-top-image h3{color: #E22004;padding-top: 17px;margin-bottom: 5px;font-weight: bold;}
        .products-top-image h5{color: #02F901;}
        .products-middle-image{height: 220px;width: 100%;}
        .products-middle-image-red{width: 10px;background: red;height: 220px;float: left;}
        .products-middle-image-img{width: 100%;height: 190px;}
        .products-middle-image-div{background: #E1E2E3;height: 30px;margin-top: -5px;}
        .products-middle-image-div-img{float: left;margin-left: 30px;border-radius: 20px;margin-top: 5px;}
        .products-middle-image-div-span1{float: left;margin-top: 7px;margin-left: 10px;font-size: 14px;}
        .products-middle-image-div-span2{float: right;margin-top: 7px;margin-right: 30px;font-size: 14px;}
        .products-middle-image-float{float: left; margin-top: -210px;margin-left: 232px;}
        .products-bottom-image{height: 80px;width: 100%;}
        .products-bottom-image img{width: 100%;height: 100%;}

        .flexslider {  margin: 0 auto;  position: relative;  width: 100%;  height: 482px; min-width:1000px; overflow: hidden;  zoom: 1;  }
        .flexslider .slides li {  width: 100%;  height: 100%;  }
        .flex-direction-nav a {  width: 70px;  height: 70px;  line-height: 99em;  overflow: hidden;  margin: -35px 0 0;  display: block;  background: url(/xinxing/Public/images/ad_ctr.png) no-repeat;  position: absolute;  top: 50%;  z-index: 10;  cursor: pointer;  opacity: 0;  filter: alpha(opacity=0);  -webkit-transition: all .3s ease;  border-radius: 35px;  }
        .flex-direction-nav .flex-next {  background-position: 0 -70px;  right: 0;  }
        .flex-direction-nav .flex-prev {  left: 0;  }
        .flexslider:hover .flex-next {  opacity: 0.8;  filter: alpha(opacity=25);  }
        .flexslider:hover .flex-prev {  opacity: 0.8;  filter: alpha(opacity=25);  }
        .flexslider:hover .flex-next:hover,
        .flexslider:hover .flex-prev:hover {  opacity: 1;  filter: alpha(opacity=50);  }
        .flex-control-nav {  width: 100%;  position: absolute;  bottom: 10px;  text-align: center;  }
        .flex-control-nav li {  margin: 0 2px;  display: inline-block;  zoom: 1;  *display: inline;  }
        .flex-control-paging li a {  background: url(/xinxing/Public/images/dot.png) no-repeat 0 -16px;  display: block;  height: 16px;  overflow: hidden;  text-indent: -99em;  width: 16px;  cursor: pointer;  }
        .flex-control-paging li a.flex-active,
        .flex-control-paging li.active a {  background-position: 0 0;  }
        .flexslider .slides a img {  width: 100%;  height: 482px;  display: block;  }
    </style>
    <script>
        $(function(){
            /**
             * 切换语言
             */
            $('#select-lang').change(function(){
                var data={'lang':$(this).val()};
                $.get("<?php echo U('Index/lang');?>",data,function(){
                    location.reload();
                })
            });
        });
    </script>
</head>
<body style="background-image: url(/xinxing/Public/images/bb2.png);background-position: center top;">
<div class="first-div">
    <div class="first-div-container">
        <div class="first-div-left">
            <img style="margin-top:6px;float:left;" src="http://l.b2b168.com/2010/03/15/07/20100315074652393812.gif" height="18" alt="" />
            <a>CHINA STATE OWNED MILITARY CORPORATION</a>
        </div>
        <div class="first-div-right">
            <a style="text-decoration: none;color: #666;" href="<?php echo U('Index/index');?>">Home</a>
            <a ><?php echo L('当前语言');?></a> |

            <select name="" id="select-lang">
                <option <?php if(cookie('lang_value') == 'cn'): ?>selected<?php endif; ?> value="cn">中文</option>
                <option <?php if(cookie('lang_value') == 'en'): ?>selected<?php endif; ?> value="en">EngLish</option>
                <option value="">EngLish</option>
                <option value="">EngLish</option>
            </select>
        </div>
    </div>
</div>
<div style="height:70px;min-width:1000px;background:#FFF;padding-top:10px;">
    <div style="margin:0 auto;width:980px;">
        <img src="/xinxing/Public/images/xinxinglogo.png" alt="" width="300"/>

        <div class="ddsmoothmenu" style="color:gray;float:right;" id="templatemo_menu">
            <ul>
                <li><a href="<?php echo U('About/index');?>" <?php if(CONTROLLER_NAME == 'About' ): ?>class="selected"<?php endif; ?> style="padding-left: 10px;"><span></span><?php echo L('关于我们');?></a>
                    <ul>
                        <li><a href="<?php echo U('About/index');?>"><?php echo L('历史沿革');?></a></li>
                        <li><a href="<?php echo U('About/intro');?>"><?php echo L('公司简介');?></a></li>
                        <li><a href="<?php echo U('About/honor');?>"><?php echo L('企业荣誉');?></a></li>
                    </ul>
                </li>

                <li><a href="<?php echo U('Video/index');?>" <?php if(CONTROLLER_NAME == 'Video' ): ?>class="selected"<?php endif; ?>  ><span class="span-dian">·</span><?php echo L('媒体中心');?></a></li>
                <li><a href="<?php echo U('Goods/index');?>" <?php if(CONTROLLER_NAME == 'Goods' or CONTROLLER_NAME == 'Range' ): ?>class="selected"<?php endif; ?> ><span class="span-dian">·</span><?php echo L('业务产品');?></a>
                    <ul>
                        <li><a href="<?php echo U('Range/index');?>"><?php echo L('业务范围');?></a></li>
                        <li><a href="<?php echo U('Goods/index');?>"><?php echo L('产品展示');?></a></li>
                    </ul>
                </li>
                <li><a href="<?php echo U('Recruit/index');?>" <?php if(CONTROLLER_NAME == 'Recruit' ): ?>class="selected"<?php endif; ?> ><span class="span-dian">·</span><?php echo L('人才引进');?></a></li>
                <li><a href="<?php echo U('Contact/index');?>" <?php if(CONTROLLER_NAME == 'Contact' ): ?>class="selected"<?php endif; ?> ><span class="span-dian">·</span><?php echo L('联系我们');?></a></li>
            </ul>
            <br style="clear: left" />
        </div>

    </div>
</div>
<div style="height:66px;min-width:1000px;background-image:url(/xinxing/Public/images/tb1.png);">
    <div  style="width:980px;margin:0 auto;">

        <div class="div-second-menu" id="templatemo_menu_goods">
            <ul>
                <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cItem): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Goods/index',array('cpid'=>$cItem['category_id']));?>"><span></span><?php echo L($cItem['category_name']);?></a>

                        <?php if($cItem['children']): ?><ul>
                                <?php if(is_array($cItem["children"])): foreach($cItem["children"] as $key=>$ccItem): ?><li><a href="<?php echo U('Goods/index',array('cid'=>$ccItem['category_id']));?>"><?php echo ($ccItem["category_name"]); ?></a></li><?php endforeach; endif; ?>
                            </ul><?php endif; ?>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li><a href="index.html" class="selected"><span></span><?php echo L('衣帽');?></a></li>-->
                <!--<li><a href="blog.html"><span></span>鞋靴<?php echo L('产品展示');?></a>-->
                    <!--<ul>-->
                        <!--<li><a href="blog.html">Category One</a></li>-->
                        <!--<li><a href="blog.html">Category Two</a></li>-->
                        <!--<li><a href="blog.html">Category Three</a></li>-->
                        <!--<li><a href="blog.html">Category Four</a></li>-->
                        <!--<li><a href="blog.html">Category Five</a></li>-->
                    <!--</ul>-->
                <!--</li>-->
                <!--<li><a href="gallery.html"><span></span><?php echo L('防弹产品');?></a>-->
                    <!--<ul>-->
                        <!--<li><a href="gallery.html">Page One</a></li>-->
                        <!--<li><a href="gallery.html">Page Two</a></li>-->
                        <!--<li><a href="gallery.html">Page Three</a></li>-->
                        <!--<li><a href="gallery.html">Page Four</a></li>-->
                        <!--<li><a href="gallery.html">Page Five</a></li>-->
                    <!--</ul>-->
                <!--</li>-->
                <!--<li><a href="about.html"><span></span><?php echo L('装具');?></a></li>-->
                <!--<li><a href="contact.html"><span></span><?php echo L('警用产品');?></a></li>-->
                <!--<li><a href="contact.html"><span></span><?php echo L('车辆及装备');?></a></li>-->
            </ul>

            <img onclick="searchGoods()" style="float:right;margin-top:18px;" src="/xinxing/Public/images/search.png" alt="" width="30" height='30'/>
            <input style="float: right;margin-top: 18px;margin-right: 20px;height: 25px;border-radius: 15px;border: none;width: 200px;padding-left:20px;" type="text" name="" placeholder="<?php echo L('请输入产品关键字');?>" />

            <br style="clear: left" />
        </div>


    </div>
</div>

<div id="banner_tabs" class="flexslider">
    <ul class="slides">
        <?php if(is_array($list_imgs)): foreach($list_imgs as $key=>$item): ?><li>
                <a title="" target="_blank" href="#">
                    <img width="1920" height="480" alt="" style="background: url(<?php echo ($item["image_link"]); ?>) no-repeat center;" src="/xinxing/Public/images/alpha.png">
                </a>
            </li><?php endforeach; endif; ?>

        <!--<li>-->
            <!--<a title="" target="_blank" href="#">-->
                <!--<img width="1920" height="480" alt="" style="background: url(/xinxing/Public/images/chaodabei1.png) no-repeat center;" src="/xinxing/Public/images/alpha.png">-->
            <!--</a>-->
        <!--</li>-->
        <!--<li>-->
            <!--<a title="" href="#">-->
                <!--<img width="1920" height="480" alt="" style="background: url(/xinxing/Public/images/chaodabei1.png) no-repeat center;" src="/xinxing/Public/images/alpha.png">-->
            <!--</a>-->
        <!--</li>-->
        <!--<li>-->
            <!--<a title="" href="#">-->
                <!--<img width="1920" height="480" alt="" style="background: url(/xinxing/Public/images/chaodabei1.png) no-repeat center;" src="/xinxing/Public/images/alpha.png">-->
            <!--</a>-->
        <!--</li>-->
    </ul>
    <ul class="flex-direction-nav">
        <li><a class="flex-prev" href="javascript:;">Previous</a></li>
        <li><a class="flex-next" href="javascript:;">Next</a></li>
    </ul>
    <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
        <li><a>1</a></li>
        <li><a>2</a></li>
        <li><a>2</a></li>
    </ol>
</div>

<div  class="video-div" >
    <div class="video-div-container" >
        <div class="video-div-1" ></div>
        <div class="video-div-2" ></div>
        <div class="video-div-3" >
            <img src="/xinxing/Public/images/yingpianlogo.png" alt=""  style="width: 50px;height: 46px;margin-top: -10px;">
            <a style="color:#fff;text-decoration: none;" href="<?php echo U('Video/index');?>"><h5 >2016年最新宣传片</h5></a>
        </div>
        <div class="video-div-4" ></div>
        <div class="video-div-5" ></div>
    </div>
</div>

<div id="templatemo_wrapper">
    <div id="templatemo_main_content" style="padding-bottom: 30px;">
        <div class="products-one" style="margin-left: 0;">
            <div class="products-top-name" >
                | <span><?php echo L('衣帽');?> </span><span>CLOTHES AND HATS</span>
                <span style="float: right;"> +<?php echo L('更多');?></span>
            </div>
            <div class="products-top-image" style="background-image: url(/xinxing/Public/images/b1.png);">
                <h3 ><?php echo L('衣帽');?></h3>
                <h5 >CLOTHES AND HATS</h5>
            </div>
            <div class="products-middle-image">
                <div class="products-middle-image-red" ></div>
                <div style="width: 299px;float: left;border-top: 1px solid #9c9d9e;border-right: 1px solid #9c9d9e;">
                    <a href="<?php echo U('Goods/detail',array('id'=>$goodInfo[1]['goods_id']));?>">
                        <img class="products-middle-image-img" src="<?php echo ($goodInfo[1]['goods_img0']); ?>" alt="">
                        <div class="products-middle-image-div" >
                            <img class="products-middle-image-div-img"  src="/xinxing/Public/images/tubiao1.png" width="20" height="20" alt="">
                            <span class="products-middle-image-div-span1" ><?php echo ($goodInfo[1]['goods_weight']); ?></span>
                            <span class="products-middle-image-div-span2" ><?php echo ($goodInfo[1]['goods_size']); ?></span>
                        </div>
                    </a>
                </div>
                <span class="products-middle-image-float" ><?php echo ($goodInfo[1]['goods_code']); ?></span>
            </div>
            <div class="products-bottom-image">
                <img src="/xinxing/Public/images/bb1.png" alt="">
            </div>
        </div>

        <div class="products-one">
            <div class="products-top-name" >
                | <span><?php echo L('鞋靴');?> </span><span>SHOES AND BOOTS</span>
                <span style="float: right;"> +<?php echo L('更多');?></span>
            </div>
            <div class="products-top-image" style="background-image: url(/xinxing/Public/images/b2.png);">
                <h3 ><?php echo L('鞋靴');?></h3>
                <h5 >SHOES AND BOOTS</h5>
            </div>
            <div class="products-middle-image">
                <div class="products-middle-image-red" ></div>
                <div style="width: 299px;float: left;border-top: 1px solid #9c9d9e;border-right: 1px solid #9c9d9e;">
                    <a href="<?php echo U('Goods/detail',array('id'=>$goodInfo[2]['goods_id']));?>">
                        <img class="products-middle-image-img" src="<?php echo ($goodInfo[2]['goods_img0']); ?>" alt="">
                        <div class="products-middle-image-div" >
                            <img class="products-middle-image-div-img"  src="/xinxing/Public/images/tubiao1.png" width="20" height="20" alt="">
                            <span class="products-middle-image-div-span1" ><?php echo ($goodInfo[2]['goods_weight']); ?></span>
                            <span class="products-middle-image-div-span2" ><?php echo ($goodInfo[2]['goods_size']); ?></span>
                        </div>
                    </a>
                </div>
                <span class="products-middle-image-float" ><?php echo ($goodInfo[2]['goods_code']); ?></span>
            </div>
            <div class="products-bottom-image">
                <img src="/xinxing/Public/images/bb1.png" alt="">
            </div>
        </div>

        <div class="products-one">
            <div class="products-top-name" >
                | <span><?php echo L('防弹产品');?> </span><span>BULLET PROOF PRODUCTS</span>
                <span style="float: right;"> +<?php echo L('更多');?></span>
            </div>
            <div class="products-top-image" style="background-image: url(/xinxing/Public/images/b3.png);">
                <h3 ><?php echo L('防弹产品');?></h3>
                <h5 >BULLET PROOF PRODUCTS</h5>
            </div>
            <div class="products-middle-image">
                <div class="products-middle-image-red" ></div>
                <div style="width: 299px;float: left;border-top: 1px solid #9c9d9e;border-right: 1px solid #9c9d9e;">
                    <a href="<?php echo U('Goods/detail',array('id'=>$goodInfo[3]['goods_id']));?>">
                        <img class="products-middle-image-img" src="<?php echo ($goodInfo[3]['goods_img0']); ?>" alt="">
                        <div class="products-middle-image-div" >
                            <img class="products-middle-image-div-img"  src="/xinxing/Public/images/tubiao1.png" width="20" height="20" alt="">
                            <span class="products-middle-image-div-span1" ><?php echo ($goodInfo[3]['goods_weight']); ?></span>
                            <span class="products-middle-image-div-span2" ><?php echo ($goodInfo[3]['goods_size']); ?></span>
                        </div>
                    </a>
                </div>
                <span class="products-middle-image-float" ><?php echo ($goodInfo[3]['goods_code']); ?></span>
            </div>
            <div class="products-bottom-image">
                <img src="/xinxing/Public/images/bb1.png" alt="">
            </div>
        </div>

        <div class="products-one" style="margin-left: 0;">
            <div class="products-top-name" >
                | <span><?php echo L('装具');?> </span><span>ARTICLES</span>
                <span style="float: right;"> +<?php echo L('更多');?></span>
            </div>
            <div class="products-top-image" style="background-image: url(/xinxing/Public/images/b4.png);">
                <h3 ><?php echo L('装具');?></h3>
                <h5 >ARTICLES</h5>
            </div>
            <div class="products-middle-image">
                <div class="products-middle-image-red" ></div>
                <div style="width: 299px;float: left;border-top: 1px solid #9c9d9e;border-right: 1px solid #9c9d9e;">
                    <a href="<?php echo U('Goods/detail',array('id'=>$goodInfo[4]['goods_id']));?>">
                        <img class="products-middle-image-img" src="<?php echo ($goodInfo[4]['goods_img0']); ?>" alt="">
                        <div class="products-middle-image-div" >
                            <img class="products-middle-image-div-img"  src="/xinxing/Public/images/tubiao1.png" width="20" height="20" alt="">
                            <span class="products-middle-image-div-span1" ><?php echo ($goodInfo[4]['goods_weight']); ?></span>
                            <span class="products-middle-image-div-span2" ><?php echo ($goodInfo[4]['goods_size']); ?></span>
                        </div>
                    </a>
                </div>
                <span class="products-middle-image-float" ><?php echo ($goodInfo[4]['goods_code']); ?></span>
            </div>
            <div class="products-bottom-image">
                <img src="/xinxing/Public/images/bb1.png" alt="">
            </div>
        </div>

        <div class="products-one">
            <div class="products-top-name" >
                | <span><?php echo L('警用产品');?> </span><span>POLICE PRODUCT</span>
                <a style="float: right;"> +<?php echo L('更多');?></a>
            </div>
            <div class="products-top-image" style="background-image: url(/xinxing/Public/images/b5.png);">
                <h3 ><?php echo L('警用产品');?></h3>
                <h5 >POLICE PRODUCT</h5>
            </div>
            <div class="products-middle-image">
                <div class="products-middle-image-red" ></div>
                <div style="width: 299px;float: left;border-top: 1px solid #9c9d9e;border-right: 1px solid #9c9d9e;">
                    <a href="<?php echo U('Goods/detail',array('id'=>$goodInfo[5]['goods_id']));?>">
                        <img class="products-middle-image-img" src="<?php echo ($goodInfo[5]['goods_img0']); ?>" alt="">
                        <div class="products-middle-image-div" >
                            <img class="products-middle-image-div-img"  src="/xinxing/Public/images/tubiao1.png" width="20" height="20" alt="">
                            <span class="products-middle-image-div-span1" ><?php echo ($goodInfo[5]['goods_weight']); ?></span>
                            <span class="products-middle-image-div-span2" ><?php echo ($goodInfo[5]['goods_size']); ?></span>
                        </div>
                    </a>
                </div>
                <span class="products-middle-image-float" ><?php echo ($goodInfo[5]['goods_code']); ?></span>
            </div>
            <div class="products-bottom-image">
                <img src="/xinxing/Public/images/bb1.png" alt="">
            </div>
        </div>

        <div class="products-one">
            <div class="products-top-name" >
                | <span><?php echo L('车辆及装备');?> </span><span>VEHICLE AND EQ</span>
                <a style="float: right;"> +<?php echo L('更多');?></a>
            </div>
            <div class="products-top-image" style="background-image: url(/xinxing/Public/images/b6.png);">
                <h3 ><?php echo L('车辆及装备');?></h3>
                <h5 >VEHICLE AND EQ</h5>
            </div>
            <div class="products-middle-image">
                <div class="products-middle-image-red" ></div>
                <div style="width: 299px;float: left;border-top: 1px solid #9c9d9e;border-right: 1px solid #9c9d9e;">
                    <a href="<?php echo U('Goods/detail',array('id'=>$goodInfo[6]['goods_id']));?>">
                        <img class="products-middle-image-img" src="<?php echo ($goodInfo[6]['goods_img0']); ?>" alt="">
                        <div class="products-middle-image-div" >
                            <img class="products-middle-image-div-img"  src="/xinxing/Public/images/tubiao1.png" width="20" height="20" alt="">
                            <span class="products-middle-image-div-span1" ><?php echo ($goodInfo[6]['goods_weight']); ?></span>
                            <span class="products-middle-image-div-span2" ><?php echo ($goodInfo[6]['goods_size']); ?></span>
                        </div>
                    </a>
                </div>
                <span class="products-middle-image-float" ><?php echo ($goodInfo[6]['goods_code']); ?></span>
            </div>
            <div class="products-bottom-image">
                <img src="/xinxing/Public/images/bb1.png" alt="">
            </div>
        </div>
        <div class="clear"></div>
    </div> <!-- END of templatemo_main_content -->

</div> <!-- END of templatemo_wrapper -->
<script type="text/javascript">
    $(function() {
        var bannerSlider = new Slider($('#banner_tabs'), {
            time: 5000,
            delay: 400,
            event: 'hover',
            auto: true,
            mode: 'fade',
            controller: $('#bannerCtrl'),
            activeControllerCls: 'active'
        });
        $('#banner_tabs .flex-prev').click(function() {
            bannerSlider.prev()
        });
        $('#banner_tabs .flex-next').click(function() {
            bannerSlider.next()
        });
    });

    ddsmoothmenu.init({
        mainmenuid: "templatemo_menu", //menu DIV id
        orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
        classname: 'ddsmoothmenu', //class added to menu's outer DIV
        customtheme: ["#fff", "#585859"],
        contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    });

    ddsmoothmenu.init({
        mainmenuid: "templatemo_menu_goods", //menu DIV id
        orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
        classname: 'ddsmoothmenu-goods', //class added to menu's outer DIV
        customtheme: ["", "#585859"],
        contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    })


    $(document).ready(function(){
        $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
    });


    function searchGoods(){
        location.href = "<?php echo U('Goods/search');?>";
    }
</script>
<style>
    .coop{border-bottom: 3px solid #07F900;background-image: url(/xinxing/Public/images/jianbian.png);background-size: cover;}
    .coop-title{text-align: center;padding-top: 40px;}
    .coop-title h2{color:#fff;}
    .coop-content{width: 950px;margin:  0 auto;padding-bottom: 30px;}
    #focus img{width: 270px;height:50px;margin-left:  12px;margin-bottom: 10px;}
</style>
<div class="coop">
    <div class="coop-title">
        <h2><?php echo L('合作机构');?> Cooperative organization</h2>
    </div>
    <!--<div class="coop-content">-->
        <!--<img src="/xinxing/Public/images/hezuo1.png" alt="">-->
        <!--<img src="/xinxing/Public/images/hezuo2.png" alt="">-->
        <!--<img src="/xinxing/Public/images/hezuo3.png" alt="">-->
        <!--<img src="/xinxing/Public/images/hezuo1.png" alt="">-->
        <!--<img src="/xinxing/Public/images/hezuo2.png" alt="">-->
        <!--<img src="/xinxing/Public/images/hezuo3.png" alt="">-->
        <!--<img src="/xinxing/Public/images/hezuo1.png" alt="">-->
        <!--<img src="/xinxing/Public/images/hezuo2.png" alt="">-->
        <!--<img src="/xinxing/Public/images/hezuo3.png" alt="">-->
    <!--</div>-->

    <div class="wrapper">
        <div class="btnBg" style="opacity: 0.5;"></div>
        <div>
            <div class="preNext pre" style="opacity: 0.4;"></div>
        </div>
        <div id="focus" style="width: 850px;">
                <ul>
                    <?php if(is_array($coopInfo)): foreach($coopInfo as $key=>$item): ?><li><a href=""><img width="" height="100" src="<?php echo ($item["coop_link"]); ?>" alt="<?php echo ($item["coop_title"]); ?>" /></a></li><?php endforeach; endif; ?>
                    <!--<li><a href=""><img width="" height="100" src="/xinxing/Public/images/hezuo2.png" alt="" /></a></li>-->
                    <!--<li><a href=""><img width="" height="100" src="/xinxing/Public/images/hezuo3.png" alt="" /></a></li>-->
                    <!--<li><a href=""><img width="" height="100" src="/xinxing/Public/images/hezuo1.png" alt="" /></a></li>-->
                    <!--<li><a href=""><img width="" height="100" src="/xinxing/Public/images/hezuo2.png" alt="" /></a></li>-->
                    <!--<li><a href=""><img width="" height="100" src="/xinxing/Public/images/hezuo3.png" alt="" /></a></li>-->
                </ul>
        </div>
        <div style="float: right;margin-top: -90px;">
            <div class="preNext next" style="opacity: 0.4;"></div>
        </div>
    </div>


</div>
<style type="text/css">
    .clearfix:after {content: "."; display: block; height: 0; clear: both; visibility: hidden;}
    .clearfix {zoom:1;}
    ul,li {list-style:none;}
    img {border:0;}

    .wrapper {width:1000px; margin:0 auto;}

    h1 {height:50px; line-height:50px; font-size:22px; font-weight:normal; font-family:"Microsoft YaHei",SimHei;}

    .download {display:block; width:120px; height:34px; background:#333; line-height:34px; font-size:14px; font-weight:bold; text-align:center; color:#fff; border:1px solid #999; margin-top:10px;}
    .fenxiang {height:16px; padding:20px 0 10px; margin-bottom:10px;}

    .shuoming {margin-top:20px; border:1px solid #ccc; padding-bottom:10px;}
    .shuoming dt {height:30px; line-height:30px; font-weight:bold; text-indent:10px;}
    .shuoming dd {line-height:20px; padding:5px 20px;}

    /* qqshop focus */
    #focus {height:90px;overflow:hidden; position:relative;}
    #focus ul {height:90px;position:absolute;padding-top: 8px;}
    #focus ul li {float:left;  height:90px; overflow:hidden; position:relative; }
    #focus ul li a{margin-left: 0px;}
    #focus ul li div {position:absolute; overflow:hidden;}
    #focus .btnBg {position:absolute;  height:20px; left:0; bottom:0; background:#000;}
    #focus .btn {position:absolute;  height:10px; padding:5px 10px; right:0; bottom:0; text-align:right;}
    #focus .btn span {display:inline-block; _display:inline; _zoom:1; width:25px; height:10px; _font-size:0; margin-left:5px; cursor:pointer; background:#fff;}
    #focus .btn span.on {background:#fff;}
    .preNext {width:68px; height:68px; cursor:pointer;}
    .pre {float:left;background:url(/xinxing/Public/images/prev.png) no-repeat;}
    .next {float:right; background:url(/xinxing/Public/images/next.png) no-repeat;}
</style>

<script type="text/javascript">
    $(function() {
        var sWidth = $("#focus").width(); //获取焦点图的宽度（显示面积）
        var len = $("#focus ul li").length; //获取焦点图个数
        len = Math.ceil(len/3);
        var index = 0;
        var picTimer;

        //以下代码添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
        var btn = "<div class='btnBg'></div><div class='preNext pre'></div><div class='preNext next'></div>";
//        $("#focus").append(btn);
        $("#focus .btnBg").css("opacity",0.8);

        //为小按钮添加鼠标滑入事件，以显示相应的内容
        $("#focus .btn span").css("opacity",0.4).mouseenter(function() {
            index = $("#focus .btn span").index(this);
            showPics(index);
        }).eq(0).trigger("mouseenter");

        //上一页、下一页按钮透明度处理
        $(".preNext").css("opacity",0.4).hover(function() {
            $(this).stop(true,false).animate({"opacity":"0.8"},300);
        },function() {
            $(this).stop(true,false).animate({"opacity":"0.4"},300);
        });

        //上一页按钮
        $(".pre").click(function() {
            index -= 1;
            if(index == -1) {index = len - 1;}
            showPics(index);
        });

        //下一页按钮
        $(".next").click(function() {
            index += 1;
            if(index == len) {index = 0;}
            showPics(index);
        });

        //本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
        $("#focus ul").css("width",sWidth * (len));

        //鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
        $("#focus").hover(function() {
            clearInterval(picTimer);
        },function() {
            picTimer = setInterval(function() {
                showPics(index);
                index++;
                if(index == len) {index = 0;}
            },4000); //此4000代表自动播放的间隔，单位：毫秒
        }).trigger("mouseleave");

        //显示图片函数，根据接收的index值显示相应的内容
        function showPics(index) { //普通切换
            var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
            $("#focus ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
            //$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
            $("#focus .btn span").stop(true,false).animate({"opacity":"0.4"},300).eq(index).stop(true,false).animate({"opacity":"1"},300); //为当前的按钮切换到选中的效果
        }
    });

</script>


<style>
    .foot-div{height:300px;min-width:1000px;background-image: url(/xinxing/Public/images/tb1.png);background-size:cover;padding-top: 80px;color:#FFF;}
    .foot-div-row{width: 980px;margin: 0 auto;}
    .foot-div-row>div{width: 300px;height: 75px;border:1px solid white;border-radius: 15px;float: left;margin-left: 20px;}
    .foot-div-row-a{text-align: center;}
    .foot-div-row-a>p{font-size: 40px;font-weight: bold;margin-top: 20px;color:red;}
    .foot-div-row-a>h5{font-size: 10px;margin-top: 13px;letter-spacing:-1px;color:#fff;}

    .foot-div-row-b{}
    .foot-div-row-b>img{float: left;width: 45px;height: 45px;margin-left: 55px;margin-top: 15px;}
    .foot-div-row-b>p{float: left;margin-left: 25px;margin-top: 20px;}
    .foot-div-row-c{}
    .foot-div-row-c>img{float: left;width: 45px;height: 45px;margin-left: 55px;margin-top: 15px;}
    .foot-div-row-c>p{float: left;margin-left: 10px;margin-top: 20px;width: 135px;}

    .foot-div-row2{width: 980px;margin: 0 auto;margin-top: 40px;}

    .foot-div-row2-div{width: 140px;float: left;margin-left: 50px;}
    .font-size-16{font-size: 16px;}
    .font-size-13{font-size: 13px;}
    .margin-bottom5{margin-bottom: 5px;}
    .margin-top7{margin-top: 7px;}
    .c-line-div{height: 3px;background-color: red;width:25px;float: left;}
    .x-line-div{height: 2px;background-color: gray;width:95px;float: left;margin-top: 1px;}
</style>

<div class="foot-div">
    <div class="foot-div-row">
        <div class="foot-div-row-a">
            <p >C X X C</p>
            <h5 >CHINA STATE OWNED MILITARY CORPORATION</h5>
        </div>
        <div class="foot-div-row-b">
            <img  src="/xinxing/Public/images/call43.png" alt="">
            <p >
                T: <?php echo ($contactInfo["phone1"]); ?><br/>
                F: <?php echo ($contactInfo["phone2"]); ?>
            </p>
        </div>
        <div class="foot-div-row-c">
            <img  src="/xinxing/Public/images/pointer10.png" alt="">
            <p >
                <?php echo ($contactInfo["contact_address"]); ?>
            </p>
        </div>
    </div>
    <div style="clear: both;"></div>

    <div class="foot-div-row2">
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><?php echo L('关于我们');?></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><?php echo L('历史沿革');?></p>
            <p class="font-size-13 margin-bottom5"><?php echo L('公司简介');?></p>
            <p class="font-size-13 margin-bottom5"><?php echo L('企业荣誉');?></p>
        </div>
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><?php echo L('媒体中心');?></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><?php echo L('视频广告');?></p>
        </div>
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><?php echo L('业务产品');?></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><?php echo L('业务范围');?></p>
            <p class="font-size-13 margin-bottom5"><?php echo L('产品展示');?></p>
        </div>
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><?php echo L('人才引进');?></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><?php echo L('招贤纳士');?></p>
        </div>
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><?php echo L('联系我们');?></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><?php echo L('地理位置');?></p>
            <p class="font-size-13 margin-bottom5"><?php echo L('办公电话');?></p>
            <p class="font-size-13 margin-bottom5"><?php echo L('邮箱');?></p>
        </div>
    </div>
</div>


<div class="first-div" style="background-color: #646566;height:60px;">
    <div class="first-div-container">
        <div class="first-div-left">
            <h3 style="color: #3D3E3F;font-size: 16px;padding-top: 20px;text-align: center;">&copy; <?php echo L('版权');?></h3>
        </div>

    </div>
</div>








</body>
</html>