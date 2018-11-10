<?php
/* Smarty version 3.1.30, created on 2018-11-08 16:54:52
  from "C:\Users\Administrator\Desktop\try\cims\App\Admin\View\Punchcard\Punchcard.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be3f9dc538531_29946478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f197cd3bd295297649b51824b33ef3c05f96c9e8' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims\\App\\Admin\\View\\Punchcard\\Punchcard.html',
      1 => 1524796250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3f9dc538531_29946478 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>今日打卡</title>
 	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="Public/js/qrcode.js"><?php echo '</script'; ?>
>
 </head>
 


 <style>

      .card{

			width: 160px;

			height: 160px;

			padding:20px;

			background-color:#333;

      border-radius: 50px;

      }

      .ma{

			background-color:pink;

			width: 160px;

			height: 160px;

      }

 </style>
 <body>
 	<div class="card">

			<div id="qrcode">
		
				

			</div>

			<input type="hidden" name="" id='ipt' value="<?php echo $_smarty_tpl->tpl_vars['nowtime']->value;?>
ID<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
ID<?php echo $_smarty_tpl->tpl_vars['time_type']->value;?>
">

 	</div>


 </body>
 </html>
 <?php echo '<script'; ?>
 type="text/javascript">

	var info = $("#ipt").val();


	console.log(info);

	var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 160,
	height : 160
});
    qrcode.makeCode("http://192.168.43.165/cims/index.php?p=admin&c=Punchcard&a=punchcard_insert&info="+info);

   

     function check(){

     $.get('App/Admin/View/Punchcard/checkPunchcard.php',{date:info,num:Math.random()},function(data){
     	
    	  if(data*1!=0){
 			
    	  	window.location.reload(true);

    	  }else{

    	  	

    	  }


      });
     		

     }

     setInterval('check()',1000);


<?php echo '</script'; ?>
>
<?php }
}
