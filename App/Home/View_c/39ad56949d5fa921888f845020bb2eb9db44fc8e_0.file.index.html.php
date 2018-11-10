<?php
/* Smarty version 3.1.30, created on 2018-04-24 09:23:53
  from "C:\Users\hasee\Desktop\CIMS\CIMS\App\Home\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade872987d886_02234095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39ad56949d5fa921888f845020bb2eb9db44fc8e' => 
    array (
      0 => 'C:\\Users\\hasee\\Desktop\\CIMS\\CIMS\\App\\Home\\View\\Index\\index.html',
      1 => 1524533031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade872987d886_02234095 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="Public/css/font-awesome.css"  rel="stylesheet">
    <link href="Public/css/animate.min.css" rel="stylesheet">
    <link href="Public/css/master.css" rel="stylesheet">
    <link href="Public/css/style.min_EDT.css" rel="stylesheet">
    <title>班级管理系统</title>
</head>
<body class="fixed-sidebar full-height-layout gray-bg">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav nav_L" id="side-menu">
                    <li class="nav-header">
                        <div class="profile-element">
                            <div class="index_logo"></div>
                            <div class="logo-element">车店互联总部</div>
                        </div>
                        <div class="logo-element">展开</div>
                    </li>
                    <li>
                        <a href="App\Home\View\Index\StoreManage.html" target="Mainindex">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">我的主页</span>
                        </a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="">
                            <i class="fa fa-sitemap"></i>
                            <span class="nav-label">考勤管理</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../../../index.php?p=home&c=leave&a=doList" target="Mainindex">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">请假管理</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-flag"></i>
                            <span class="nav-label">汇报情况</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                            <i class="fa fa-bars"></i> 
                        </a>
                    </div>
                    <ul class="nav nav_r navbar-top-links navbar-right">
                        <li>
                            <div class="versionBar">学生版</div>
                        </li>
                        <li class="">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                学生姓名<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li>
                                    <a class="J_menuItem" href="#">修改资料</a>
                                </li>
                                <li>
                                    <a class="J_menuItem" href="#">修改密码</a>
                                </li>
                                <li class="dropdown-submenu toLeft">
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa fa-sign-out"></i>退出</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-angle-double-left"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-angle-double-right"></i></button>
                <div class="btn-group roll-nav roll-right">
                    <button data-toggle="dropdown" class="dropdown J_tabClose" aria-expanded="false">
                        操作<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li class="J_tabShowActive">
                            <a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll">
                            <a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther">
                            <a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a class="roll-nav roll-right J_tabExit" href="javascript:;"><i class="fa fa fa-refresh"></i></a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="Mainindex" id="Mainindex" width="100%" height="100%" src="App\Home\View\Index\StoreManage.html" frameborder="0" data-id="" seamless> </iframe>
                
            </div>
            <div class="footer">
                <div class="pull-right">
                    Copyright © 2016-2017 上海复通软件技术有限公司
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>
    <!-- 全局js -->
    <?php echo '<script'; ?>
 src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="Public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="Public/js/plugins/metisMenu/jquery.metisMenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="Public/js/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="Public/js/plugins/layer/layer.min.js"><?php echo '</script'; ?>
>
    <!-- 自定义js -->
    <?php echo '<script'; ?>
 src="Public/js/hplus.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="Public/js/contabs.min.js"><?php echo '</script'; ?>
>
    <!-- 第三方插件 -->
    <?php echo '<script'; ?>
 src="Public/js/plugins/pace/pace.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
