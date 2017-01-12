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
                    <h5>修改联系我们</h5>
                </div>
                <?php if(is_array($rInfo)): $kkey = 0; $__LIST__ = $rInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($kkey % 2 );++$kkey;?><form class="form-horizontal m-t content-form"  method="post" <?php if($item["contact_title"] == ''): ?>style="display:none;"<?php endif; ?> >
                    <div class="ibox-content">
                        <div class="form-group">
                            <label style="float: left;color:red;">第<?php echo ($key+1); ?>组</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">名称：</label>
                            <div class="col-sm-9">
                                <input name="form[<?php echo ($key); ?>][contact_title]" class="form-control input-title" type="text" value="<?php echo ($item["contact_title"]); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址：</label>
                            <div class="col-sm-9">
                                <input name="form[<?php echo ($key); ?>][contact_address]" class="form-control input-title" type="text" value="<?php echo ($item["contact_address"]); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">电话1：</label>
                            <div class="col-sm-9">
                                <input name="form[<?php echo ($key); ?>][phone1]" class="form-control input-title" type="text" value="<?php echo ($item["phone1"]); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">电话2：</label>
                            <div class="col-sm-9">
                                <input name="form[<?php echo ($key); ?>][phone2]" class="form-control input-title" type="text" value="<?php echo ($item["phone2"]); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">邮箱：</label>
                            <div class="col-sm-9">
                                <input name="form[<?php echo ($key); ?>][email]" class="form-control input-title" type="text" value="<?php echo ($item["email"]); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址图片：</label>
                            <div class="col-sm-9">
                                <script id="editor_<?php echo ($key); ?>_1" type="text/plain"  name="form[<?php echo ($key); ?>][img]" style="height:200px;"></script>
                                <!--<img id="course_image_6" src="<?php echo ($item["contact_img"]); ?>" alt="" width="100%" height="200">-->
                                <!--<button onclick="clickInputFile(this)" class="btn" type="button">上传</button>-->
                                <!--<input type="hidden" name="form[<?php echo ($key); ?>][img]" value="<?php echo ($item["contact_img"]); ?>">-->
                                <!--<input type="file" accept="image/*" style="opacity:0;margin-top:-25px;width:0px;" name="upfile" id="course_image_<?php echo ($key); ?>_file" onchange="uploadFile(this)"/>-->

                            </div>
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
                        <a class="btn btn-primary" href="<?php echo U('Contact/index');?>">取消</a>
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

        var ue_0 = UE.getEditor('editor_0_1');
        var ue_1 = UE.getEditor('editor_1_1');
        var ue_2 = UE.getEditor('editor_2_1');
        var ue_3 = UE.getEditor('editor_3_1');
        var ue_4 = UE.getEditor('editor_4_1');
        var ue_5 = UE.getEditor('editor_5_1');
        ue_0.ready(function() {
            ue_0.setContent('<?php echo ($rInfo[0]["contact_img"]); ?>');
        });
        ue_1.ready(function() {
            ue_1.setContent('<?php echo ($rInfo[1]["contact_img"]); ?>');
        });
        ue_2.ready(function() {
            ue_2.setContent('<?php echo ($rInfo[2]["contact_img"]); ?>');
        });
        ue_3.ready(function() {
            ue_3.setContent('<?php echo ($rInfo[3]["contact_img"]); ?>');
        });
        ue_4.ready(function() {
            ue_4.setContent('<?php echo ($rInfo[4]["contact_img"]); ?>');
        });
        ue_5.ready(function() {
            ue_5.setContent('<?php echo ($rInfo[5]["contact_img"]); ?>');
        });
    });

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

        $.post('<?php echo U("Contact/edit");?>',postData,function(result){
//            console.log(result);
//            alert(result.info);
            location.href = window.location.href;
        });
    }
</script>

</body>

</html>