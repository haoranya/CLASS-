<?php
/* Smarty version 3.1.30, created on 2018-11-07 20:24:31
  from "C:\Users\Administrator\Desktop\try\cims\App\Home\View\Punchcard\test.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be2d97f5e4613_51188742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46679a10a1b26a355b3563e1daae248140e61ff1' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims\\App\\Home\\View\\Punchcard\\test.htm',
      1 => 1541575590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be2d97f5e4613_51188742 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html><head>

	<title>HTML5 code Reader</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<style type="text/css">

 html, body { height: 100%; width: 100%; text-align:center; }  

</style>

<?php echo '<script'; ?>
 src="Public/js/jquery-1.9.1.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

//这段代 主要是获取摄像头的视频流并显示在Video 签中  

var canvas=null,context=null,video=null;   

window.addEventListener("DOMContentLoaded", function ()

{

	try{

		canvas = document.getElementById("canvas");

		context = canvas.getContext("2d");

		video = document.getElementById("video");

		

		var videoObj = { "video": true,audio:false},

		flag=true,

		MediaErr = function (error)

		{           

			flag=false;  

			if (error.PERMISSION_DENIED)

			{

				 alert('用户拒绝了浏览器请求媒体的权限', '提示');

			} else if (error.NOT_SUPPORTED_ERROR) {

				 alert('对不起，您的浏览器不支持拍照功能，请使用其他浏览器', '提示');

			} else if (error.MANDATORY_UNSATISFIED_ERROR) {

				 alert('指定的媒体类型未接收到媒体流', '提示');

			} else {

				 alert('系统未能获取到摄像头，请确保摄像头已正确安装。或尝试刷新页面，重试', '提示');

			}

		};

		//获取媒体的兼容代码，目前只支持（Firefox,Chrome,Opera）

        if (navigator.getUserMedia)

		{

			//qq浏览器不支持

			if (navigator.userAgent.indexOf('MQQBrowser') > -1) {

				 alert('对不起，您的浏览器不支持拍照功能，请使用其他浏览器', '提示');

				 return false;

			}
			
			// navigator.mediaDevices.getUserMedia(videoObj)
			// 						.then(function(stream) {
									
			// 							video.src = stream;                

			// 							video.play(); 

			// 						})
			// 						.catch(function(err) {
			// 							console.log( err )
			// 						});

            navigator.getUserMedia(videoObj, function (stream) {

				video.src = window.URL.createObjectURL(stream);            
				// video.src = tream;                

				video.play();      

            }, MediaErr);           

		}

		else if(navigator.webkitGetUserMedia)

		{

           navigator.webkitGetUserMedia(videoObj, function (stream)

		   {          

             video.src = window.webkitURL.createObjectURL(stream);           

             video.play();           

        	}, MediaErr);           

		}

		else if (navigator.mozGetUserMedia)

		{

			navigator.mozGetUserMedia(videoObj, function (stream) {
				
				 video.src = window.URL.createObjectURL(stream);

				 video.play();

			}, MediaErr);

		}

		// else if(navigator.mozGetUserMedia) { // WebKit-prefixed

        //         navigator.mozGetUserMedia(videoObj, function(stream){

        //             video.src = window.URL.createObjectURL(stream);

        //             video.play();

        //         }, errBack);
				
        //     }

		else if (navigator.msGetUserMedia)

		{ 

			 navigator.msGetUserMedia(videoObj, function (stream) {

             	$(document).scrollTop($(window).height());

                video.src = window.URL.createObjectURL(stream);

                video.play();

             }, MediaErr);

		}else{

			alert('对不起，您的浏览器不支持拍照功能，请使用其他浏览器');

			return false;

		}

		if(flag){

			alert('为了获得更准确的测试结果，请尽量将二维码置于框中，然后进行拍摄、扫描。 请确保浏览器有权限使用摄像功能');

		}

     	 //这个是拍照按钮的事件，          

     	$("#snap").click(function () {startPat();}).show();

	}catch(e){      

        printHtml("浏览器不支持HTML5 CANVAS");       

    } 

}, false);

    

//打印内容到页面      

function printHtml(content){

	$(window.document.body).append(content+"<br/>");

}

//开始拍照

function startPat(){

	setTimeout(function(){//防止调用过快
		if(context)
		{  

			context.drawImage(video, 0, 0, 320, 320);     

			CatchCode(); 

		}

	},200);

} 

//抓屏获取图像流，并上传到服务器      

function CatchCode() {        

	if(canvas!=null)

	{  
   		//以下开始编 数据   

		var imgData = canvas.toDataURL(); 

		//将图像转换为base64数据

        var base64Data = imgData;//.substr(22); //在前端截取22位之后的字符串作为图像数据
        //开始异步上

	   $.post("App/Home/View/Punchcard/saveimg.php", { "img": base64Data },function (result)
	   {  


			if (result.status == "success" && result.data!="")

			{       
				// printHtml("解析结果："+result.data);
				location.href=result.data;          
				printHtml("哈哈哈哈哈哈");

			}else{  
				startPat();//如果没有解析出来则重新抓拍解析       
			}

	   },"json");

	}

}      

<?php echo '</script'; ?>
>

  <body>



<div id="support"></div>

<div id="contentHolder">       

<video id="video" width="320" height="320" autoplay>

</video>       

<canvas style="display:none; background-color:#F00;" id="canvas" width="320" height="320">

</canvas> <br/>

<button id="snap" style="display:none; height:50px; width:120px;">开始扫描</button>  

   </div>




</body></html><?php }
}