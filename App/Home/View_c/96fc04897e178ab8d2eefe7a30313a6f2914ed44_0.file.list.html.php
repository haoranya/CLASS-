<?php
/* Smarty version 3.1.30, created on 2018-11-07 09:12:44
  from "C:\Users\Administrator\Desktop\try\cims1\App\Home\View\Leave\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be23c0cf2a189_85759746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96fc04897e178ab8d2eefe7a30313a6f2914ed44' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims1\\App\\Home\\View\\Leave\\list.html',
      1 => 1524754895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be23c0cf2a189_85759746 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\Users\\Administrator\\Desktop\\try\\cims1\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html class=" js csstransforms3d"><head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	<style>

		.disabled{
    color:gray;
    cursor:pointer;
    pointer-events: none;
}

	</style>
</head>

<body style="background: #f6f5fa;">

	<!--content S-->
	<div class="super-content">
		<div class="superCtab">
			<div class="ctab-title clearfix"><h3>审批结果</h3></div>
			
			<div class="ctab-Main">
			
				
				<div class="ctab-Mian-cont">
					<div class="Mian-cont-btn clearfix">
						<div class="searchBar">
							<form action="" method="get">
								<input type="text" id="k" name="k" value="" class="form-control srhTxt" placeholder="输入标题关键字搜索">
								<input type="hidden" name="p" value="admin">
								<input type="hidden" name="c" value="film">
								<input type="hidden" name="a" value="doList">
								<input type="submit" class="srhBtn" value="">
							</form>
						</div>
					</div>
					
					<div class="Mian-cont-wrap">
						<div class="defaultTab-T">
							<table border="0" cellspacing="0" cellpadding="0" class="defaultTable">
								<tbody><tr><th class="t_1">请假类型</th><th class="t_2_1">离校时间</th><th class="t_1">返校时间</th><th class="t_3">请假天数</th><th class="t_5">请假时间 (提交时间)</th><th class="t_1">审批结果</th><th class="t_4">操作</th></tr>
							</tbody></table>
						</div>
						<table border="0" cellspacing="0" cellpadding="0" class="defaultTable defaultTable2">
							<tbody>
							<!-- 
								$dataArr['pageStr'] = <div>.....</div>
								$dataArr['data'] = array(array(),array(),......)
							 -->
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
							<tr>
								<td class="t_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['leave_type'];?>
</td>
								<td class="t_2_1"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['leave_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
								<td class="t_1"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['back_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
								<td class="t_3"><?php echo $_smarty_tpl->tpl_vars['v']->value['leave_days'];?>
</td>
								<td class="t_5"><?php echo $_smarty_tpl->tpl_vars['v']->value['add_time'];?>
</td>
								<td class="t_1"><?php if ($_smarty_tpl->tpl_vars['v']->value['a_number'] == $_smarty_tpl->tpl_vars['v']->value['flow'] || $_smarty_tpl->tpl_vars['v']->value['if_agree'] == 2) {?>审批完成<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['a_number'] != $_smarty_tpl->tpl_vars['v']->value['flow']) {?>审批中<?php }?></td>
								<td class="t_4">
									<div class="btn"><a href="index.php?p=home&c=leave&a=See&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="modify">查看详情</a>
									</div></td>
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
	<!--点击修改弹出层-->
	<div class="layuiBg" style="display: none; height: 757px;"></div><!--公共遮罩-->
	<!--点击添加分类弹出-->
	<div class="addFeileibox layuiBox">
		<div class="layer-title clearfix"><h2>添加分类</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<div class="aFllink clearfix" style="margin-top: 38px;"><span>二级栏目：</span><input type="text" value=""></div>
			<div class="aFlBtn"><input type="button" value="保存" class="saveBtn"></div>
		</div>
	</div>
	<!--栏目管理-->
	<div class="Columnbox hdColumnbox layuiBox" style="left: 476.5px; top: 261.5px; display: none;">
		<div class="layer-title clearfix"><h2>栏目管理</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<ul class="colu-title clearfix">
				<li class="li-1">栏目名称</li><li class="li-2">英文名称</li><li class="li-5">栏目类型</li><li class="li-3">操作</li><li class="li-4">同步开关</li>
			</ul>
			<div class="colu-list">
				<ul class="colu-cont clearfix active">
					<li class="li-1"><i class="ico"></i>活动发布</li><li class="li-2">English</li><li class="li-5">列表页</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li><li class="li-4"><input type="checkbox" id="checkbox_d1" class="chk_4"><label for="checkbox_d1"></label></li>
				</ul>
				<div class="colunext" style="display: block;">
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>公司活动</li><li class="li-2"></li><li class="li-5">列表页</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
					<ul class="colu-next clearfix">
						<li class="li-1"><i class="ico"></i>团队活动</li><li class="li-2"></li><li class="li-5">列表页</li><li class="li-3"><a href="javascript:;" class="colu-xg">修改</a></li>
					</ul>
				</div>
			</div><!--新闻动态-->
			
		</div>
	</div>
	<!--栏目管理－修改-->
	<div class="ColumnXgbox layuiBox">
		<div class="layer-title clearfix"><h2>添加分类</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<div class="aFllink clearfix"><span>修改名称：</span><input type="text" value=""></div>
			<div class="aFllink clearfix"><span>英文名称：</span><input type="text" value=""></div>
			<div class="aFlBtn"><input type="button" value="保存" class="saveBtn"></div>
		</div>
	</div>




</body></html><?php }
}
