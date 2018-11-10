<?php
/* Smarty version 3.1.30, created on 2018-04-27 15:53:29
  from "C:\wamp64\www\App\Admin\View\Punchcard\timePunchcard.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2d6f9889227_11789834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5468c1ebb46f0eccc08ef327a311359f95f8469' => 
    array (
      0 => 'C:\\wamp64\\www\\App\\Admin\\View\\Punchcard\\timePunchcard.html',
      1 => 1524799603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2d6f9889227_11789834 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

	<head>

		<meta charset="utf-8" />

		<title>Reveal Demo</title>

		

		<!-- Attach our CSS -->

	  	<link rel="stylesheet" href="Public/css/reveal.css">	

	  	

		<!-- Attach necessary scripts -->

		<!-- <?php echo '<script'; ?>
 type="text/javascript" src="jquery-1.4.4.min.js"><?php echo '</script'; ?>
> -->

		<?php echo '<script'; ?>
 src="Public/js/jquery-1.4.4.min.js"/><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/jquery.reveal.js"><?php echo '</script'; ?>
>

		<style type="text/css">

			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }

			.big-link { display:block; margin-top: 100px; text-align: center; font-size: 20px; color: black; }

			h1{

				color:red;

			}

		</style>

		

	</head>

	<body>


		<a href="#" class="big-link" data-reveal-id="myModal1">

			Morning

		</a>	

		

		<a href="#" class="big-link" data-reveal-id="myModal2" data-animation="fade">

			Afternoon

		</a>

		

		<a href="#" class="big-link" data-reveal-id="myModal3" data-animation="none">

			Evening

		</a>



		<div id="myModal1" class="reveal-modal">

			<h1>欢迎上午打卡</h1>

			<p>早起的鸟儿有虫吃哦！！！</p>

			<iframe runat="server" src='index.php?p=admin&c=Punchcard&a=two_qrcode&time=morning' width="100%" height="100%" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>

		</div>

		<div id="myModal2" class="reveal-modal">

			<h1>欢迎下午打卡</h1>

			<p>午休后的你是不是元气满满？？？</p>

			
			<iframe runat="server" src='index.php?p=admin&c=Punchcard&a=two_qrcode&time=afternoon' width="100%" height="100%" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>

		</div>

		<div id="myModal3" class="reveal-modal">

			<h1>欢迎晚上打卡</h1>

			<p>踏着夜色，问问你今天干了什么？？？</p>
			

			<iframe runat="server" src='index.php?p=admin&c=Punchcard&a=two_qrcode&time=evening' width="100%" height="100%" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>
			

		</div>

	</body>

</html><?php }
}
