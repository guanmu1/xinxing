<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="/xinxing/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/xinxing/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/xinxing/Public/css/animate.css" rel="stylesheet">
    <!-- Data Tables -->
    <link href="/xinxing/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/xinxing/Public/css/style.css" rel="stylesheet">
    <link href="/xinxing/Public/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- 单选框的样式 -->
    <!-- <link href="/xinxing/Public/css/plugins/iCheck/custom.css" rel="stylesheet"> -->
    

    <!-- Mainly scripts -->
    <script src="/xinxing/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/xinxing/Public/js/bootstrap.min.js"></script>
    <script src="/xinxing/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/xinxing/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/xinxing/Public/js/hplus.js"></script>

    <!-- jQuery UI -->
    <script src="/xinxing/Public/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- 就地编辑(Edit in Place)文本信息的 jQuery 插件 
    <script src="/xinxing/Public/js/plugins/jeditable/jquery.jeditable.js"></script> -->

    <!-- Data Tables -->
    <script src="/xinxing/Public/js/plugins/dataTables/jquery.dataTables.min.js"></script>
     <script src="/xinxing/Public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <!--提示插件-->
    <script src="/xinxing/Public/js/plugins/toastr/toastr.min.js"></script>
    <!-- Chosen  -->
    <link href="/xinxing/Public/css/plugins/chosen/chosen.css" rel="stylesheet"> 
    <script src="/xinxing/Public/js/plugins/chosen/chosen.jquery.js"></script>

    <!-- Nestable List 可移动的树型结构-->
    <script src="/xinxing/Public/js/plugins/nestable/jquery.nestable.js"></script>

    <!-- <script src="/xinxing/Public/js/plugins/validate/jquery.validate.min.js"></script> -->
    <script src="/xinxing/Public/js/uploadify/jquery.uploadify.min.js"></script>
    <link href="/xinxing/Public/js/uploadify/uploadify.css" rel="stylesheet">

    <!-- <script src="/xinxing/Public/js/plugins/echarts/echarts-all.js"></script>
    <script src="/xinxing/Public/js/echarts.count.js"></script> -->
    <script src="/xinxing/Public/js/ueditor.config.js"></script>
    <script src="/xinxing/Public/js/ueditor.all.min.js"></script>
    <script src="/xinxing/Public/js/ajaxfileupload.js"></script>


    <script src="/xinxing/Public/js/bootbox.js"></script>


</head>

<body>
<!-- 加载图标开始 -->
<div id="loading_gif" style="display:none;">
    <div style="background:#fff;opacity:0.5;position:fixed;top:0;left:0;bottom:0;right:0;z-index:9990;"></div>
    <div style="width:100%;height:100%;position:fixed;top:200px;left:50%;bottom:0;right:0;z-index:9999;">
        <img src="/xinxing/Public/images/loading.gif"  width="340" alt="" style="margin-left:-170px;">
    </div>
</div>
<!-- 加载图标结束 -->
<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation" style="min-height:1400px; position: fixed;top: 0;left: 0;bottom: 0;">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">

                    <li class="nav-header" style="margin-bottom: 15px;">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" src="/xinxing/Public/images/xinxinglogo1.png" width="150"/>
                            </span>
                        </div>
                        <div class="logo-element">
                            CXXC
                        </div>
                    </li>


                    <li <?php if(CONTROLLER_NAME == 'Range' or CONTROLLER_NAME == 'Goods' or CONTROLLER_NAME == 'Category'): ?>class="active"<?php endif; ?>>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">产品管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <?php if(CONTROLLER_NAME == 'Range'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Range/index');?>">业务范围</a></li>
                            <li <?php if(CONTROLLER_NAME == 'Goods'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Goods/index');?>">产品展示</a></li>
                            <li <?php if(CONTROLLER_NAME == 'Category'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Category/index');?>">产品分类</a></li>
                        </ul>
                    </li>

                    <li <?php if(CONTROLLER_NAME == 'ImageHome' or CONTROLLER_NAME == 'ImageOther' or CONTROLLER_NAME == 'Coop'): ?>class="active"<?php endif; ?>>
                    <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">首页管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if(CONTROLLER_NAME == 'ImageHome'): ?>class="active"<?php endif; ?>><a href="<?php echo U('ImageHome/index');?>">首页轮播</a></li>
                        <li <?php if(CONTROLLER_NAME == 'ImageOther'): ?>class="active"<?php endif; ?>><a href="<?php echo U('ImageOther/index');?>">其他页轮播</a></li>
                        <li <?php if(CONTROLLER_NAME == 'Coop'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Coop/index');?>">合作伙伴管理</a></li>
                    </ul>
                    </li>

                    <li <?php if(CONTROLLER_NAME == 'News' or CONTROLLER_NAME == 'Honor'): ?>class="active"<?php endif; ?>>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">关于我们</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <?php if(CONTROLLER_NAME == 'News'): ?>class="active"<?php endif; ?>><a href="<?php echo U('News/index');?>">历史沿革</a></li>
                            <li <?php if(CONTROLLER_NAME == 'News'): ?>class="active"<?php endif; ?>><a href="<?php echo U('News/editIntro');?>">公司简介</a></li>
                            <li <?php if(CONTROLLER_NAME == 'Honor'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Honor/index');?>">企业荣誉</a></li>
                        </ul>
                    </li>

                    <li <?php if(CONTROLLER_NAME == 'Video'): ?>class="active"<?php endif; ?>>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">媒体中心</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <?php if(CONTROLLER_NAME == 'Video'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Video/index');?>">视频广告</a></li>
                        </ul>
                    </li>

                    <li <?php if(CONTROLLER_NAME == 'Recruit'): ?>class="active"<?php endif; ?>>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">人才引进</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <?php if(CONTROLLER_NAME == 'Recruit'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Recruit/index');?>">招贤纳士</a></li>
                        </ul>
                    </li>

                    <li <?php if(CONTROLLER_NAME == 'Contact' or CONTROLLER_NAME == 'ContactRight'): ?>class="active"<?php endif; ?>>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">联系我们</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="<?php echo U('Contact/edit');?>">联系信息</a></li>
                        </ul>

                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " ><i class="fa fa-bars"></i> </a>
                        <!-- <form role="search" class="navbar-form-custom" method="post" action="search_results.html"> -->
                            <!-- <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div> -->
                        <!-- </form> -->
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message"><i class="fa fa-home"></i>&nbsp;&nbsp;欢迎使用管理后台</span>
                        </li>


                        <li>
                            <a data-toggle="dropdown" class="dropdown-toggle text-center" >
                                <strong class="font-bold" ><i class="fa fa-user"></i><?php echo ($loginName); ?><b class="caret"></b></strong>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?php echo U('User/updatePassword');?>"><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;&nbsp;修改密码</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo U('Admin/Index/logout');?>"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;&nbsp;安全退出</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </nav>
            </div>


<style>
    .checkbox-inline input{
        margin-top: 2px;
    }
    .upbtn{
        position: absolute;
        left: 65px;
        top: 60px;
    }
    .img_zhezhao{
        position: absolute;top:0;width: 150px;text-align: right;padding-top: 2px;padding-right: 2px;display: none;
    }
    .img_zhezhao img{cursor: pointer;border-radius: 50%;opacity: 0.3;}
    .img_zhezhao img:hover{opacity: 1;}
</style>

<!--引入CSS-->
<link rel="stylesheet" type="text/css" href="/xinxing/Public/css/webuploader.css">

<!--引入JS-->
<script type="text/javascript" src="/xinxing/Public/js/webuploader.min.js"></script>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12  ">
            <div class="ibox float-e-margins">
                <div class="ibox-form[0][title]">
                    <h5>添加商品</h5>
                </div>
                <form class="form-horizontal m-t content-form"  method="post">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第1组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品名称：</label>
                            <div class="col-sm-4">
                                <input name="form[0][goods_name]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品型号：</label>
                            <div class="col-sm-3">
                                <input name="form[0][goods_code]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品重量：</label>
                            <div class="col-sm-4">
                                <input name="form[0][goods_weight]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品规格：</label>
                            <div class="col-sm-3">
                                <input name="form[0][goods_size]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品分类：</label>
                            <div class="col-sm-9">
                                <select name="form[0][category_pid]" class="form-control cat" style="width: 48%;display: inline;">
                                    <option value="0">一级分类</option>
                                    <?php if(is_array($category)): foreach($category as $key=>$_category): ?><option value="<?php echo ($_category["category_id"]); ?>"><?php echo ($_category["category_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                <select name="form[0][category_id]" class="form-control" style="width: 50%;display: inline;">
                                    <option value="0">二级分类</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 13px;">
                            <label class="col-sm-2 control-label">上传首页展示图片:<br/>(仅用于首页展示)</label>
                            <div class="col-sm-9">

                                <img id="goods_image_0" src="" alt="" width="300" height="190">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[0][home_img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="goods_image_0_file" onchange="uploadFile(this)"/>

                            </div>
                            建议上传图片尺寸300*190
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上传商品图片：</label>
                            <div class="col-sm-10" style="margin-bottom: 3px;">
                                <input type="file" id="upload_img_0" name="res" multiple />
                                <div id="content_picts_preview_0">

                                </div>
                                请上传方形图片
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品介绍：</label>
                            <div class="col-sm-9">
                                <script id="editor_0_0" type="text/plain"  name="form[0][goods_intro]" style="height:200px;"></script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品详情：</label>
                            <div class="col-sm-9">
                                <script id="editor_0_1" type="text/plain"  name="form[0][goods_description]" style="height:200px;"></script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="cn" >中文</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="en" >英语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="fr" >法语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="es" >西班牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="pt" >葡萄牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="ru" >俄语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="ar" >阿拉伯语</label>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal m-t content-form"  method="post" style="display: none;">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第2组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品名称：</label>
                            <div class="col-sm-4">
                                <input name="form[1][goods_name]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品型号：</label>
                            <div class="col-sm-3">
                                <input name="form[1][goods_code]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品重量：</label>
                            <div class="col-sm-4">
                                <input name="form[1][goods_weight]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品规格：</label>
                            <div class="col-sm-3">
                                <input name="form[1][goods_size]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品分类：</label>
                            <div class="col-sm-9">
                                <select name="form[1][category_pid]" class="form-control cat" style="width: 48%;display: inline;">
                                    <option value="0">一级分类</option>
                                    <?php if(is_array($category)): foreach($category as $key=>$_category): ?><option value="<?php echo ($_category["category_id"]); ?>"><?php echo ($_category["category_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                <select name="form[1][category_id]" class="form-control" style="width: 50%;display: inline;">
                                    <option value="0">二级分类</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group"  style="margin-bottom: 13px;">
                            <label class="col-sm-2 control-label">上传首页展示图片:<br/>(仅用于首页展示)</label>
                            <div class="col-sm-9">

                                <img id="goods_image_1" src="" alt="" width="300" height="190">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[1][home_img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="goods_image_1_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上传商品图片：</label>
                            <div class="col-sm-10" style="margin-bottom: 3px;">
                                <input type="file" id="upload_img_1" name="res" multiple />
                                <div id="content_picts_preview_1">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品介绍：</label>
                            <div class="col-sm-9">
                                <script id="editor_1_0" type="text/plain"  name="form[1][goods_intro]" style="height:200px;"></script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品详情：</label>
                            <div class="col-sm-9">
                                <script id="editor_1_1" type="text/plain"  name="form[1][goods_description]" style="height:200px;"></script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="form[1][language][]" value="cn" >中文</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[1][language][]" value="en" >英语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[1][language][]" value="fr" >法语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[1][language][]" value="es" >西班牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[1][language][]" value="pt" >葡萄牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[1][language][]" value="ru" >俄语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[1][language][]" value="ar" >阿拉伯语</label>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal m-t content-form"  method="post" style="display: none;">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第3组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品名称：</label>
                            <div class="col-sm-4">
                                <input name="form[2][goods_name]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品型号：</label>
                            <div class="col-sm-3">
                                <input name="form[2][goods_code]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品重量：</label>
                            <div class="col-sm-4">
                                <input name="form[2][goods_weight]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品规格：</label>
                            <div class="col-sm-3">
                                <input name="form[2][goods_size]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品分类：</label>
                            <div class="col-sm-9">
                                <select name="form[2][category_pid]" class="form-control cat" style="width: 48%;display: inline;">
                                    <option value="0">一级分类</option>
                                    <?php if(is_array($category)): foreach($category as $key=>$_category): ?><option value="<?php echo ($_category["category_id"]); ?>"><?php echo ($_category["category_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                <select name="form[2][category_id]" class="form-control" style="width: 50%;display: inline;">
                                    <option value="0">二级分类</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group"  style="margin-bottom: 13px;">
                            <label class="col-sm-2 control-label">上传首页展示图片:<br/>(仅用于首页展示)</label>
                            <div class="col-sm-9">

                                <img id="goods_image_2" src="" alt="" width="300" height="190">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[2][home_img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="goods_image_2_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上传商品图片：</label>
                            <div class="col-sm-10" style="margin-bottom: 3px;">
                                <input type="file" id="upload_img_2" name="res" multiple />
                                <div id="content_picts_preview_2">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品介绍：</label>
                            <div class="col-sm-9">
                                <script id="editor_2_0" type="text/plain"  name="form[2][goods_intro]" style="height:200px;"></script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品详情：</label>
                            <div class="col-sm-9">
                                <script id="editor_2_1" type="text/plain"  name="form[2][goods_description]" style="height:200px;"></script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="form[2][language][]" value="cn" >中文</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[2][language][]" value="en" >英语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[2][language][]" value="fr" >法语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[2][language][]" value="es" >西班牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[2][language][]" value="pt" >葡萄牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[2][language][]" value="ru" >俄语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[2][language][]" value="ar" >阿拉伯语</label>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal m-t content-form"  method="post" style="display: none;">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第4组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品名称：</label>
                            <div class="col-sm-4">
                                <input name="form[3][goods_name]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品型号：</label>
                            <div class="col-sm-3">
                                <input name="form[3][goods_code]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品重量：</label>
                            <div class="col-sm-4">
                                <input name="form[3][goods_weight]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品规格：</label>
                            <div class="col-sm-3">
                                <input name="form[3][goods_size]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品分类：</label>
                            <div class="col-sm-9">
                                <select name="form[3][category_pid]" class="form-control cat" style="width: 48%;display: inline;">
                                    <option value="0">一级分类</option>
                                    <?php if(is_array($category)): foreach($category as $key=>$_category): ?><option value="<?php echo ($_category["category_id"]); ?>"><?php echo ($_category["category_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                <select name="form[3][category_id]" class="form-control" style="width: 50%;display: inline;">
                                    <option value="0">二级分类</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group"  style="margin-bottom: 13px;">
                            <label class="col-sm-2 control-label">上传首页展示图片:<br/>(仅用于首页展示)</label>
                            <div class="col-sm-9">

                                <img id="goods_image_3" src="" alt="" width="300" height="190">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[3][home_img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="goods_image_3_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上传商品图片：</label>
                            <div class="col-sm-10" style="margin-bottom: 3px;">
                                <input type="file" id="upload_img_3" name="res" multiple />
                                <div id="content_picts_preview_3">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品介绍：</label>
                            <div class="col-sm-9">
                                <script id="editor_3_0" type="text/plain"  name="form[3][goods_intro]" style="height:200px;"></script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品详情：</label>
                            <div class="col-sm-9">
                                <script id="editor_3_1" type="text/plain"  name="form[3][goods_description]" style="height:200px;"></script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="form[3][language][]" value="cn" >中文</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[3][language][]" value="en" >英语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[3][language][]" value="fr" >法语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[3][language][]" value="es" >西班牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[3][language][]" value="pt" >葡萄牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[3][language][]" value="ru" >俄语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[3][language][]" value="ar" >阿拉伯语</label>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal m-t content-form"  method="post" style="display: none;">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第5组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品名称：</label>
                            <div class="col-sm-4">
                                <input name="form[4][goods_name]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品型号：</label>
                            <div class="col-sm-3">
                                <input name="form[4][goods_code]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品重量：</label>
                            <div class="col-sm-4">
                                <input name="form[4][goods_weight]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品规格：</label>
                            <div class="col-sm-3">
                                <input name="form[4][goods_size]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品分类：</label>
                            <div class="col-sm-9">
                                <select name="form[4][category_pid]" class="form-control cat" style="width: 48%;display: inline;">
                                    <option value="0">一级分类</option>
                                    <?php if(is_array($category)): foreach($category as $key=>$_category): ?><option value="<?php echo ($_category["category_id"]); ?>"><?php echo ($_category["category_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                <select name="form[4][category_id]" class="form-control" style="width: 50%;display: inline;">
                                    <option value="0">二级分类</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group"  style="margin-bottom: 13px;">
                            <label class="col-sm-2 control-label">上传首页展示图片:<br/>(仅用于首页展示)</label>
                            <div class="col-sm-9">

                                <img id="goods_image_4" src="" alt="" width="300" height="190">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[4][home_img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="goods_image_4_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上传商品图片：</label>
                            <div class="col-sm-10" style="margin-bottom: 3px;">
                                <input type="file" id="upload_img_4" name="res" multiple />
                                <div id="content_picts_preview_4">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品介绍：</label>
                            <div class="col-sm-9">
                                <script id="editor_4_0" type="text/plain"  name="form[4][goods_intro]" style="height:200px;"></script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品详情：</label>
                            <div class="col-sm-9">
                                <script id="editor_4_1" type="text/plain"  name="form[4][goods_description]" style="height:200px;"></script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="cn" >中文</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="en" >英语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="fr" >法语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="es" >西班牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="pt" >葡萄牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="ru" >俄语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[0][language][]" value="ar" >阿拉伯语</label>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal m-t content-form"  method="post" style="display: none;">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第6组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品名称：</label>
                            <div class="col-sm-4">
                                <input name="form[5][goods_name]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品型号：</label>
                            <div class="col-sm-3">
                                <input name="form[5][goods_code]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品重量：</label>
                            <div class="col-sm-4">
                                <input name="form[5][goods_weight]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品规格：</label>
                            <div class="col-sm-3">
                                <input name="form[5][goods_size]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品分类：</label>
                            <div class="col-sm-9">
                                <select name="form[5][category_pid]" class="form-control cat" style="width: 48%;display: inline;">
                                    <option value="0">一级分类</option>
                                    <?php if(is_array($category)): foreach($category as $key=>$_category): ?><option value="<?php echo ($_category["category_id"]); ?>"><?php echo ($_category["category_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                <select name="form[5][category_id]" class="form-control" style="width: 50%;display: inline;">
                                    <option value="0">二级分类</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group"  style="margin-bottom: 13px;">
                            <label class="col-sm-2 control-label">上传首页展示图片:<br/>(仅用于首页展示)</label>
                            <div class="col-sm-9">

                                <img id="goods_image_5" src="" alt="" width="300" height="190">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[5][home_img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="goods_image_5_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上传商品图片：</label>
                            <div class="col-sm-10" style="margin-bottom: 3px;">
                                <input type="file" id="upload_img_5" name="res" multiple />
                                <div id="content_picts_preview_5">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品介绍：</label>
                            <div class="col-sm-9">
                                <script id="editor_5_0" type="text/plain"  name="form[5][goods_intro]" style="height:200px;"></script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品详情：</label>
                            <div class="col-sm-9">
                                <script id="editor_5_1" type="text/plain"  name="form[5][goods_description]" style="height:200px;"></script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="form[5][language][]" value="cn" >中文</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[5][language][]" value="en" >英语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[5][language][]" value="fr" >法语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[5][language][]" value="es" >西班牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[5][language][]" value="pt" >葡萄牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[5][language][]" value="ru" >俄语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[5][language][]" value="ar" >阿拉伯语</label>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal m-t content-form"  method="post" style="display: none;">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第7组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品名称：</label>
                            <div class="col-sm-4">
                                <input name="form[6][goods_name]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品型号：</label>
                            <div class="col-sm-3">
                                <input name="form[6][goods_code]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品重量：</label>
                            <div class="col-sm-4">
                                <input name="form[6][goods_weight]" class="form-control input-title" type="text">
                            </div>
                            <label class="col-sm-2 control-label">商品规格：</label>
                            <div class="col-sm-3">
                                <input name="form[6][goods_size]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品分类：</label>
                            <div class="col-sm-9">
                                <select name="form[6][category_pid]" class="form-control cat" style="width: 48%;display: inline;">
                                    <option value="0">一级分类</option>
                                    <?php if(is_array($category)): foreach($category as $key=>$_category): ?><option value="<?php echo ($_category["category_id"]); ?>"><?php echo ($_category["category_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                <select name="form[6][category_id]" class="form-control" style="width: 50%;display: inline;">
                                    <option value="0">二级分类</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"  style="margin-bottom: 13px;">
                            <label class="col-sm-2 control-label">上传首页展示图片:<br/>(仅用于首页展示)</label>
                            <div class="col-sm-9">

                                <img id="goods_image_6" src="" alt="" width="300" height="190">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[6][home_img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="goods_image_6_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">上传商品图片：</label>
                            <div class="col-sm-10" style="margin-bottom: 3px;">
                                <input type="file" id="upload_img_6" name="res" multiple />
                                <div id="content_picts_preview_6">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品介绍：</label>
                            <div class="col-sm-9">
                                <script id="editor_6_0" type="text/plain"  name="form[6][goods_intro]" style="height:200px;"></script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品详情：</label>
                            <div class="col-sm-9">
                                <script id="editor_6_1" type="text/plain"  name="form[6][goods_description]" style="height:200px;"></script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>
                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="form[6][language][]" value="cn" >中文</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[6][language][]" value="en" >英语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[6][language][]" value="fr" >法语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[6][language][]" value="es" >西班牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[6][language][]" value="pt" >葡萄牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[6][language][]" value="ru" >俄语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[6][language][]" value="ar" >阿拉伯语</label>
                            </div>
                        </div>
                    </div>
                </form>

                <div style="margin-top: 10px;" class="form-group">
                    <div class="col-sm-3 " style="float: right;">
                        <button onclick="addSubmit()" class="btn btn-primary ajax-post" type="submit">提交</button>
                        <a class="btn btn-primary" href="<?php echo U('News/index');?>">取消</a>
                    </div>
                </div>
                <a id="add-btn" href="javascript:addOne(this)" class="btn btn-primary btn-outline">向下添加一种语言</a>
                <a id="del-btn" href="javascript:delOne(this)" class="btn btn-primary btn-outline">移除上一种语言</a>

            </div>
        </div>
    </div>

</div>

<!-- head的闭合 -->
</div>
</div>
</div>
<script src="/xinxing/Public/js/jquery.uploadify.min.js"></script>
<link href="/xinxing/Public/js/uploadify/uploadify.css" rel="stylesheet">

<!-- head的闭合 -->
<script type="text/javascript">
    function clickInputFile(_this) {
        $(_this).nextAll('input:file').trigger('click');
    }

    function uploadFile(_this){
        var eleId = $(_this).attr('id');
        var imgObj = $(_this).siblings('img');
        var inputHidden = $(_this).siblings('input:hidden');
        $.ajaxFileUpload(
                {
                    url:'<?php echo U("Image/uploadPic");?>', //你处理上传文件的服务端
                    secureuri:false,
                    fileElementId:eleId,
                    dataType: 'text',
                    success: function (data){
                        console.log(data);
                        imgObj.attr('src',data);
                        inputHidden.val(data);
                    }
                }
        )
    }
</script>

<script type="text/javascript">
    $(function(){
        // 第一组上传图片
        var str = '<?php echo ($phpsessid); ?>';
        $('#upload_img_0').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择图片',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Goods/uploadPic");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.jpg;*.jpeg;*.png;',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                console.log(str);
                $("#upload_img_0").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                console.log(data);
                var flag_id = "show_0";
                addPictsAndThumbnail(data,"#content_picts_preview_0","form[0][ad_content_urls][]", flag_id);
            },
            'onComplete' : function(event, ID, fileObj, response, data) {
                alert(response);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
            // 返回一个错误，选择文件的时候触发
//            'onSelectError':function(file, errorCode, errorMsg){
//                console.log(errorCode);
//                switch(errorCode) {
//                    case -100:
//                        alert("文件 数量 超出系统限制，最多6张！");
//                        break;
//                    case -110:
//                        alert("文件 ["+file.name+"] 大小超出系统限制的大小！");
//                        break;
//                    case -120:
//                        alert("文件 ["+file.name+"] 大小异常！");
//                        break;
//                    case -130:
//                       alert("文件 ["+file.name+"] 类型不正确！");
//                        break;
//                }
//            },
            'onUploadError': function (file, errorCode, errorMsg, errorString) {
                // 手工取消不弹出提示
                if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
                        || errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
                    return;
                }
                var msgText = "上传失败\n";
                switch (errorCode) {
                    case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
                        msgText += "HTTP 错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
                        msgText += "上传文件丢失，请重新上传";
                        break;
                    case SWFUpload.UPLOAD_ERROR.IO_ERROR:
                        msgText += "IO错误";
                        break;
                    case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
                        msgText += "安全性错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
                        msgText += "每次最多上传 " + this.settings.uploadLimit + "个";
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
                        msgText += errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
                        msgText += "找不到指定文件，请重新操作";
                        break;
                    case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
                        msgText += "参数错误";
                        break;
                    default:
                        msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"
                                + errorMsg + "\n" + errorString;
                }
                bootbox.alert({
                    message: msgText,
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
            }
        });
        //第二组上传图片
        $('#upload_img_1').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择图片',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Goods/uploadPic");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.jpg;*.jpeg;*.png;',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_1").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                console.log(data);
                var flag_id = "show_1";
                addPictsAndThumbnail(data,"#content_picts_preview_1","form[1][ad_content_urls][]", flag_id);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
            // 返回一个错误，选择文件的时候触发
            'onSelectError':function(file, errorCode, errorMsg){
                console.log(errorCode);
                switch(errorCode) {
                    case -100:
                        alert("文件 数量 超出系统限制，最多6张！");
                        break;
                    case -110:
                        alert("文件 ["+file.name+"] 大小超出系统限制的大小！");
                        break;
                    case -120:
                        alert("文件 ["+file.name+"] 大小异常！");
                        break;
                    case -130:
                        alert("文件 ["+file.name+"] 类型不正确！");
                        break;
                }
            },
            'onUploadError': function (file, errorCode, errorMsg, errorString) {
                // 手工取消不弹出提示
                if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
                        || errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
                    return;
                }
                var msgText = "上传失败\n";
                switch (errorCode) {
                    case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
                        msgText += "HTTP 错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
                        msgText += "上传文件丢失，请重新上传";
                        break;
                    case SWFUpload.UPLOAD_ERROR.IO_ERROR:
                        msgText += "IO错误";
                        break;
                    case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
                        msgText += "安全性错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
                        msgText += "每次最多上传 " + this.settings.uploadLimit + "个";
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
                        msgText += errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
                        msgText += "找不到指定文件，请重新操作";
                        break;
                    case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
                        msgText += "参数错误";
                        break;
                    default:
                        msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"
                                + errorMsg + "\n" + errorString;
                }
                bootbox.alert({
                    message: msgText,
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
            }
        });
        //第三组
        $('#upload_img_2').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择图片',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Goods/uploadPic");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.jpg;*.jpeg;*.png;',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_2").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                console.log(data);
                var flag_id = "show_2";
                addPictsAndThumbnail(data,"#content_picts_preview_2","form[2][ad_content_urls][]", flag_id);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
            // 返回一个错误，选择文件的时候触发
            'onSelectError':function(file, errorCode, errorMsg){
                console.log(errorCode);
                switch(errorCode) {
                    case -100:
                        alert("文件 数量 超出系统限制，最多6张！");
                        break;
                    case -110:
                        alert("文件 ["+file.name+"] 大小超出系统限制的大小！");
                        break;
                    case -120:
                        alert("文件 ["+file.name+"] 大小异常！");
                        break;
                    case -130:
                        alert("文件 ["+file.name+"] 类型不正确！");
                        break;
                }
            },
            'onUploadError': function (file, errorCode, errorMsg, errorString) {
                // 手工取消不弹出提示
                if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
                        || errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
                    return;
                }
                var msgText = "上传失败\n";
                switch (errorCode) {
                    case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
                        msgText += "HTTP 错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
                        msgText += "上传文件丢失，请重新上传";
                        break;
                    case SWFUpload.UPLOAD_ERROR.IO_ERROR:
                        msgText += "IO错误";
                        break;
                    case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
                        msgText += "安全性错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
                        msgText += "每次最多上传 " + this.settings.uploadLimit + "个";
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
                        msgText += errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
                        msgText += "找不到指定文件，请重新操作";
                        break;
                    case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
                        msgText += "参数错误";
                        break;
                    default:
                        msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"
                                + errorMsg + "\n" + errorString;
                }
                bootbox.alert({
                    message: msgText,
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
            }
        });
        //第四组
        $('#upload_img_3').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择图片',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Goods/uploadPic");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.jpg;*.jpeg;*.png;',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_3").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                console.log(data);
                var flag_id = "show_3";
                addPictsAndThumbnail(data,"#content_picts_preview_3","form[3][ad_content_urls][]", flag_id);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
            // 返回一个错误，选择文件的时候触发
            'onSelectError':function(file, errorCode, errorMsg){
                console.log(errorCode);
                switch(errorCode) {
                    case -100:
                        alert("文件 数量 超出系统限制，最多6张！");
                        break;
                    case -110:
                        alert("文件 ["+file.name+"] 大小超出系统限制的大小！");
                        break;
                    case -120:
                        alert("文件 ["+file.name+"] 大小异常！");
                        break;
                    case -130:
                        alert("文件 ["+file.name+"] 类型不正确！");
                        break;
                }
            },
            'onUploadError': function (file, errorCode, errorMsg, errorString) {
                // 手工取消不弹出提示
                if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
                        || errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
                    return;
                }
                var msgText = "上传失败\n";
                switch (errorCode) {
                    case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
                        msgText += "HTTP 错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
                        msgText += "上传文件丢失，请重新上传";
                        break;
                    case SWFUpload.UPLOAD_ERROR.IO_ERROR:
                        msgText += "IO错误";
                        break;
                    case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
                        msgText += "安全性错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
                        msgText += "每次最多上传 " + this.settings.uploadLimit + "个";
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
                        msgText += errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
                        msgText += "找不到指定文件，请重新操作";
                        break;
                    case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
                        msgText += "参数错误";
                        break;
                    default:
                        msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"
                                + errorMsg + "\n" + errorString;
                }
                bootbox.alert({
                    message: msgText,
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
            }
        });
        //第五组
        $('#upload_img_4').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择图片',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Goods/uploadPic");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.jpg;*.jpeg;*.png;',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_4").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                console.log(data);
                var flag_id = "show_4";
                addPictsAndThumbnail(data,"#content_picts_preview_4","form[4][ad_content_urls][]", flag_id);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
            // 返回一个错误，选择文件的时候触发
            'onSelectError':function(file, errorCode, errorMsg){
                console.log(errorCode);
                switch(errorCode) {
                    case -100:
                        alert("文件 数量 超出系统限制，最多6张！");
                        break;
                    case -110:
                        alert("文件 ["+file.name+"] 大小超出系统限制的大小！");
                        break;
                    case -120:
                        alert("文件 ["+file.name+"] 大小异常！");
                        break;
                    case -130:
                        alert("文件 ["+file.name+"] 类型不正确！");
                        break;
                }
            },
            'onUploadError': function (file, errorCode, errorMsg, errorString) {
                // 手工取消不弹出提示
                if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
                        || errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
                    return;
                }
                var msgText = "上传失败\n";
                switch (errorCode) {
                    case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
                        msgText += "HTTP 错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
                        msgText += "上传文件丢失，请重新上传";
                        break;
                    case SWFUpload.UPLOAD_ERROR.IO_ERROR:
                        msgText += "IO错误";
                        break;
                    case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
                        msgText += "安全性错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
                        msgText += "每次最多上传 " + this.settings.uploadLimit + "个";
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
                        msgText += errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
                        msgText += "找不到指定文件，请重新操作";
                        break;
                    case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
                        msgText += "参数错误";
                        break;
                    default:
                        msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"
                                + errorMsg + "\n" + errorString;
                }
                bootbox.alert({
                    message: msgText,
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
            }
        });
        //第六组
        $('#upload_img_5').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择图片',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Goods/uploadPic");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.jpg;*.jpeg;*.png;',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_5").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                console.log(data);
                var flag_id = "show_5";
                addPictsAndThumbnail(data,"#content_picts_preview_5","form[5][ad_content_urls][]", flag_id);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
            // 返回一个错误，选择文件的时候触发
            'onSelectError':function(file, errorCode, errorMsg){
                console.log(errorCode);
                switch(errorCode) {
                    case -100:
                        alert("文件 数量 超出系统限制，最多6张！");
                        break;
                    case -110:
                        alert("文件 ["+file.name+"] 大小超出系统限制的大小！");
                        break;
                    case -120:
                        alert("文件 ["+file.name+"] 大小异常！");
                        break;
                    case -130:
                        alert("文件 ["+file.name+"] 类型不正确！");
                        break;
                }
            },
            'onUploadError': function (file, errorCode, errorMsg, errorString) {
                // 手工取消不弹出提示
                if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
                        || errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
                    return;
                }
                var msgText = "上传失败\n";
                switch (errorCode) {
                    case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
                        msgText += "HTTP 错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
                        msgText += "上传文件丢失，请重新上传";
                        break;
                    case SWFUpload.UPLOAD_ERROR.IO_ERROR:
                        msgText += "IO错误";
                        break;
                    case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
                        msgText += "安全性错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
                        msgText += "每次最多上传 " + this.settings.uploadLimit + "个";
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
                        msgText += errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
                        msgText += "找不到指定文件，请重新操作";
                        break;
                    case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
                        msgText += "参数错误";
                        break;
                    default:
                        msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"
                                + errorMsg + "\n" + errorString;
                }
                bootbox.alert({
                    message: msgText,
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
            }
        });
        //第七组
        $('#upload_img_6').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择图片',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Goods/uploadPic");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.jpg;*.jpeg;*.png;',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_6").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                console.log(data);
                var flag_id = "show_6";
                addPictsAndThumbnail(data,"#content_picts_preview_6","form[6][ad_content_urls][]", flag_id);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
            // 返回一个错误，选择文件的时候触发
            'onSelectError':function(file, errorCode, errorMsg){
                console.log(errorCode);
                switch(errorCode) {
                    case -100:
                        alert("文件 数量 超出系统限制，最多6张！");
                        break;
                    case -110:
                        alert("文件 ["+file.name+"] 大小超出系统限制的大小！");
                        break;
                    case -120:
                        alert("文件 ["+file.name+"] 大小异常！");
                        break;
                    case -130:
                        alert("文件 ["+file.name+"] 类型不正确！");
                        break;
                }
            },
            'onUploadError': function (file, errorCode, errorMsg, errorString) {
                // 手工取消不弹出提示
                if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
                        || errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
                    return;
                }
                var msgText = "上传失败\n";
                switch (errorCode) {
                    case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
                        msgText += "HTTP 错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
                        msgText += "上传文件丢失，请重新上传";
                        break;
                    case SWFUpload.UPLOAD_ERROR.IO_ERROR:
                        msgText += "IO错误";
                        break;
                    case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
                        msgText += "安全性错误\n" + errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
                        msgText += "每次最多上传 " + this.settings.uploadLimit + "个";
                        break;
                    case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
                        msgText += errorMsg;
                        break;
                    case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
                        msgText += "找不到指定文件，请重新操作";
                        break;
                    case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
                        msgText += "参数错误";
                        break;
                    default:
                        msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"
                                + errorMsg + "\n" + errorString;
                }
                bootbox.alert({
                    message: msgText,
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
            }
        });
    })

    // 增加上传的图片和预览用的缩略图
    function addPictsAndThumbnail(data,previewContainer,inputName,flag_id){
        data = $.parseJSON(data);
        console.log(data);
//        var strFile = '<input type="hidden" name='+inputName+' class="'+pictsID+'" value="'+data.pictURL+'" />';
        var str = '<div style="position: relative;width:200px;float: left;margin-left: 30px;">' +
                '<div class="'+flag_id+'" style="text-align:right;width:100%;position:absolute;top:0;float: right;height: 30px;color:red;" onclick="del_0(this)"><img src="/xinxing/Public/images/close.png" alt="" width="30"></div> ' +
                '<img src="'+data.pictURL+'" alt="" width="200" height="200" style="margin-right: 10px;margin-bottom: 10px;"> ' +
                '<input type="hidden" name='+inputName+' value="'+data.pictURL+'" /></div>';
//        $(previewContainer).before(strFile).append(str);
        $(previewContainer).append(str);
    }
    function del_0(_this){
        $(_this).parent().remove();
    }


</script>

<!-- head的闭合 -->
<script type="text/javascript">
    $(function () {
        /**
         * 复选框添加点击事件，同时对七组的语言复选框生效
         * 可以防止同一种语言重复的问题
         */
        $('input:checkbox').click(function(){
            var thisCheck = this.checked;
            var thisVal = $(this).val();
            if (thisCheck) {
                $('input:checkbox[value="'+thisVal+'"]').attr('disabled','disabled').parent().hide();//先将所有的禁用并隐藏
                $(this).removeAttr('disabled').parent().show();//再将当前这个复选框解除禁用并显示
            } else {
                $('input:checkbox[value="'+thisVal+'"]').removeAttr('disabled').parent().show();//显示所有的语言复选框
            }
        });

        //产品分类变化
        $(".cat").change(function(){
            var obj = $(this);
            var val = $(this).val();
            $.ajax({
                url:"<?php echo U('Goods/getCategory');?>",
                dataType:'json',
                type:'post',
                data:{pid:val},
                success:function(data){
                    if(data.status == 1){
                        var str = '<option value="0">二级分类</option>';
                        $.each(data.msg, function(i,e){
                            str += '<option value="'+e.category_id+'">'+e.category_name+'</option>';
                        })
                        $(obj).next().empty().append(str);
                    }else{
                        var str = '<option value="0">二级分类</option>';
                        $(obj).next().empty().append(str);
//                        $(obj).next().attr('disabled','disabled');
//                        $(obj).next().css('background-color', '#dddddd');
                        bootbox.alert({
                            message: data.msg,
                            buttons: {
                                ok: {
                                    label: " 确 定 ",
                                    className: "btn-primary btn-sm",
                                }
                            }
                        });
                    }
                }
            });
        })
    });

    var ue_cn_0 = UE.getEditor('editor_0_0');
    var ue_cn_1 = UE.getEditor('editor_0_1');
    var ue_en_0 = UE.getEditor('editor_1_0');
    var ue_en_1 = UE.getEditor('editor_1_1');
    var ue_fr_0 = UE.getEditor('editor_2_0');
    var ue_fr_1 = UE.getEditor('editor_2_1');
    var ue_es_0 = UE.getEditor('editor_3_0');
    var ue_es_1 = UE.getEditor('editor_3_1');
    var ue_pt_0 = UE.getEditor('editor_4_0');
    var ue_pt_1 = UE.getEditor('editor_4_1');
    var ue_ru_0 = UE.getEditor('editor_5_0');
    var ue_ru_1 = UE.getEditor('editor_5_1');
    var ue_ar_0 = UE.getEditor('editor_6_0');
    var ue_ar_1 = UE.getEditor('editor_6_1');

    var curr = 1;
    function addOne(_this){
        //如果已经选择了七种语言，则不让继续添加
        if ($('input:checkbox:checked').length >= 7) {
            bootbox.alert({
                message: '您已选择了7种语言',
                buttons: {
                    ok: {
                        label: " 确 定 ",
                        className: "btn-primary btn-sm",
                    }
                }
            });
            return;
        }
        //已经有7组处于显示状态则不让继续添加
        if (curr >= 7) {
            bootbox.alert({
                message: '您已经添加了7组输入框',
                buttons: {
                    ok: {
                        label: " 确 定 ",
                        className: "btn-primary btn-sm",
                    }
                }
            });
            return;
        }
        $('.content-form').eq(curr).show();
        curr++;
    }

    function delOne(_this){
        if (curr <= 1) {
            bootbox.alert({
                message: '只剩一组输入框，禁止删除',
                buttons: {
                    ok: {
                        label: " 确 定 ",
                        className: "btn-primary btn-sm",
                    }
                }
            });
            return;
        }
        $('.content-form').eq(curr-1).hide();
        $('.content-form').eq(curr-1).find('input:checkbox').each(function(i,e){//如果当前删除的表单中含有复选框处于选中状态，则移除选中状态
            var eCheck = e.checked;
            var eValue = e.value;
            if (eCheck) {
                $('input:checkbox[value="'+eValue+'"]').removeAttr('disabled').parent().show();
            }
        });
        curr--;
    }

    function addSubmit(){
        var postData = '';
        var flag = false;//是否继续执行该方法的标识，如果下列循环中有一种不符合条件，则不提交后台
        $('.content-form:visible').each(function(i,e){//只获取处于显示状态的form表单
            var langVal = $(e).find("input:checkbox:checked").length;//当前这个form表单选择发布语言的数量
            var titleVal = $(e).find(".input-title").val();//当前这个form表单的标题值
            if (!titleVal) {
                bootbox.alert({
                    message: '第'+(i+1)+'组标题为空，请填写后再提交',
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
                flag = true;
                return false;
            }
            if (langVal == 0) {
                bootbox.alert({
                    message: '第'+(i+1)+'组未选择语言，请选择后再提交',
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
                flag = true;
                return false;
            }
            postData += $(e).serialize() + "&";//将序列化后的值拼到一起
        });

        if (flag) {
            return;
        }

        $.post('<?php echo U("Goods/add");?>',postData,function(result){

            if (!result.status) {
                bootbox.alert({
                    message: result.info,
                    buttons: {
                        ok: {
                            label: " 确 定 ",
                            className: "btn-primary btn-sm",
                        }
                    }
                });
            } else {
                location.href = result.url;
            }
//            console.log(result);
//            alert(result.info);
            location.href = result.url;
        });
    }

</script>

</body>

</html>