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
    <link href="/xinxing/Public/css/bootstrap.min.home.css" rel="stylesheet" type="text/css" />
    <link href="/xinxing/Public/css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/xinxing/Public/css/nivo-slider.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="/xinxing/Public/css/lunbo.css">



    <script type="text/javascript" src="/xinxing/Public/js/jquery-1.6.3.min.js" ></script>
    <script type="text/javascript" src="/xinxing/Public/js/jquery-ui.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
        });
    </script>

    <link rel="stylesheet" type="text/css" href="/xinxing/Public/css/ddsmoothmenu.css" />

    <script type="text/javascript" src="/xinxing/Public/js/ddsmoothmenu.js"></script>

    <script type="text/javascript">

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


    </script>

    <link rel="stylesheet" href="/xinxing/Public/css/slimbox2.css" type="text/css" media="screen" />
    <script type="text/JavaScript" src="/xinxing/Public/js/slimbox2.js"></script>
    <style>
        .span-dian{color:red;margin: 0 10px;font-size: 16px;}
        .goods-menu-ul>li>a{color:green;font-size: 20px;}

        .first-div{height:30px;min-width:1000px;background:#D4D4D4;}
        .first-div-container{width: 980px;margin: 0 auto;}
        .first-div-left>a{float:left;margin:6px 0 0 6px;text-decoration: none;color:#F29871;font-size: 12px;}
        .first-div-right{float:right;}
        .first-div-right>a{line-height: 30px;margin-right: 8px;}
        .first-div-right>select{margin-left: 8px;}

        .forth-div{height:35px;min-width:1000px;background:#D4D4D4;}
        .forth-div>div{width: 980px;margin: 0 auto;}
        .forth-div>div>a{text-decoration: none;line-height: 35px;color:#fff;font-size: 14px;}
        .forth-div>div>span{color:#fff;font-size: 16px;margin: 0 5px;}

        .news_container{height:850px;padding:30px;}
        .news-container-div:nth-child(even){height:130px;margin-top: 30px;background:#EEEFF0;}
        .news-container-div:nth-child(odd){height:130px;margin-top: 30px;background:#CFD5D5;}
        .news-image{float:left;}
        .news-content{float:left;width:500px;margin-left:2px;}
        .news-title{height:35px;padding-left: 15px;}
        .news-title-year{color:red;line-height:40px;font-size:14px;}
        .news-title-text{color:gray;line-height:35px;font-size:14px;margin-left:30px;}
        .new-line-gray{height: 1px;background-color: gray;width:400px;float: left}
        .new-line-red{height: 1px;background-color: red;width:100px;float: left;}
        .news-content-text{height:74px;font-size:14px;word-spacing:8px; letter-spacing: 2px;text-indent:2em;line-height:24px;padding: 10px;}

        .second-li{height: 28px;padding-left: 75px;line-height: 30px; max-width: 130px; overflow: hidden;}
        .second-li a{text-decoration:none;color:#98999A;}

        .maxaul>li>a {max-width: 105px;overflow: hidden;}
    </style>

    <script>
        function turnToHome(){
            location.href = "<?php echo U('Index/index');?>";
        }
        function searchGoods(){
            var url = "<?php echo U('Goods/search');?>";
            var keyword = $('#search_input_text').val();
            location.href = url+"?keyword="+keyword;
        }

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
<body>
    <div class="first-div">
        <div class="first-div-container">
            <div class="first-div-left">
                <img style="margin-top:6px;float:left;" src="http://l.b2b168.com/2010/03/15/07/20100315074652393812.gif" height="18" alt="" />
                <a>CHINA STATE OWNED MILITARY CORPORATION</a>
            </div>
            <div class="first-div-right">
                <a style="text-decoration: none;color:#666;" href="<?php echo U('Index/index');?>">Home</a>
                <a ><?php echo L('当前语言');?></a> |

                <select name="" id="select-lang">
                    <option <?php if(cookie('lang_value') == 'cn'): ?>selected<?php endif; ?> value="cn">中文</option>
                    <option <?php if(cookie('lang_value') == 'en'): ?>selected<?php endif; ?> value="en">EngLish</option>
                    <option <?php if(cookie('lang_value') == 'fr'): ?>selected<?php endif; ?> value="fr">Français</option>
                    <option <?php if(cookie('lang_value') == 'es'): ?>selected<?php endif; ?> value="es">Español</option>
                    <option <?php if(cookie('lang_value') == 'pt'): ?>selected<?php endif; ?> value="pt">Português</option>
                    <option <?php if(cookie('lang_value') == 'ru'): ?>selected<?php endif; ?> value="ru">EngLish</option>
                    <option <?php if(cookie('lang_value') == 'ar'): ?>selected<?php endif; ?> value="ar">العربية</option>
                </select>
            </div>
        </div>
    </div>
    <div style="height:70px;min-width:1000px;background:#FFF;padding-top:10px;">
        <div style="margin:0 auto;width:980px;">
            <img onclick="turnToHome()" src="/xinxing/Public/images/xinxinglogo.png" alt="" width="300"/>
              
            <div class="ddsmoothmenu" style="color:gray;float:right;" id="templatemo_menu">
                <ul class="maxaul">
                    <li><a href="<?php echo U('About/index');?>" <?php if(CONTROLLER_NAME == 'About' ): ?>class="selected"<?php endif; ?> style="padding-left: 10px;"><span></span><?php echo L('关于我们');?></a>
                        <ul>
                            <li><a href="<?php echo U('About/index');?>"><?php echo L('历史沿革');?></a></li>
                            <li><a href="<?php echo U('About/intro');?>"><?php echo L('公司简介');?></a></li>
                            <li><a href="<?php echo U('About/honor');?>"><?php echo L('企业荣誉');?></a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo U('Video/index');?>" <?php if(CONTROLLER_NAME == 'Video' ): ?>class="selected"<?php endif; ?>  ><span class="span-dian">·</span><?php echo L('媒体中心');?></a></li>
                    <li><a href="<?php echo U('Goods/index');?>" <?php if(CONTROLLER_NAME == 'Goods' or CONTROLLER_NAME == 'Range' ): ?>class="selected"<?php endif; ?> ><span class="span-dian">·</span><?php echo L('产品展示');?></a>
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
                    <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cItem): $mod = ($i % 2 );++$i;?><li><a style="max-width: 70px;overflow: hidden;" href="<?php echo U('Goods/index',array('cpid'=>$cItem['category_id']));?>"><span></span><?php echo L($cItem['category_name']);?></a>

                            <?php if($cItem['children']): ?><ul>
                                    <?php if(is_array($cItem["children"])): foreach($cItem["children"] as $key=>$ccItem): ?><li><a href="<?php echo U('Goods/index',array('cid'=>$ccItem['category_id']));?>"><?php echo ($ccItem["category_name"]); ?></a></li><?php endforeach; endif; ?>
                                </ul><?php endif; ?>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--<li><a href="index.html"><span></span><?php echo L('衣帽');?></a></li>-->
                    <!--<li><a href="blog.html"><span></span><?php echo L('鞋靴');?></a>-->
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
                <input style="float: right;margin-top: 18px;margin-right: 20px;height: 25px;border-radius: 15px;border: none;width: 200px;padding-left:20px;" type="text" name="" id="search_input_text" placeholder="<?php echo L('请输入产品关键字');?>" value="<?php echo ($_GET['keyword']); ?>"/>

                <br style="clear: left" />
            </div>


        </div>
    </div>

<center>
    <section id="rt-showcase-surround">
        <div id="rt-showcase" class="slider-container rt-overlay-dark" style="min-width: 1000px;">
            <div class="rt-container slider-container">
                <div class="rt-grid-12 rt-alpha rt-omega" style="line-height: 9px;">
                    
                    <!--[if IE]><link rel="stylesheet" href="/xinxing/Public/css/ie.css"><![endif]-->
                    <!--[if lte IE 9]><script type="text/javascript" src="/xinxing/Public/js/ie.js"></script><![endif]-->

                    <div class="csslider1 autoplay">
                        <input name="cs_anchor1" autocomplete="off" id="cs_slide1_0" type="radio" class="cs_anchor slide" >
                        <input name="cs_anchor1" autocomplete="off" id="cs_slide1_1" type="radio" class="cs_anchor slide" >
                        <input name="cs_anchor1" autocomplete="off" id="cs_slide1_2" type="radio" class="cs_anchor slide" >
                        <input name="cs_anchor1" autocomplete="off" id="cs_play1" type="radio" class="cs_anchor" checked>
                        <input name="cs_anchor1" autocomplete="off" id="cs_pause1" type="radio" class="cs_anchor" >
                        <ul>
                            <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
                                <img src="" style="width: 100%;" height='200'>
                            </div>
                            <?php if(is_array($imageOther)): foreach($imageOther as $key=>$item): ?><li class="num<?php echo ($key); ?> img">
                                    <img src="<?php echo ($item["image_link"]); ?>" alt="Clouds" title="Clouds" height='200'/>
                                </li><?php endforeach; endif; ?>
                        </ul>


                        <div class="cs_arrowprev">
                            <?php if(is_array($imageOther)): foreach($imageOther as $key=>$item): ?><label class="num<?php echo ($key); ?>" for="cs_slide1_<?php echo ($key); ?>"></label><?php endforeach; endif; ?>
                        </div>
                        <div class="cs_arrownext">
                            <?php if(is_array($imageOther)): foreach($imageOther as $key=>$item): ?><label class="num<?php echo ($key); ?>" for="cs_slide1_<?php echo ($key); ?>"></label><?php endforeach; endif; ?>
                        </div>
                        
                        <div class="cs_bullets">
                            <?php if(is_array($imageOther)): foreach($imageOther as $key=>$item): ?><label class="num<?php echo ($key); ?>" for="cs_slide1_<?php echo ($key); ?>"><span class="cs_point"></span></label><?php endforeach; endif; ?>
                        </div>
                        
                    </div>

                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>        <!-- /slider -->
    </center>

   
<div class="forth-div">
    <div>
        <a><?php echo L('首页');?></a>
        <span>·</span>
        <a><?php echo L('关于我们');?></a>
        <span>·</span>
        <a><?php echo L('历史沿革');?></a>
    </div>
</div>

<div id="templatemo_wrapper">

    <div id="templatemo_main_content">
    	<div id="templatemo_sidebar">
            <div class="sidebar_content_box" style="height:100px;">
                <h3 style="text-align:center;margin-top:20px;color:red;font-weight:bold;"><?php echo L('关于我们');?></h3>
                <h5 style="text-align:center;margin-top:10px;color:#35bf35;">ABOUT US</h5>
            </div>
            <div class="sidebar_content_box" style="background:#fff;padding:0;">
                <ul  style="padding:0;">
                    <li class="mouseover-li left-sub-menu-hover"><a class="left-sub-menu-a-hover" href="<?php echo U('About/index');?>" ><?php echo L('历史沿革');?></a></li>
                    <li class="mouseover-li left-sub-menu"><a class="left-sub-menu-a" href="<?php echo U('About/intro');?>" ><?php echo L('公司简介');?></a></li>
                    <li class="mouseover-li left-sub-menu"><a class="left-sub-menu-a" href="<?php echo U('About/honor');?>" ><?php echo L('企业荣誉');?></a></li>
                </ul>
            </div>

        </div>


        <div id="templatemo_content">
     
            <div class="sidebar_content_boxx" style="height:100px;">
                <h3 class="h3-content"><?php echo L('历史沿革');?></h3>
            </div>
            <div class="news_container">
                <?php if(is_array($_list)): foreach($_list as $key=>$item): ?><div class="news-container-div">
                        <img class="news-image" src="<?php echo ($item["img"]); ?>" alt="" width="180" height="130"/>
                        <div class="news-content">
                            <div class="news-title">
                                <span class="news-title-year"><?php echo ($item["news_time"]); ?></span>
                                <span class="news-title-text"><?php echo ($item["news_title"]); ?></span>
                            </div>
                            <div class="new-line-gray"></div>
                            <div class="new-line-red"></div>
                            <div class="news-content-text">
                                <?php echo ($item["news_content"]); ?>
                            </div>
                        </div>
                    </div><?php endforeach; endif; ?>

                <div id="page" style="margin-top: 10px;">
                    <?php echo ($page); ?>
                </div>
            </div>


        </div>
        <div class="clear"></div>
    </div> <!-- END of templatemo_main_content -->

</div> <!-- END of templatemo_wrapper -->
<style>
    .foot-div{height:300px;min-width:1000px;background-image: url(/xinxing/Public/images/tb1.png);background-size:cover;padding-top: 80px;color:#FFF;}
    .foot-div-row{width: 980px;margin: 0 auto;}
    .foot-div-row>div{width: 300px;height: 75px;border:1px solid white;border-radius: 15px;float: left;margin-left: 20px;}
    .foot-div-row-a{text-align: center;cursor: pointer;}
    .foot-div-row-a>p{font-size: 40px;font-weight: bold;margin-top: 20px;color:red;}
    .foot-div-row-a>h5{font-size: 10px;margin-top: 13px;letter-spacing:-1px;color:#fff;}

    .foot-div-row-b{cursor: pointer;}
    .foot-div-row-b>img{float: left;width: 45px;height: 45px;margin-left: 55px;margin-top: 15px;}
    .foot-div-row-b>p{float: left;margin-left: 25px;margin-top: 20px;}
    .foot-div-row-c{cursor: pointer;}
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
        <div class="foot-div-row-a" onclick="location.href='<?php echo U('About/intro');?>'">
            <p >C X X C</p>
            <h5 >CHINA STATE OWNED MILITARY CORPORATION</h5>
        </div>
        <div class="foot-div-row-b" onclick="location.href='<?php echo U('Contact/index');?>'">
            <img  src="/xinxing/Public/images/call43.png" alt="">
            <p >
                T: <?php echo ($contactInfo["phone1"]); ?><br/>
                F: <?php echo ($contactInfo["phone2"]); ?>
            </p>
        </div>
        <div class="foot-div-row-c" onclick="location.href='<?php echo U('Contact/index');?>'">
            <img  src="/xinxing/Public/images/pointer10.png" alt="">
            <p >
                <?php echo ($contactInfo["contact_address"]); ?>
            </p>
        </div>
    </div>
    <div style="clear: both;"></div>

    <div class="foot-div-row2">
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><a href="<?php echo U('About/index');?>" style="color:#fff;"><?php echo L('关于我们');?></a></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('About/index');?>" style="color:#fff;"><?php echo L('历史沿革');?></a></p>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('About/intro');?>" style="color:#fff;"><?php echo L('公司简介');?></a></p>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('About/honor');?>" style="color:#fff;"><?php echo L('企业荣誉');?></a></p>
        </div>
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><a href="<?php echo U('Video/index');?>" style="color:#fff;"><?php echo L('媒体中心');?></a></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('Video/index');?>" style="color:#fff;"><?php echo L('视频广告');?></a></p>
        </div>
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><a href="<?php echo U('Goods/index');?>" style="color:#fff;"><?php echo L('产品展示');?></a></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('Range/index');?>" style="color:#fff;"><?php echo L('业务范围');?></a></p>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('Goods/index');?>" style="color:#fff;"><?php echo L('产品展示');?></a></p>
        </div>
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><a href="<?php echo U('Recruit/index');?>" style="color:#fff;"><?php echo L('人才引进');?></a></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('Recruit/index');?>" style="color:#fff;"><?php echo L('招贤纳士');?></a></p>
        </div>
        <div class="foot-div-row2-div">
            <p class="font-size-16" ><a href="<?php echo U('Contact/index');?>" style="color:#fff;"><?php echo L('联系我们');?></a></p>
            <div class="margin-top7" style="height:20px;">
                <div class="c-line-div" ></div>
                <div class="x-line-div" ></div>
            </div>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('Contact/index');?>" style="color:#fff;"><?php echo L('地理位置');?></a></p>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('Contact/index');?>" style="color:#fff;"><?php echo L('办公电话');?></a></p>
            <p class="font-size-13 margin-bottom5"><a href="<?php echo U('Contact/index');?>" style="color:#fff;"><?php echo L('邮箱');?></a></p>
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