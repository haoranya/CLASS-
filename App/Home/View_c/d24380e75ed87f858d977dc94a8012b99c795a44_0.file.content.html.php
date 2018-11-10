<?php
/* Smarty version 3.1.30, created on 2018-04-19 17:32:30
  from "C:\www\dytt\App\Home\View\Film\content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad8622ec2e309_90958062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd24380e75ed87f858d977dc94a8012b99c795a44' => 
    array (
      0 => 'C:\\www\\dytt\\App\\Home\\View\\Film\\content.html',
      1 => 1524130348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad8622ec2e309_90958062 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\www\\dytt\\Vendor\\Smarty\\plugins\\modifier.replace.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="Public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="Public/css/common.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="Public/js/jquery-1.9.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/common.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/layer/layer.js" type="text/javascript"><?php echo '</script'; ?>
>
<title>电视剧-大秦帝国之崛起</title>
</head>

<body>
<div id="header_top">
<div class="page_header">
 <div class="header_style">
  <div class="clearfix">
    <a href="#" class="logo_style"><img src="Public/images/logo.png"  width="150px"/></a>
    <ul class="nav_list">
     <li class="nav_link"><a href="index.html" class="Channel_name"><i class="i icon_home"></i>首页</a></li>
     <li class="nav_link Channel_link">
     <a href="javascript:" class="Channel_name"><i class="i icon_nav"></i>频道<i class="i i_arw2"></i></a>
     <div class="Channel_nav_list">
        <ul class=" clearfix">
   <li class="Channel_color"><a href="list_page.html" ><i class="icon_TV"></i>电视剧</a></li>
   <li class="Channel_color split_line"><a href="#" ><i class="icon_TV"></i>体育</a></li>
   <li class="Channel_color split_line"><a href="#"><i class="icon_TV"></i>电影</a></li>
   <li class="Channel_color split_line"><a href="#" ><i class="icon_TV"></i>网络电影</a></li>
   <li class="Channel_color split_line"><a href="#" ><i class="icon_TV"></i>综艺</a></li>
   <li class="Channel_color split_line"><a href="#" ><i class="icon_TV"></i>动漫</a></li>
   <li class="Channel_color split_line"><a href="#" ><i class="icon_TV"></i>纪录片</a></li>
   <li class="Channel_color split_line"><a href="#" ><i class="icon_TV"></i>公开课</a></li>
  </ul>
     </div>
     </li>
    </ul>
    <div class="search_style">
      <input name="" type="text"  class="search"/><button name="" type="button" class="button_submit" onclick="submit_btn()"><i class="icon_search"></i>搜索</button>
   </div>
  </div>
 </div>
</div>
<!---->
<div class="page_style">
 <div class="Location_link">
  <em></em><a href="index.html">首页</a>  &lt;   <a href="list_page.html">电视剧</a> &lt; <span><?php echo $_smarty_tpl->tpl_vars['film']->value['name_cn'];?>
</span> 
 </div>
 <!--介绍-->
 <div class="clearfix Television_style">
  <div class="Television_img l_f">
  <a href="javascrpt:"><img src="<?php echo $_smarty_tpl->tpl_vars['film']->value['file_poster'];?>
" />
  <span class="first_bg"><i class="icon_bf"></i></span>
  </a>
  </div>
  <div class="clearfix">
  <div class="Television_content l_f">
  <div class="score_style">评分：<b><?php echo $_smarty_tpl->tpl_vars['film']->value['douban_score'];?>
</b>分</div>
   <dl class="movie_info clearfix">
    <dt><?php echo $_smarty_tpl->tpl_vars['film']->value['name_cn'];?>
<span class="Quantity"><?php echo $_smarty_tpl->tpl_vars['film']->value['film_time'];?>
</span></dt>
    <dd><label>主演：</label> 
      <span><a ><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['film']->value['main_actor'],'　',''),'<br />',' ');?>
</a></span>
    </dd>
    
    <dd><label>导演：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['director'];?>
</a></span> </dd>
    <dd><label>类型：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['film_typename'];?>
</span> </dd>
    <dd><label>地区：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['place_production'];?>
</a></span> </dd>
    <dd><label>年份：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['year'];?>
</a></span> </dd>
    <dd><label>语言：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['language'];?>
</a></span> </dd>
    <dd><label>IMDB评分：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['imdb_score'];?>
</a></span> </dd>
    <dd><label>字幕：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['subtitle'];?>
</a></span> </dd>
    <dd><label>大小：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['size'];?>
</a></span> </dd>
    <dd><label>分辨率：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['pixel'];?>
</a></span> </dd>
    <dd><label>格式：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['format'];?>
</a></span> </dd>
    <dd><label>上映日期：</label> <span><a href="#"><?php echo $_smarty_tpl->tpl_vars['film']->value['pubtime'];?>
</a></span> </dd>
   </dl>
   <div class="Introduction"><?php echo $_smarty_tpl->tpl_vars['film']->value['content'];?>
</div>

   <div class="Introduction"><a href="<?php echo $_smarty_tpl->tpl_vars['film']->value['down_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value['down_url'];?>
</a></div>
  </div>
  </div>

  <!--相关内容-->
   <div class="Related_content">
    <div class="Related_title"><span>相关视频</span> <a href="javascript:" class="change_link"><i class="icon_change"></i>换一批</a></div>
    <div class="list_v_content ">
     <ul class="Notice_list">
      <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/14.jpg" width="100%">
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq">更新预告</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#">轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/4.jpg" width="100%">
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq">更新预告</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#">轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg" width="100%">
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq">34集全</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#">大秦帝国之纵横</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/5.jpg" width="100%">
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq">更新预告</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#">轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/5.jpg" width="100%">
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq">更新预告</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#">轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/5.jpg" width="100%">
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq">更新预告</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#">轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
     </ul>
    </div>
   </div>
 </div>
</div>
<!--底部样式-->
<div class="footer_style">
<div class="footer">
 <div class="copys copys-list clearfix">
   <a href="#">网络文化经营许可证 京网文[2014]xxxxx-236号</a>
   <a href="#">京卫网审[2013]第0209号 网络110报警服务</a>
   <a href="#">药品服务许可证(京)-经营2222-0029</a>
  <a href="#">节目制作经营许可证京字670号</a>
 </div>
<div class="link_name">
<a href="#">关于我们</a>|<a href="#">媒体合作</a>|<a href="#">开放平台</a>|<a href="#">广告服务</a>|<a href="#">联系我们</a>|<a href="#">工作机会</a>|<a href="#">友情链接</a></div>
<div class="Copyright">Copyright © 2004-2017 视频名称（xx.com）All rights reserved.</div>
<div class="align clearfix">
 <a href="#"><img src="Public/images/ghs.png" />京公网安备：xxxxxxxxxxxxxxxx号</a> &nbsp;&nbsp;&nbsp;
 <a href="#"><img src="Public/images/xy.png" />中国互联网诚信联盟</a>
</div>
</div>

</div>
<!-- 代码 开始 -->
<div class="go-top dn" id="go-top">
    
    <a href="zhuce.html" target="_blank" class="feedback"></a>
    <a href="javascript:;" class="go"></a>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
/*********搜索*********/
function submit_btn(){
	 $(".search_style input[type$='text']").each(function(n){
		  if($(this).val()=="")
          {
               
			   layer.alert("搜索框不能为空！",{
                title: '提示框',				
				icon:0,								
          }); 		    
            return false;            
          } 
		 else{
			 location.href="search_page.html";
			 
			 }
		 })		
}
<?php echo '</script'; ?>
><?php }
}
