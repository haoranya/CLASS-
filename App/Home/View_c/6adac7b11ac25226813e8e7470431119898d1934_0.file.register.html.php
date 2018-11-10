<?php
/* Smarty version 3.1.30, created on 2018-04-25 08:37:17
  from "D:\CIMS\App\Home\View\User\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfcdbde736a6_39729241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6adac7b11ac25226813e8e7470431119898d1934' => 
    array (
      0 => 'D:\\CIMS\\App\\Home\\View\\User\\register.html',
      1 => 1524580696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adfcdbde736a6_39729241 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>后台管理</title>
<link href="Public/css/register.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/jquery.validate-1.17.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/message_zh.js"><?php echo '</script'; ?>
>


</head>

<body>
<div class="login_box">
      <div class="login_l_img"><img src="Public/images/login-img.png" /></div>
      <div class="login">
          <div class="login_logo"><a href="#"><img src="Public/images/login_logo.png" /></a></div>
          <div class="login_name">
               <p>后台管理系统</p>
          </div>
          <form action="index.php?p=home&c=user&a=register" method="post" id="loginform" >
              <p class="user">用户账号：</p>
              <input class='ipt' name="username" id="username" type="text" required="true">
              <p id='p1'></p>
              <p class="user">用户密码：</p>
              <input class='ipt' name="password" id="password" type="password" required="true">
              <p id='p1'></p>
              <p class="user">确认密码：</p>
              <input class='ipt' name="re_password" id="re_password" type="password" required="true">
              <p id='p1'></p>
              <p class="user">真实姓名：</p>
              <input class='ipt' name="re_name" id="re_name" type="text" required="true">
              <p id='p1'></p>
              <p class="user">所在班级：</p>
              <select name="class_type" id="class_id" required="true">
                <option value="所在班级">所在班级</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['className']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </select>
              
              <tr>
                <td class="title">验证码：</td><td>
                  <input type="text" id="validateCode" name="validateCode" class="form-control txt txt2" />
                <span class="yzm"><img src="index.php?p=home&c=test&a=testCaptcha" onclick="this.src='index.php?p=home&c=test&a=testCaptcha&r='+Math.random()" style="cursor: pointer"/> 
                </span>
              </td>
            </tr>
              
              <input type="hidden" name="flag" value="1">
              <input value="注册" style="width:100%;" type="submit">

              <div class="register">
              <a href="../../../../index.php">已有账号？点击登录</a>
              </div> 
          </form>
      </div>
      <div class="copyright">
        
          <div class="container">
      
          <div class="left">
              @2007-2017 传智专修学院全栈1班版权所有
          </div>
          <div class="right">
              <a href="">网站地图</a>
              <a href="">法律声明</a>
              <a href="">友情链接</a>
          </div>
          
          </div>


      </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
  language="javascript" type="text/javascript">
  $(function(){

      $(".ipt").blur(function(){
     
      if($(this).val()==""){

        $(this).focus();

        $(this).next("#p1").text('不能为空');

      }else{

        $(this).next("#p1").text('');
      }

       
  })  






   //    $("#password").blur(function(){
   //    if($("#password").val()==""){
   //      alert("密码不能为空");
   //       $("#username").focus();
   //    }
   // })

    
   //  $("#re_password").blur(function(){
   //    if($("#re_password").val()==""){
   //      alert("确认密码不能为空");
   //       $("#username").focus();
   //    }
   // })

   //  $("#re_name").blur(function(){
   //    if($("#re_name").val()==""){
   //      alert("真是姓名不能为空");
   //       $("#username").focus();
   //    }
   // })


   //  $("#class_id").blur(function(){
   //    if($("#class_id").val()==""){
   //      alert("班级不能为空");
   //       $("#username").focus();
   //    }
   // })

   //  $("#validateCode").blur(function(){
   //    if($("#validateCode").val()==""){
   //      alert("验证码不能为空");
   //       $("#username").focus();
   //    }
   // })

  
     
  })
   

<?php echo '</script'; ?>
>
<?php }
}
