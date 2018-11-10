<?php
/* Smarty version 3.1.30, created on 2018-11-07 09:15:20
  from "C:\Users\Administrator\Desktop\try\cims1\App\Home\View\User\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be23ca8d14369_91218592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f947d7585e3804a13923447ae7aea82dea02b687' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims1\\App\\Home\\View\\User\\register.html',
      1 => 1524817867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be23ca8d14369_91218592 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>用户注册</title>
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
               <p>用户注册</p>
          </div>
          <form action="../../../../index.php?p=home&c=user&a=register" method="post" id="loginform" >
              <p class="user">用户账号：</p>
              <input class='ipt' name="username" id="username" type="text" required="true" >
             

              <p class="user">用户密码：</p>
              <input id="password" name="password" onblur="checkpas1();" required="true" type="password"/>
              <p id='p1'></p>

              <p class="user">确认密码：</p>
              <input type="password" name="repassword" id="repassword" required="true" onChange="checkpas();" />
              <span class="tip" style="color: red;">两次输入的密码不一致</span><br>

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
              
           
              <p class="user">验证码：</p>
              <div>
              <input class='ipt' name="validateCode" id="validateCode" type="text" required="true" style="width: 230px;float: left;">
              <img class="yzm" src="index.php?p=home&c=test&a=testCaptcha" onclick="this.src='index.php?p=home&c=test&a=testCaptcha&r='+Math.random()" />
              </div> 
              <p id='p1'></p>
             
              
              <input type="hidden" name="flag" value="1">
              <input value="注册" class="zc" type="submit">

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


      <?php echo '<script'; ?>
>
      $(".tip").hide();
      function checkpas1(){//当第一个密码框失去焦点时，触发checkpas1事件
        var pas1=document.getElementById("password").value;
        var pas2=document.getElementById("repassword").value;//获取两个密码框的值
        if(pas1!=pas2&&pas2!=""){//此事件当两个密码不相等且第二个密码是空的时候会显示错误信息
          $(".tip").show();
        }else{
          $(".tip").hide();//若两次输入的密码相等且都不为空时，不显示错误信息。
        }
        }
      function checkpas(){//当第一个密码框失去焦点时，触发checkpas2件
        var pas1=document.getElementById("password").value;
        var pas2=document.getElementById("repassword").value;//获取两个密码框的值
        if(pas1!=pas2){
          $(".tip").show();//当两个密码不相等时则显示错误信息
        }else{
          $(".tip").hide();
        }
        }
      function checkpas2(){//点击提交按钮时，触发checkpas2事件，会进行弹框提醒以防无视错误信息提交
        var pas3=document.getElementById("password").value;
        var pas4=document.getElementById("repassword").value;
        if(pas3!=pas4){
          alert("两次输入的密码不一致！");
          return false;
        }
      }
    <?php echo '</script'; ?>
>


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
