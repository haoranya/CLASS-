<?php
/* Smarty version 3.1.30, created on 2018-04-27 16:06:00
  from "C:\wamp64\www\App\Admin\View\Teacher\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2d9e898e990_46656217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b03d9f9548aaaab6650a1fd3448359e2a46b8f9' => 
    array (
      0 => 'C:\\wamp64\\www\\App\\Admin\\View\\Teacher\\list.html',
      1 => 1524705445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2d9e898e990_46656217 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html class=" js csstransforms3d"><head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="Public/css/base.css">
	<link rel="stylesheet" href="Public/css/page.css">
	<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/modernizr.js"><?php echo '</script'; ?>
>
	<!--[if IE]>
	<?php echo '<script'; ?>
 src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>

<body style="background: #f6f5fa;">

	<!--content S-->
	<div class="super-content">
		<div class="superCtab">
			<div class="ctab-title clearfix"><h3>用户管理</h3><a href="index.php?p=admin&c=teacher&a=doAddBefore" class="sp-column"><i class="ico-export"></i>添加用户</a></div>
			
			<div class="ctab-Main">
				
				<div class="ctab-Mian-cont">
					<div class="Mian-cont-btn Mian-cont-btn2 clearfix">
						<div class="operateBtn">
							<div class="wd-msg"></div>
						</div>
					
					</div>
					
					<div class="Mian-cont-wrap">
						<div class="defaultTab-T">
							<table border="0" cellspacing="0" cellpadding="0" class="defaultTable">
								<tbody><tr><th class="t_1">编号</th><th class="t_1">登录名</th><th class="t_1">姓名</th><th class="t_1">班级</th><th>操作</th></tr>
							</tbody></table>
						</div>
						<table border="0" cellspacing="0" cellpadding="0" class="defaultTable defaultTable2">
							<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
							<tr>
								<td class="t_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
								<td class="t_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['login_name'];?>
</td>
								<td class="t_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
								<td class="t_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['class'];?>
</td>
								<td class="alcenter"><a href="index.php?p=admin&c=teacher&a=deleteType&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="export-a btn">删除</a>&nbsp;&nbsp;
									<a href="index.php?p=admin&c=teacher&a=doUpdateBefore&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="export-a">修改</a>

								</td>

							</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


						</tbody></table>
						<!--pages S-->
						
						<!--pages E-->
					</div>
				</div>
			</div>
		</div>
		<!--main-->
		
	</div>
	<!--content E-->




</body></html><?php }
}
