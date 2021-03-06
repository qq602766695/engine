<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Banner </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/engine/Public/css/Admin/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/engine/Public/css/Admin/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/engine/Public/css/Admin/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/engine/Public/css/Admin/animate.css" rel="stylesheet">
    <link href="/engine/Public/css/Admin/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>当前页面的Banner</h5>
                        <div class="ibox-tools">
                            <!--<a class="collapse-link">-->
                                <!--<i class="fa fa-chevron-up"></i>-->
                            <!--</a>-->
                            <!--<a class="dropdown-toggle" data-toggle="dropdown" href="carousel.html#">-->
                                <!--<i class="fa fa-wrench"></i>-->
                            <!--</a>-->
                            <!--<ul class="dropdown-menu dropdown-user">-->
                                <!--<li><a href="carousel.html#">选项1</a>-->
                                <!--</li>-->
                                <!--<li><a href="carousel.html#">选项2</a>-->
                                <!--</li>-->
                            <!--</ul>-->
                            <!--<a class="close-link">-->
                                <!--<i class="fa fa-times"></i>-->
                            <!--</a>-->
                        </div>
                    </div>
                    <div class="ibox-content ">
                        <div class="carousel slide" id="carousel2">
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" data-target="#carousel2" class="active"></li>
                                <li data-slide-to="1" data-target="#carousel2"></li>
                                <li data-slide-to="2" data-target="#carousel2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="image" class="img-responsive" src="/engine/Public/img/p_big1.jpg">
                                    <div class="carousel-caption">
                                        <h1>This is simple caption 1</h1>
                                    </div>
                                </div>
                                <div class="item ">
                                    <img alt="image" class="img-responsive" src="/engine/Public/img/p_big3.jpg">
                                    <div class="carousel-caption">
                                        <h1>This is simple caption 2</h1>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="image" class="img-responsive" src="/engine/Public/img/p_big2.jpg">
                                    <div class="carousel-caption">
                                        <h1>This is simple caption 3</h1>
                                    </div>
                                </div>
                            </div>
                            <a data-slide="prev" href="carousel.html#carousel2" class="left carousel-control">
                                <span class="icon-prev"></span>
                            </a>
                            <a data-slide="next" href="carousel.html#carousel2" class="right carousel-control">
                                <span class="icon-next"></span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>文件上传</h5>
                    </div>
                    <div class="ibox-content">
                        <div id="file-pretty">
                            <div class="form-group">
                                <label class="font-noraml"> 第一张Banner </label>
                                <input type="text"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-noraml"> 第二Banner </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="file" multiple="multiple" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-noraml"> 第三张Banner </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="file" multiple="multiple" class="form-control">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- 全局js -->
    <script src="/engine/Public/js/Admin/jquery.min.js?v=2.1.4"></script>
    <script src="/engine/Public/js/Admin/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="/engine/Public/js/Admin/content.js?v=1.0.0"></script>



    
    

</body>

</html>