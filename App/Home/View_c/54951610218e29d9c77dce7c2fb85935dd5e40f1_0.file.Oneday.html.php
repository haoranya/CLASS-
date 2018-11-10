<?php
/* Smarty version 3.1.30, created on 2018-04-27 15:56:17
  from "C:\wamp64\www\App\Home\View\Oneday\Oneday.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2d7a1cc69b1_74724343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54951610218e29d9c77dce7c2fb85935dd5e40f1' => 
    array (
      0 => 'C:\\wamp64\\www\\App\\Home\\View\\Oneday\\Oneday.html',
      1 => 1524554867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2d7a1cc69b1_74724343 (Smarty_Internal_Template $_smarty_tpl) {
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../../../../Public/layui/css/layui.css" media="all">
</head>
    <style type="text/css">
        
        .ws {
            margin-right:40px;
        }
        .file {
            position: absolute;
            right:40px;
            margin-top: 10px;
        }
    </style>
<body>


    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>学生周总结报告</lege nd>
    </fieldset>

    <form class="layui-form ws" action="index.php?p=home&c=Oneday&a=doInsert" method="post">
                
         <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-block">
                <input type="text" name="title" lay-verify="required" placeholder="请输入公司名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">所属公司</label>
            <div class="layui-input-block">
                <input type="text" name="gongsi" lay-verify="required" placeholder="请输入公司名称" autocomplete="off" class="layui-input">
            </div>
        </div>

        
       
      

        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">报告日期</label>
                <div class="layui-input-inline">
                    <input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">开始时间</label>
                <div class="layui-input-inline">
                    <input type="text" name="state_time" id="date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">结束时间</label>
                <div class="layui-input-inline">
                    <input type="text" name="end_time" id="date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>

     
     
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">报告内容</label>
            <div class="layui-input-block">
                <textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="LAY_demo_editor"></textarea>
            </div>


        <div class="layui-form-item">
            <!-- <button class="layui-btn file" lay-submit="" lay-filter="demo2">提交</button> -->
            <input type="submit" name="" class="layui-btn file" lay-submit="" lay-filter="" value="提交">
        </div>
        </div>
        
       
       
    </form>

    <?php echo '<script'; ?>
 src="../../../../Public/layui/layui.js"><?php echo '</script'; ?>
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
            form.on('submit(demo1)', function(data) {
                layer.alert(JSON.stringify(data.field), {
                    title: '最终的提交信息'
                })
                return false;
            });


        });
    <?php echo '</script'; ?>
>

</body>

</html>






<?php }
}