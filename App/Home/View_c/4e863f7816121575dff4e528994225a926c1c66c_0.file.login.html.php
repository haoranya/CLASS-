<?php
/* Smarty version 3.1.30, created on 2018-04-27 15:46:50
  from "C:\wamp64\www\App\Home\View\Index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2d56aa8b5e8_81905076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e863f7816121575dff4e528994225a926c1c66c' => 
    array (
      0 => 'C:\\wamp64\\www\\App\\Home\\View\\Index\\login.html',
      1 => 1524815173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2d56aa8b5e8_81905076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>用户登录</title>
<link href="Public/css/login2.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body>
<div class="login_box">
      <div class="login_l_img"><img src="Public/images/login-img.png" /></div>
      <div class="login">
          <div class="login_logo"><a href="#"><img src="Public/images/login_logo.png" /></a></div>
          <div class="login_name">
               <p>用户登陆</p>
          </div>
          <form action="index.php?p=home&c=user&a=doLogin" method="post" id="btn_login">
             <p class="user">用户账号：</p>
              <input name="username" type="text" id="username" required="true">
              <p id='p1'></p>
              
              <p class="user">用户密码：</p>
              <input name="password" type="password" id="password" required="true" rangelength:[6,10]><p id='p1'></p>

              <tr class="YZM">
                <td class="title">验证码：</td><td>
                  <input type="text" class="input" id="validateCode" name="validateCode" class="form-control txt txt2" />
                <span class="yzm"><img src="index.php?p=home&c=test&a=testCaptcha" onclick="this.src='index.php?p=home&c=test&a=testCaptcha&r='+Math.random()" style="cursor: pointer"/> 
                </span>
              </td>
            </tr>
              
              <!-- 记住密码 -->
              <div class="remember">
                记住密码？<br>
                <input type="radio" name="remember" id="" value="0" checked="checked">不记密码
                <input type="radio" name="remember" id="" value="604800">一周
                <input type="radio" name="remember" id="" value="2592000">一月 
              </div>

  
              <input type="hidden" name="flag" value="1">
              <input value="登录" style="width:100%;" type="submit">


              <div class="register">
                <a href="../../../../index.php?p=home&c=User&a=reg">没有账号？点击注册</a>
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

        $(this).next("#p1").text('不能为空');

      }else{

        $(this).next("#p1").text('');
      }
  })  
  })
<?php echo '</script'; ?>
>
<?php }
}