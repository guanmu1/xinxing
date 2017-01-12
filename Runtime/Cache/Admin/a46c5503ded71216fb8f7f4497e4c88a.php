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


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12  ">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>编辑视频</h5>
                </div>
                <?php if(is_array($rInfo)): $kkey = 0; $__LIST__ = $rInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($kkey % 2 );++$kkey;?><form class="form-horizontal m-t content-form"  method="post" <?php if($item["video_title"] == ''): ?>style="display:none;"<?php endif; ?> >
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第<?php echo ($key+1); ?>组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">名称：</label>
                            <div class="col-sm-9">
                                <input name="form[<?php echo ($key); ?>][title]" class="form-control input-title" type="text" value="<?php echo ($item["video_title"]); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">视频：</label>
                            <?php if($item['choose'] == 1): ?><input type="radio" name="form[<?php echo ($key); ?>][choose]" rel="link" value="1" class="choose" checked="checked">视频链接
                                <input type="radio" name="form[<?php echo ($key); ?>][choose]" rel="up" value="2" class="choose">本地上传
                                <div class="col-sm-9" style="margin-top: 10px;">
                                    <textarea name="form[<?php echo ($key); ?>][link]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" >
                                        <?php echo ($item["video_link"]); ?>
                                    </textarea>
                                </div>
                                <div class="col-sm-9" style="margin-top: 10px;display: none;">
                                    <input type="hidden" name="form[<?php echo ($key); ?>][up]" id="form_<?php echo ($key); ?>">
                                    <input type="file" id="upload_img_<?php echo ($key); ?>" name="res" multiple />
                                    <div id="content_picts_preview_<?php echo ($key); ?>" style="display: none;">
                                        <span><?php echo ($item["video_link"]); ?></span>
                                    </div>
                                </div>
                                <?php else: ?>
                                <input type="radio" name="form[<?php echo ($key); ?>][choose]" rel="link" value="1" class="choose">视频链接
                                <input type="radio" name="form[<?php echo ($key); ?>][choose]" rel="up" value="2" class="choose" checked="checked">本地上传
                                <div class="col-sm-9" style="margin-top: 10px;display: none;">
                                    <textarea name="form[<?php echo ($key); ?>][link]" style="width: 100%;height: 60px;border: 1px solid #e5e6e7;" ></textarea>
                                </div>
                                <div class="col-sm-9" style="margin-top: 10px;">
                                    <input type="hidden" name="form[<?php echo ($key); ?>][up]" id="form_<?php echo ($key); ?>">
                                    <input type="file" id="upload_img_<?php echo ($key); ?>" name="res" multiple />
                                    <div id="content_picts_preview_<?php echo ($key); ?>" style="">
                                        <span><?php echo ($item["video_link"]); ?></span>
                                    </div>
                                </div><?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">发布到：</label>
                            <div class="col-sm-10">
                                <?php if(is_array($item["language"])): foreach($item["language"] as $k=>$lItem): switch($lItem["state"]): case "2": ?><label class="checkbox-inline"><input type="checkbox" checked name="form[<?php echo ($key); ?>][language][]" value="<?php echo ($lItem["value"]); ?>" ><?php echo ($lItem["name"]); ?></label><?php break;?>
                                        <?php case "1": ?><label class="checkbox-inline"><input type="checkbox" name="form[<?php echo ($key); ?>][language][]" value="<?php echo ($lItem["value"]); ?>" ><?php echo ($lItem["name"]); ?></label><?php break;?>
                                        <?php default: ?>
                                        <label class="checkbox-inline" style="display: none;"><input type="checkbox" disabled name="form[<?php echo ($key); ?>][language][]" value="<?php echo ($lItem["value"]); ?>" ><?php echo ($lItem["name"]); ?></label><?php endswitch; endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                    </form><?php endforeach; endif; else: echo "" ;endif; ?>

                <div style="margin-top: 10px;" class="form-group">
                    <div class="col-sm-3 " style="float: right;">
                        <button onclick="editSubmit(<?php echo ($_GET['groupId']); ?>)" class="btn btn-primary ajax-post" type="submit">提交</button>
                        <a class="btn btn-primary" href="<?php echo U('Video/index');?>">取消</a>
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
<!-- head的闭合 -->
<script type="text/javascript">
    //  var ue = UE.getEditor('editor');
    //  ue.ready(function() {
    //      ue.setContent('<?php echo ($info["news_content"]); ?>');
    //  });
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

        //视频相关js
        $(".choose").click(function(){
            var rel = $(this).attr('rel');
            if(rel == 'link'){
                $(this).next().next().show();
                $(this).next().next().next().hide();
            }else{
                $(this).next().next().show();
                $(this).next().hide();
            }
        })

        //上传视频--1
        var str = '<?php echo ($phpsessid); ?>';
        $('#upload_img_0').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择视频',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Video/uploadVideo");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.mp4',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                console.log(str);
                $("#upload_img_0").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                var info = jQuery.parseJSON(data);
                console.log(info);
                $("#form_0").val(info.videoURL);
                $("#content_picts_preview_0").text(info.videoURL + '上传成功');
                $("#content_picts_preview_0").css('display','');
            },
            'onComplete' : function(event, ID, fileObj, response, data) {
                alert(response);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
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
        //2
        $('#upload_img_1').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择视频',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Video/uploadVideo");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.mp4',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_1").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                var info = jQuery.parseJSON(data);
                $("#form_1").val(info.videoURL);
                $("#content_picts_preview_1").text(info.videoURL + '上传成功');
                $("#content_picts_preview_1").css('display','');
            },
            'onComplete' : function(event, ID, fileObj, response, data) {
                alert(response);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
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
        // 3
        $('#upload_img_2').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择视频',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Video/uploadVideo");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.mp4',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_2").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                var info = jQuery.parseJSON(data);
                $("#form_2").val(info.videoURL);
                $("#content_picts_preview_2").text(info.videoURL + '上传成功');
                $("#content_picts_preview_2").css('display','');
            },
            'onComplete' : function(event, ID, fileObj, response, data) {
                alert(response);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
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
        // 4
        $('#upload_img_3').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择视频',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Video/uploadVideo");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.mp4',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_3").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                var info = jQuery.parseJSON(data);
                $("#form_3").val(info.videoURL);
                $("#content_picts_preview_3").text(info.videoURL + '上传成功');
                $("#content_picts_preview_3").css('display','');
            },
            'onComplete' : function(event, ID, fileObj, response, data) {
                alert(response);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
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
        //5
        $('#upload_img_4').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择视频',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Video/uploadVideo");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.mp4',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_4").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                var info = jQuery.parseJSON(data);
                $("#form_4").val(info.videoURL);
                $("#content_picts_preview_4").text(info.videoURL + '上传成功');
                $("#content_picts_preview_4").css('display','');
            },
            'onComplete' : function(event, ID, fileObj, response, data) {
                alert(response);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
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
        //6
        $('#upload_img_5').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择视频',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Video/uploadVideo");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.mp4',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_5").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                var info = jQuery.parseJSON(data);
                $("#form_5").val(info.videoURL);
                $("#content_picts_preview_5").text(info.videoURL + '上传成功');
                $("#content_picts_preview_5").css('display','');
            },
            'onComplete' : function(event, ID, fileObj, response, data) {
                alert(response);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
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
        //7
        $('#upload_img_6').uploadify({
            'formData' : {'str':str},
            'width'         : 150,
            'buttonText'    : '选择视频',
            'swf'           : '/xinxing/Public/js/uploadify/uploadify.swf',
            'uploader'      : '<?php echo U("Video/uploadVideo");?>',
            'auto'          : true,
            'multi'         : true,
            'removeCompleted':true,
            'cancelImg'     : '__ASSET__/images/uploadify-cancel.png',
            'fileTypeExts'  : '*.mp4',
//            'fileSizeLimit' : '2MB',
            'onUploadStart' : function(file) {
                $("#upload_img_6").uploadify("settings", "formData", {'str':str });
            },
            'onUploadSuccess':function(file,data,response){
                var info = jQuery.parseJSON(data);
                $("#form_6").val(info.videoURL);
                $("#content_picts_preview_6").text(info.videoURL + '上传成功');
                $("#content_picts_preview_6").css('display','');
            },
            'onComplete' : function(event, ID, fileObj, response, data) {
                alert(response);
            },
            'overrideEvents': ['onSelectError', 'onUploadError','onDialogClose'],
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
    });

    var curr = 1;
//    function addOne(_this){
//        //如果已经选择了七种语言，则不让继续添加
//        if ($('input:checkbox:checked').length >= 7) {
//            alert('您已选择了7种语言');
//            return;
//        }
//        //已经有7组处于显示状态则不让继续添加
//        if (curr >= 7) {
//            alert('您已经添加了7组输入框');
//            return;
//        }
//        $('.content-form').eq(curr).show();
//        curr++;
//    }
//    function delOne(_this){
//        if (curr <= 1) {
//            alert('只剩一组输入框，禁止删除');
//            return;
//        }
//        $('.content-form').eq(curr-1).hide();
//        curr--;
//    }
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


    function editSubmit(groupId){
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
        postData += "&groupId="+groupId;

        $.post('<?php echo U("Video/edit");?>',postData,function(result){
//            console.log(result);
////            alert(result.info);
            location.href = result.url;
        });
    }

</script>

</body>

</html>