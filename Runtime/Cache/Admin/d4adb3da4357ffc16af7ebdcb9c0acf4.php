<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>素材火www.sucaihuo.com - 登录</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/xinxing28/xinxing/Public/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/xinxing28/xinxing/Public/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">

    <link href="/xinxing28/xinxing/Public/css/animate.css" rel="stylesheet">
    <link href="/xinxing28/xinxing/Public/css/style.css?v=2.2.0" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" style="font-size: 150px;text-align: center;">新兴</h1>

            </div>
            <h3>欢迎使用新兴进出口公司网站后台</h3>

            <form class="m-t" role="form" method="post" action="<?php echo U('Index/doLogin');?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" required name="name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/xinxing28/xinxing/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/xinxing28/xinxing/Public/js/bootstrap.min.js?v=3.4.0"></script>


</body>

</html>