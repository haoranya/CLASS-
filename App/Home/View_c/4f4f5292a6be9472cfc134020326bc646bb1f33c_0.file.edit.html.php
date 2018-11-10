<?php
/* Smarty version 3.1.30, created on 2018-04-27 14:47:40
  from "D:\CIMS\App\Home\View\Leave\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2c78c470fd0_74405897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4f5292a6be9472cfc134020326bc646bb1f33c' => 
    array (
      0 => 'D:\\CIMS\\App\\Home\\View\\Leave\\edit.html',
      1 => 1524799632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2c78c470fd0_74405897 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html class=" js csstransforms3d"><head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>文章发布-发布</title>
	<link rel="stylesheet" href="Public/css/base.css">
	<link rel="stylesheet" href="Public/css/page.css">
	<!--[if lte IE 8]>
	<link href="Public/css/ie8.css" rel="stylesheet" type="text/css"/>
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
	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/jquery.selectui.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="Public/js/utf8-jsp/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="Public/js/utf8-jsp/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="Public/js/utf8-jsp/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
	
	<link rel="stylesheet" type="text/css" href="Public/js/webuploader/webuploader.css">    
    <link rel="stylesheet" type="text/css" href="Public/js/webuploader/demo.css">
	
	<?php echo '<script'; ?>
>
	$(function($) {
		$("select").selectui({
			// 是否自动计算宽度
			autoWidth: true,
			// 是否启用定时器刷新文本和宽度
			interval: true
		});
	});
	<?php echo '</script'; ?>
>
	<!--[if IE]>
	<?php echo '<script'; ?>
 src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
<link href="Public/js/utf8-jsp/themes/default/css/ueditor.css" type="text/css" rel="stylesheet">
<?php echo '<script'; ?>
 src="Public/js/utf8-jsp/third-party/codemirror/codemirror.js" type="text/javascript" defer><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="Public/js/utf8-jsp/third-party/codemirror/codemirror.css">
<?php echo '<script'; ?>
 src="Public/js/utf8-jsp/third-party/zeroclipboard/ZeroClipboard.js" type="text/javascript" defer><?php echo '</script'; ?>
></head>

<body style="background: rgb(246, 245, 250);">
	<!--content S-->
	<div class="super-content">
		
		<div class="superCtab">
			<div class="publishArt">
				<h4>审批结果</h4>
				<div class="pubMain">
					<a href="javascript:history.go(-1)" class="backlistBtn"><i class="ico-back"></i>返回列表</a>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['if_agree'] == 2) {?>
						<div class="lxfs-tzyx clearfix">
							<ul class="clearfix">
								<li><h5 class="pubtitle">驳回人</h5>
									<input type="text" class="shuruTxt" value='<?php echo $_smarty_tpl->tpl_vars['content']->value['dismissal'];?>
'>
								</li>
							</ul>
						</div>
						<h5 class="pubtitle">驳回理由</h5>
						<div class="pub-area-bar">
							<textarea name="content" rows="" cols="3"	><?php echo $_smarty_tpl->tpl_vars['content']->value['reject'];?>
</textarea>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['if_agree'] == 1) {?>已通过审批<?php } elseif ($_smarty_tpl->tpl_vars['result']->value['if_agree'] == 2) {?>申请已被驳回<?php } elseif ($_smarty_tpl->tpl_vars['result']->value['a_number'] < $_smarty_tpl->tpl_vars['result']->value['flow']) {?>正在审批中<?php }?>
						

						
				</div>
			</div>
		
		</div>
		<!--main-->
		
	</div>
	
	

<?php echo '<script'; ?>
 type="text/javascript">
// 添加全局站点信息
var BASE_URL = '/webuploader';
<?php echo '</script'; ?>
>
<!--引入JS-->
<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/webuploader/webuploader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/webuploader/demo.js"><?php echo '</script'; ?>
>
</body></html><?php }
}
