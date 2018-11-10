<?php
/* Smarty version 3.1.30, created on 2018-04-25 19:15:12
  from "D:\CIMS\App\Admin\View\Report\report_content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae06340eea5e4_60822394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ae62f5f4b5e503f8c55e5b6499df0b0fc6b8dd' => 
    array (
      0 => 'D:\\CIMS\\App\\Admin\\View\\Report\\report_content.html',
      1 => 1524627556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae06340eea5e4_60822394 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h4>学生工作汇报</h4>
				<div class="pubMain">
					<a href="javascript:history.go(-1)" class="backlistBtn"><i class="ico-back"></i>返回列表</a>
					<form action="index.php?p=admin&c=report&a=doAdd&id=<?php echo $_smarty_tpl->tpl_vars['retGall']->value['id'];?>
" method="post">

						
						<h5 class="pubtitle">标题</h5>
						<div class="pub-txt-bar">
							<input type="text" name="gz_title" class="shuruTxt" value="<?php echo $_smarty_tpl->tpl_vars['retGall']->value['gz_title'];?>
">
						</div>

						<h5 class="pubtitle">公司</h5>
						<div class="pub-txt-bar">
							<input type="text" name="gz_gongsi" class="shuruTxt" value="<?php echo $_smarty_tpl->tpl_vars['retGall']->value['gz_gongsi'];?>
">
						</div>

					
						

						<div class="lxfs-tzyx clearfix">
							<ul class="clearfix">
								<li><h5 class="pubtitle">开始时间</h5>
									<input type="text" class="shuruTxt" name="gz_start_time" value="<?php echo $_smarty_tpl->tpl_vars['retGall']->value['gz_start_time'];?>
">
								</li>
								<li><h5 class="pubtitle">结束时间</h5>
									<input type="text" class="shuruTxt" name="gz_end_time" value="<?php echo $_smarty_tpl->tpl_vars['retGall']->value['gz_end_time'];?>
">
								</li>
							</ul>
						</div>


						<h5 class="pubtitle">内容</h5>
						<div class="pub-area-bar">
							<textarea name="gz_content" rows="" cols="3" height="400px"><?php echo $_smarty_tpl->tpl_vars['retGall']->value['gz_content'];?>
</textarea>
						</div>

						<h5 class="pubtitle">评分(1～10分)</h5>
						<div class="pub-txt-bar">
							<input type="text" name="gz_pingfen" class="shuruTxt" value="<?php echo $_smarty_tpl->tpl_vars['retGall']->value['gz_pingfen'];?>
">
						</div>
						


						
						<div class="pub-btn">
							<input type="submit" value="添加" class="saveBtn">
						</div>
					</form>
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
<?php echo '<script'; ?>
 type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
    
<?php echo '</script'; ?>
>


</body></html><?php }
}
