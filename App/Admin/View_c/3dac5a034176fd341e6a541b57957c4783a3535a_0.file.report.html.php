<?php
/* Smarty version 3.1.30, created on 2018-11-07 23:30:27
  from "C:\Users\Administrator\Desktop\try\cims\App\Admin\View\Report\report.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be30513500167_16788603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dac5a034176fd341e6a541b57957c4783a3535a' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims\\App\\Admin\\View\\Report\\report.html',
      1 => 1524879505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be30513500167_16788603 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo '<script'; ?>
 type="text/javascript">
		
	<?php echo '</script'; ?>
>
</head>
<?php echo '<script'; ?>
>


// $(function(){
// 	    $(".aa").click(function() {
//     		// console.log(123);
//         $('li').removeClass('cur'); 

//         $(this).parent().addClass('cur');

    // });

// })


<?php echo '</script'; ?>
>
<style>

</style>
<body style="background: #f6f5fa;">
	<div class="super-content">
		<div class="superCtab">
			<div class="ctab-title clearfix"><h3>汇报管理</h3></div>
			
			<div class="ctab-Main">
				<div class="ctab-Main-title">
					<ul class="clearfix" id="ws">
						<li class=" ww">
							<a href="index.php?p=admin&c=report&a=reportTable" class="aa">学生报告情况</a></li>
						<li><a href="index.php?p=admin&c=report&a=reportTable_o" class="aa">学生周报情况</a></li>
						<li><a href="index.php?p=admin&c=report&a=reportTable_t" class="aa">学生月报情况</a></li>
					</ul>
				</div>
				
				<div class="ctab-Mian-cont">
					<div class="Mian-cont-btn clearfix">
						<div class="operateBtn">
							<!-- <a href="huodong_fabu.html" class="greenbtn publish">发布活动</a>
							<a href="index.php?p=admin&c=filmtype&a=addType" class="greenbtn add sp-add">添加分类</a>
						</div> -->
						<div class="searchBar">
							<form action="" method="get">
								<!-- <input type="text" id="k" name="k" value="" class="form-control srhTxt" placeholder="输入标题关键字搜索"> -->
								<input type="hidden" name="p" value="admin">
								<input type="hidden" name="c" value="film">
								<input type="hidden" name="a" value="doList">
								<!-- <input type="submit" class="srhBtn" value=""> -->
							</form>
						</div>
					</div>
					
					<div class="Mian-cont-wrap">
						<div class="defaultTab-T">
							<table border="0" cellspacing="0" cellpadding="0" class="defaultTable">
								<tbody><tr>
									<th class="t_1">ID</th>
									<th class="t_1">学生姓名</th>
									<th class="t_4">公司</th>
									<th class="t_5">标题</th>
									<th class="t_4">操作</th></tr>
							</tbody></table>
						</div>
						<table border="0" cellspacing="0" cellpadding="0" class="defaultTable defaultTable2">
							<tbody>
							<!-- 
								$dataArr['pageStr'] = <div>.....</div>
								$dataArr['data'] = array(array(),array(),......)
							 -->
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
							<tr>
								<td class="t_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
								<td class="t_1"><a href="huodong_content.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['gz_title'];?>
</a></td>
								<td class="t_4"><?php echo $_smarty_tpl->tpl_vars['v']->value['gz_gongsi'];?>
</td>
								<td class="t_5"><?php echo $_smarty_tpl->tpl_vars['v']->value['gz_gongsi'];?>
</td>
								
								<td class="t_4"><div class="btn">

									<a class="Top" href="../../../../index.php?p=admin&c=report&a=retAll&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">查看</a>


									<a class="delete" href="../../../../index.php?p=admin&c=report&a=deleteType&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
									<!-- <a href="#" class="modify">回馈</a> -->
								</div></td>
							</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



						</tbody></table>
						<!--pages S-->
						<?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>

						<!--pages E-->
					</div>
				</div>
			</div>
		</div>
		<!--main-->
		
	</div>
	<!--content E-->
	<!--点击修改弹出层-->
	<!-- <div class="layuiBg" style="display: none; height: 757px;"></div><!--公共遮罩-->
	<!--点击添加分类弹出-->
<!-- 	<div class="addFeileibox layuiBox">
		<div class="layer-title clearfix"><h2>添加分类</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<div class="aFllink clearfix" style="margin-top: 38px;"><span>二级栏目：</span><input type="text" value=""></div>
			<div class="aFlBtn"><input type="button" value="保存" class="saveBtn"></div>
		</div>
	</div> -->
	<!--栏目管理-->
<!-- 	<div class="Columnbox hdColumnbox layuiBox" style="left: 476.5px; top: 261.5px; display: none;">
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
<!-- 	<div class="ColumnXgbox layuiBox">
		<div class="layer-title clearfix"><h2>添加分类</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<div class="aFllink clearfix"><span>修改名称：</span><input type="text" value=""></div>
			<div class="aFllink clearfix"><span>英文名称：</span><input type="text" value=""></div>
			<div class="aFlBtn"><input type="button" value="保存" class="saveBtn"></div>
		</div>
	</div>  -->




</body></html><?php }
}
