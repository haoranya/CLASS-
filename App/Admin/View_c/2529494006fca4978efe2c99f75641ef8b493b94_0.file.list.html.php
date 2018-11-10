<?php
/* Smarty version 3.1.30, created on 2018-11-07 23:30:04
  from "C:\Users\Administrator\Desktop\try\cims\App\Admin\View\Evidencepage\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be304fceb0d65_86617816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2529494006fca4978efe2c99f75641ef8b493b94' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims\\App\\Admin\\View\\Evidencepage\\list.html',
      1 => 1524648545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be304fceb0d65_86617816 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html class=" js csstransforms3d"><head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>活动管理</title>
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
			<div class="ctab-title clearfix"><h3>违纪记录</h3></div>
			
			<div class="ctab-Main">
				<div class="ctab-Main-title">
					<ul class="clearfix">
						<li class="cur"><a href="huodong_guanli.html">违纪列表</a></li>
					</ul>
				</div>
				
				<div class="ctab-Mian-cont">
					<div class="Mian-cont-btn clearfix">
						<div class="operateBtn">
							<a href="index.php?p=admin&c=evidencePage&a=evidencePage" class="greenbtn publish">添加违纪</a>
						</div>
						<div class="searchBar">
							<form action="" method="get">
								<input type="text" id="k" name="k" value="" class="form-control srhTxt" placeholder="关键字搜索">
								<input type="hidden" name="p" value="admin">
								<input type="hidden" name="c" value="evidencePage">
								<input type="hidden" name="a" value="evidenceDate">
								<input type="submit" class="srhBtn" value="">
							</form>
						</div>
					</div>
					
					<div class="Mian-cont-wrap">
						<div class="defaultTab-T">
							<table border="0" cellspacing="0" cellpadding="0" class="defaultTable">
								<tbody><tr><th class="t_1">违纪编号</th><th class="t_1">违纪图片</th><th class="t_2_1">班级</th><th class="t_3">原由</th><th class="t_3">姓名</th><th class="t_5">生活老师</th><th class="t_4">操作</th></tr>
							</tbody></table>
						</div>
						<table border="0" cellspacing="0" cellpadding="0" class="defaultTable defaultTable2">
							<tbody>
							<!-- 
								$dataArr['pageStr'] = <div>.....</div>
								$dataArr['data'] = array(array(),array(),......)
							 -->
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['evidenceArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
							<tr id = 'tr'>
								<td class="t_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
								<td class="t_1"><img id='img' src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img_url'];?>
" alt=""></td>
								<td class="t_2_1"><a><?php echo $_smarty_tpl->tpl_vars['v']->value['stu_class'];?>
</a></td>
								<td class="t_3"><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
								<td class="t_3" id ><?php echo $_smarty_tpl->tpl_vars['v']->value['stu_name'];?>
</td>
								<td class="t_5"><?php echo $_smarty_tpl->tpl_vars['v']->value['tea_name'];?>
</td>
								<td class="t_4"><div class="btn"><a href="index.php?p=admin&c=evidencePage&a=evidenceSee&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="modify">修改</a><a href="index.php?p=admin&c=evidencePage&a=evidenceDelect&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="delete">删除</a></div></td>
							</tr>

							
							
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


						</tbody></table>
						<!--pages S-->
						<?php echo $_smarty_tpl->tpl_vars['pagestr']->value;?>

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




</body>
</html>
<style type="text/css">


		.defaultTable .t_2_1,.defaultTable .t_4,.defaultTable .t_5,.defaultTable .t_3 {
         width: 10%; 
         text-align: center;
        }

        #img{

			
			height: 54px;

			width: 50%;

        }
	

</style>

<?php echo '<script'; ?>
 type="text/javascript">

	

<?php echo '</script'; ?>
><?php }
}
