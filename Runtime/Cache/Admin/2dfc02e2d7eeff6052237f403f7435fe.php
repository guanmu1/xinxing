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
                                <img alt="image" src="/xinxing/Public/images/dhlogo.png" width="150"/>
                            </span>
                        </div>
                        <div class="logo-element">
                            CRM
                        </div>
                    </li>


                    <li <?php if(CONTROLLER_NAME != 'Contact' AND CONTROLLER_NAME != 'ContactRight' AND CONTROLLER_NAME != 'Suggest'): ?>class="active"<?php endif; ?>>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">内容管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li <?php if(CONTROLLER_NAME == 'News'): ?>class="active"<?php endif; ?>><a href="<?php echo U('News/index');?>">历史沿革</a></li>
                            <li <?php if(CONTROLLER_NAME == 'News'): ?>class="active"<?php endif; ?>><a href="<?php echo U('News/editIntro');?>">公司简介</a></li>
                            <li <?php if(CONTROLLER_NAME == 'Honor'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Honor/index');?>">企业荣誉</a></li>
                            <li <?php if(CONTROLLER_NAME == 'Video'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Video/index');?>">媒体中心</a></li>
                            <li <?php if(CONTROLLER_NAME == 'Recruit'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Recruit/index');?>">人才引进</a></li>
                            <li <?php if(CONTROLLER_NAME == 'Range'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Range/index');?>">业务范围</a></li>
                            <li <?php if(CONTROLLER_NAME == 'Goods'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Goods/index');?>">产品展示</a></li>
                            <li <?php if(CONTROLLER_NAME == 'ImageHome'): ?>class="active"<?php endif; ?>><a href="<?php echo U('ImageHome/index');?>">首页轮播</a></li>
                            <li <?php if(CONTROLLER_NAME == 'ImageOther'): ?>class="active"<?php endif; ?>><a href="<?php echo U('ImageOther/index');?>">其他页轮播</a></li>
                        </ul>

                    </li>

                    <li <?php if(CONTROLLER_NAME == 'Contact' or CONTROLLER_NAME == 'ContactRight'): ?>class="active"<?php endif; ?>>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">联系我们</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="<?php echo U('Contact/index');?>">联系信息</a></li>
                            <li ><a href="<?php echo U('ContactRight/edit');?>">修改右侧信息</a></li>

                        </ul>

                    </li>
                    <li <?php if(CONTROLLER_NAME == 'Suggest'): ?>class="active"<?php endif; ?>>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">投诉建议</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="<?php echo U('Suggest/index');?>">投诉建议信息</a></li>
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
</style>
 <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12  ">
            <div class="ibox float-e-margins">
                <div class="ibox-form[0][title]">
                    <h5>添加历史沿革</h5>
                </div>
                <form class="form-horizontal m-t content-form"  method="post">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第1组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题：</label>
                            <div class="col-sm-9">
                                <input name="form[0][title]" class="form-control input-title" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">时间：</label>
                            <div class="col-sm-9">
                                <input name="form[0][time]" class="form-control input-title" type="text" placeholder="请输入年份，例如'1998年' ">
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom:13px">
                            <label class="col-sm-2 control-label">图片：</label>
                            <div class="col-sm-9">

                                <img id="course_image_1" src="" alt="" width='180' height="130">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[0][img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="course_image_1_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容：</label>
                            <div class="col-sm-9">
							    <!--<script id="editor_0" type="text/plain"  name="form[0][content]" style="height:600px;"></script>-->
                                <textarea name="form[0][content]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" placeholder="请用简短的语言描述"></textarea>
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
                            <label class="col-sm-2 control-label">标题：</label>
                            <div class="col-sm-9">
                                <input name="form[1][title]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">时间：</label>
                            <div class="col-sm-9">
                                <input name="form[1][time]" class="form-control input-title" type="text" placeholder="请输入年份，例如'1998年' ">
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom:13px">
                            <label class="col-sm-2 control-label">图片：</label>
                            <div class="col-sm-9">

                                <img id="course_image_2" src="" alt="" width='180' height="130">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[1][img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="course_image_2_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容：</label>
                            <div class="col-sm-9">
                                <!--<script id="editor_1" type="text/plain"  name="form[1][content]" style="height:600px;"></script>-->
                                <textarea name="form[1][content]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" placeholder="请用简短的语言描述"></textarea>
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
                            <label class="col-sm-2 control-label">标题：</label>
                            <div class="col-sm-9">
                                <input name="form[2][title]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">时间：</label>
                            <div class="col-sm-9">
                                <input name="form[2][time]" class="form-control input-title" type="text" placeholder="请输入年份，例如'1998年' ">
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom:13px;">
                            <label class="col-sm-2 control-label">图片：</label>
                            <div class="col-sm-9">

                                <img id="course_image_3" src="" alt="" width='180' height="130">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[2][img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="course_image_3_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容：</label>
                            <div class="col-sm-9">
                                <!--<script id="editor_2" type="text/plain"  name="form[2][content]" style="height:600px;"></script>-->
                                <textarea name="form[2][content]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" placeholder="请用简短的语言描述"></textarea>
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
                            <label class="col-sm-2 control-label">标题：</label>
                            <div class="col-sm-9">
                                <input name="form[3][title]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">时间：</label>
                            <div class="col-sm-9">
                                <input name="form[3][time]" class="form-control input-title" type="text" placeholder="请输入年份，例如'1998年' ">
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom:13px">
                            <label class="col-sm-2 control-label">图片：</label>
                            <div class="col-sm-9">

                                <img id="course_image_4" src="" alt="" width='180' height="130">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[3][img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="course_image_4_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容：</label>
                            <div class="col-sm-9">
                                <!--<script id="editor_3" type="text/plain"  name="form[3][content]" style="height:600px;"></script>-->
                                <textarea name="form[3][content]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" placeholder="请用简短的语言描述"></textarea>
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
                            <label class="col-sm-2 control-label">标题：</label>
                            <div class="col-sm-9">
                                <input name="form[4][title]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">时间：</label>
                            <div class="col-sm-9">
                                <input name="form[4][time]" class="form-control input-title" type="text" placeholder="请输入年份，例如'1998年' ">
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom:13px">
                            <label class="col-sm-2 control-label">图片：</label>
                            <div class="col-sm-9">

                                <img id="course_image_5" src="" alt="" width='180' height="130">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[4][img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="course_image_5_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容：</label>
                            <div class="col-sm-9">
                                <!--<script id="editor_4" type="text/plain"  name="form[4][content]" style="height:600px;"></script>-->
                                <textarea name="form[4][content]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" placeholder="请用简短的语言描述"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>

                            <div class="col-sm-10">
                                <label class="checkbox-inline"><input type="checkbox" name="form[4][language][]" value="cn" >中文</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[4][language][]" value="en" >英语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[4][language][]" value="fr" >法语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[4][language][]" value="es" >西班牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[4][language][]" value="pt" >葡萄牙语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[4][language][]" value="ru" >俄语</label>
                                <label class="checkbox-inline"><input type="checkbox" name="form[4][language][]" value="ar" >阿拉伯语</label>
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
                            <label class="col-sm-2 control-label">标题：</label>
                            <div class="col-sm-9">
                                <input name="form[5][title]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">时间：</label>
                            <div class="col-sm-9">
                                <input name="form[5][time]" class="form-control input-title" type="text" placeholder="请输入年份，例如'1998年' ">
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom:13px">
                            <label class="col-sm-2 control-label">图片：</label>
                            <div class="col-sm-9">

                                <img id="course_image_6" src="" alt="" width='180' height="130">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[5][img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="course_image_6_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容：</label>
                            <div class="col-sm-9">
                                <!--<script id="editor_5" type="text/plain"  name="form[5][content]" style="height:600px;"></script>-->
                                <textarea name="form[5][content]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" placeholder="请用简短的语言描述"></textarea>
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
                            <label class="col-sm-2 control-label">标题：</label>
                            <div class="col-sm-9">
                                <input name="form[6][title]" class="form-control input-title" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">时间：</label>
                            <div class="col-sm-9">
                                <input name="form[6][time]" class="form-control input-title" type="text" placeholder="请输入年份，例如'1998年' ">
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom:13px">
                            <label class="col-sm-2 control-label">图片：</label>
                            <div class="col-sm-9">

                                <img id="course_image_7" src="" alt="" width='180' height="130">
                                <button onclick="clickInputFile(this)" class="btn" type="button">上传</button>
                                <input type="hidden" name="form[6][img]" value="">
                                <input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="course_image_7_file" onchange="uploadFile(this)"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容：</label>
                            <div class="col-sm-9">
                                <!--<script id="editor_6" type="text/plain"  name="form[6][content]" style="height:600px;"></script>-->
                                <textarea name="form[6][content]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" placeholder="请用简短的语言描述"></textarea>
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
    });



//    var ue_cn = UE.getEditor('editor_0');
//    var ue_en = UE.getEditor('editor_1');
//    var ue_fr = UE.getEditor('editor_2');
//    var ue_es = UE.getEditor('editor_3');
//    var ue_pt = UE.getEditor('editor_4');
//    var ue_ru = UE.getEditor('editor_5');
//    var ue_ar = UE.getEditor('editor_6');

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

        $.post('<?php echo U("News/add");?>',postData,function(result){
            bootbox.alert({
                message: result.info,
                buttons: {
                    ok: {
                        label: " 确 定 ",
                        className: "btn-primary btn-sm",
                    }
                }
            });
            location.href = result.url;
        });
    }

</script>

</body>

</html>