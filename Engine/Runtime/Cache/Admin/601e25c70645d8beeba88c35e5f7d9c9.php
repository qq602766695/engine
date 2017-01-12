<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> 报表列表 </title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/engine/Public/css/Admin/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/engine/Public/css/Admin/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/engine/Public/css/Admin/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/engine/Public/css/Admin/animate.css" rel="stylesheet">
    <link href="/engine/Public/css/Admin/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">

                            <div class="space-25"></div>
                            <h5>分类</h5>
                            <ul class="category-list" style="padding: 0">
                                <li>
                                    <a href="#"> <i class="fa fa-circle text-navy"></i> 工作</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-circle text-danger"></i> 文档</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-circle text-primary"></i> 社交</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-circle text-info"></i> 广告</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-circle text-warning"></i> 客户端</a>
                                </li>
                            </ul>
                            <a class="btn btn-block btn-primary compose-mail" href="#">新建分类</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--右边板块-->
            <!--<div class="col-sm-9 animated fadeInRight">-->
                <!--<div class="mail-box-header">-->

                    <!--<form method="get" action="index.html" class="pull-right mail-search">-->
                        <!--<div class="input-group">-->
                            <!--<input type="text" class="form-control input-sm" name="search" placeholder="搜索邮件标题，正文等">-->
                            <!--<div class="input-group-btn">-->
                                <!--<button type="submit" class="btn btn-sm btn-primary">-->
                                    <!--搜索-->
                                <!--</button>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</form>-->
                    <!--<h2>-->
                    <!--报表列表 (16)-->
                <!--</h2>-->
                    <!--<div class="mail-tools tooltip-demo m-t-md">-->
                        <!--<div class="btn-group pull-right">-->
                            <!--<button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i>-->
                            <!--</button>-->
                            <!--<button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i>-->
                            <!--</button>-->

                        <!--</div>-->
                        <!--<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="刷新邮件列表"><i class="fa fa-refresh"></i> 刷新</button>-->
                        <!--<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="标为已读"><i class="fa fa-eye"></i>-->
                        <!--</button>-->
                        <!--<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="标为重要"><i class="fa fa-exclamation"></i>-->
                        <!--</button>-->
                        <!--<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="标为垃圾邮件"><i class="fa fa-trash-o"></i>-->
                        <!--</button>-->

                    <!--</div>-->
                <!--</div>-->
                <!--<div class="mail-box">-->

                    <!--<table class="table table-hover table-mail">-->
                        <!--<tbody>-->
                            <!--<tr class="unread">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">支付宝</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">支付宝提醒</a>-->
                                <!--</td>-->
                                <!--<td class=""><i class="fa fa-paperclip"></i>-->
                                <!--</td>-->
                                <!--<td class="text-right mail-date">昨天 10:20</td>-->
                            <!--</tr>-->
                            <!--<tr class="unread">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks" checked>-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">Amaze UI</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">Amaze UI Beta2 发布</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">上午10:57</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">WordPress</a> <span class="label label-warning pull-right">验证邮件</span>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">wp-user-frontend-pro v2.1.9</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">上午9:21</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">淘宝网</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">史上最全！淘宝双11红包疯抢攻略！</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">中午12:24</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">淘宝网</a> <span class="label label-danger pull-right">AD</span>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">亲，双11来啦！帮你挑货，还送你4999元红包！仅此一次！</a>-->
                                <!--</td>-->
                                <!--<td class=""><i class="fa fa-paperclip"></i>-->
                                <!--</td>-->
                                <!--<td class="text-right mail-date">上午6:48</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">支付宝</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">支付宝提醒</a>-->
                                <!--</td>-->
                                <!--<td class=""><i class="fa fa-paperclip"></i>-->
                                <!--</td>-->
                                <!--<td class="text-right mail-date">昨天 10:20</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">Amaze UI</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">Amaze UI Beta2 发布</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">上午10:57</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">WordPress</a> <span class="label label-warning pull-right">验证邮件</span>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">wp-user-frontend-pro v2.1.9</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">上午9:21</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">淘宝网</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">史上最全！淘宝双11红包疯抢攻略！</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">中午12:24</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">淘宝网</a> <span class="label label-danger pull-right">AD</span>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">亲，双11来啦！帮你挑货，还送你4999元红包！仅此一次！</a>-->
                                <!--</td>-->
                                <!--<td class=""><i class="fa fa-paperclip"></i>-->
                                <!--</td>-->
                                <!--<td class="text-right mail-date">上午6:48</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">支付宝</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">支付宝提醒</a>-->
                                <!--</td>-->
                                <!--<td class=""><i class="fa fa-paperclip"></i>-->
                                <!--</td>-->
                                <!--<td class="text-right mail-date">昨天 10:20</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">Amaze UI</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">Amaze UI Beta2 发布</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">上午10:57</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">WordPress</a> <span class="label label-warning pull-right">验证邮件</span>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">wp-user-frontend-pro v2.1.9</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">上午9:21</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">淘宝网</a>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">史上最全！淘宝双11红包疯抢攻略！</a>-->
                                <!--</td>-->
                                <!--<td class=""></td>-->
                                <!--<td class="text-right mail-date">中午12:24</td>-->
                            <!--</tr>-->
                            <!--<tr class="read">-->
                                <!--<td class="check-mail">-->
                                    <!--<input type="checkbox" class="i-checks">-->
                                <!--</td>-->
                                <!--<td class="mail-ontact"><a href="mail_detail.html">淘宝网</a> <span class="label label-danger pull-right">AD</span>-->
                                <!--</td>-->
                                <!--<td class="mail-subject"><a href="mail_detail.html">亲，双11来啦！帮你挑货，还送你4999元红包！仅此一次！</a>-->
                                <!--</td>-->
                                <!--<td class=""><i class="fa fa-paperclip"></i>-->
                                <!--</td>-->
                                <!--<td class="text-right mail-date">上午6:48</td>-->
                            <!--</tr>-->
                        <!--</tbody>-->
                    <!--</table>-->


                <!--</div>-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->
        <!--</div>-->
    </div>


    <!-- 全局js -->
    <script src="/engine/Public/js/Admin/jquery.min.js?v=2.1.4"></script>
    <script src="/engine/Public/js/Admin/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/engine/Public/js/Admin/content.js?v=1.0.0"></script>


    <!-- iCheck -->
    <script src="/engine/Public/js/Admin/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    
    

</body>

</html>