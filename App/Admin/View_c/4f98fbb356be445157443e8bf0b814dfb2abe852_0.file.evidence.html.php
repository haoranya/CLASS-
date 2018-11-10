<?php
/* Smarty version 3.1.30, created on 2018-04-27 11:21:52
  from "D:\CIMS\App\Admin\View\Evidencepage\evidence.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae29750d11d51_67522225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f98fbb356be445157443e8bf0b814dfb2abe852' => 
    array (
      0 => 'D:\\CIMS\\App\\Admin\\View\\Evidencepage\\evidence.html',
      1 => 1524649361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae29750d11d51_67522225 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="Public/layui/css/layui.css" media="all">
</head>

<style type="text/css">


    .img{


        width: 300px;
        height: 100px;
        color:red;

    }

</style>

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>违纪取证</legend>
    </fieldset>

    <form class="layui-form" action="index.php?p=admin&c=evidence&a=doEvidence" method="post"  enctype="multipart/form-data">
      
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">学生姓名</label>
                <div class="layui-input-inline">
                    <input type="tel" name="stu_name"  lay-verify="required" autocomplete="off" class="layui-input">
                </div>
            </div>
         
        </div>

           <div class="layui-form-item">
                
                 <div class="layui-inline">
                    <label class="layui-form-label">辅导员姓名</label>
                    <div class="layui-input-inline">
                        <input type="text" name="tea_name" lay-verify="required" autocomplete="off" class="layui-input">
                    </div>
                </div>
           
           </div>

             <div class="layui-form-item">
                
               <div class="layui-inline">
                    <label class="layui-form-label">所在班级</label>
                    <div class="layui-input-inline">
                        <input type="text" name="stu_class" lay-verify="required" autocomplete="off" class="layui-input">
                    </div>
                </div>
           
           </div>

            <div class="layui-form-item">
                
               <div class="layui-inline">
                    <label class="layui-form-label">违纪原因</label>
                    <div class="layui-input-inline">
                        <input type="text" name="type" lay-verify="required" autocomplete="off" class="layui-input">
                    </div>
                </div>
           
           </div>


               <div class="">
                    <label class="layui-form-label">违纪照片</label>
                    <div class="layui-input-inline">
                        <!-- <input type="file" capture="camera" accept="image/*" id="filetest" name="images" lass="img"> -->
                        <input type="file" name="wj_img">

                        <!-- <input type="file" name="wj_img"> -->

                    </div>
                </div>
        
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">当日日期</label>
                <div class="layui-input-inline">
                    <input type="text" name="today_date" id="date" lay-verify="date" placeholder="" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <input type="submit" value="提交" class="layui-btn" lay-submit="submit" lay-filter="demo1">
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
      </div>
    </form>

    <?php echo '<script'; ?>
 src="Public/layui/layui.js"><?php echo '</script'; ?>
>
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <?php echo '<script'; ?>
>
        layui.use(['form', 'layedit', 'laydate'], function() {
            var form = layui.form,
                layer = layui.layer,
                layedit = layui.layedit,
                laydate = layui.laydate;

            //日期
            laydate.render({
                elem: '#date'
            });
            laydate.render({
                elem: '#date1'
            });

            //创建一个编辑器
            var editIndex = layedit.build('LAY_demo_editor');

            //自定义验证规则
            form.verify({
                title: function(value) {
                    if (value.length < 5) {
                        return '标题至少得5个字符啊';
                    }
                },
                pass: [/(.+){6,12}$/, '密码必须6到12位'],
                content: function(value) {
                    layedit.sync(editIndex);
                }
            });

            //监听指定开关
            form.on('switch(switchTest)', function(data) {
                layer.msg('开关checked：' + (this.checked ? 'true' : 'false'), {
                    offset: '6px'
                });
                layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
            });

            //监听提交
            // form.on('submit(demo1)', function(data) {

            //     layer.alert(JSON.stringify(data.field), {
            //         title: '最终的提交信息'
            //     })


            //     return false;
            // });


        });

         // 监听照片拍摄,并获取照片流
             // var takePicture = document.getElementById('takepicture');
             // var takePictureUrl = function () {
             //     takePicture.onchange = function (event) {
             //         var files = event.target.files, file;
             //         if (files && files.length > 0) {
             //             file = files[0];
             //             try {
             //                 var URL = window.URL || window.webkitURL;
             //                 var blob = URL.createObjectURL(file);　　// 获取照片的文件流
             //                 compressPicture(blob);　　// 压缩照片
             //             }
             //             catch (e) {
             //                 try {
             //                     var fileReader = new FileReader();
             //                     fileReader.onload = function (event) {　　　　// 获取照片的base64编码
             //                         compressPicture(event.target.result);　　// 压缩照片
             //                     };
             //                     fileReader.readAsDataURL(file);
             //                 }
             //                 catch (e) {
             //                     alert(common.MESSAGE.title.error, '拍照失败,请联系客服或尝试更换手机再试!');
             //                 }
             //             }
             //         }
             //     }
             // }();
  <?php echo '</script'; ?>
>

</body>

</html><?php }
}
