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
        <div class="col-lg-12">
            <div class="ibox float-e-margins">


                <div class="ibox-content">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid">

                        <div class="row">
                            <!--  <div class="col-sm-6">
                                 <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                     <input placeholder="家庭地址/编号" id="search" type="input" class="form-control input-sm" aria-controls="DataTables_Table_0" value="<?php echo ($search); ?>">
                                     <button type="button" class="btn" style="margin: 0;" onclick="search_dataForm(this)">查找</button>
                                 </div>
                             </div> -->
                            <div class="col-sm-6">

                                <a class="btn btn-info" data-toggle="modal" data-target="#family-bind" >批量绑定家庭社区</a>


                                <button id="btn_skip_target" url="<?php echo U('FamilyInfo/add');?>" class="btn btn-info" onclick="skip_target('<?php echo U('FamilyInfo/add');?>','<?php echo ($village_id); ?>','village_id')" >新增家庭</button>

                            </div>
                        </div>

                        <table class="table table-striped table-bordered table-hover dataTables-example dataTable no-footer">
                            <thead>
                            <tr role="row">
                                <!--<th style="background: transparent;" class="row-selected"><input class="check-all" type="checkbox"/></th>-->
                                <th class="sorting_desc">新闻ID</th>
                                <th class="sorting">新闻标题</th>
                                <th class="sorting">发布时间</th>
                                <th class="sorting">发布状态</th>
                                <!--<th class="sorting" onclick="family_sorting(this,'address','desc')">地址</th>-->
                                <!--<th class="sorting" onclick="family_sorting(this,'village_id','desc')">所属小区</th>-->

                                <th style="background: transparent;width:170px;">操作</th>

                            </tr>
                            </thead>

                            <tbody>

                            <?php if(is_array($_list)): foreach($_list as $key=>$list): ?><tr class="gradeX">
                                    <td><input class="ids" type="checkbox" name="id[]" value="<?php echo ($list["family_id"]); ?>" /></td>
                                    <td><?php echo ($list["family_name"]); ?></td>
                                    <td><?php echo ($list["family_code"]); ?></td>
                                    <td><?php echo ($list["person_total"]); ?></td>
                                    <td><?php echo ($list["owner_name"]); ?></td>
                                    <td><?php echo ($list["address"]); ?></td>
                                    <!-- <td><?php echo ($list["build_number"]); ?>号楼<?php echo ($list["unit_number"]); ?>单元<?php echo ($list["room_number"]); ?>号</td> -->
                                    <td><?php echo ($list["village_name"]); ?></td>
                                    <td>

                                        <a href="<?php echo U('FamilyInfo/edit',array('family_id'=>$list['family_id']));?>" class="btn btn-primary" style="margin-bottom:0px;padding: 2px 9px;font-size:12px;">编辑</a>&nbsp;&nbsp;


                                        <a href="<?php echo U('CustomerInfo/index',array('family_id'=>$list['family_id'],'family_name'=>$list['family_name']));?>" class="btn btn-primary" style="margin-bottom:0px;padding: 2px 9px;font-size:12px;">成员</a>&nbsp;&nbsp;


                                        <a href="<?php echo U('FamilyInfo/detail',array('family_id'=>$list['family_id']));?>" class="btn btn-primary" style="margin-bottom:0px;padding: 2px 9px;font-size:12px;">详情</a>&nbsp;&nbsp;

                                    </td>
                                </tr><?php endforeach; endif; ?>

                            </tbody>
                            <tfoot></tfoot>
                        </table>
                        <div class="col-sm-2">每页
                            <select onchange="changePagesNum(this)"  name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control">
                                <option <?php if(($pagenum) == "10"): ?>selected<?php endif; ?> value="10">10</option>
                                <option <?php if(($pagenum) == "25"): ?>selected<?php endif; ?> value="25">25</option>
                                <option <?php if(($pagenum) == "50"): ?>selected<?php endif; ?> value="50">50</option>
                                <option <?php if(($pagenum) == "100"): ?>selected<?php endif; ?> value="100">100</option>
                            </select> 条
                        </div>
                        <div id="page">
                            <?php echo ($page); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- head的闭合 -->
</div>
</div>
</div>
<!-- head的闭合 -->

</body>
</html>