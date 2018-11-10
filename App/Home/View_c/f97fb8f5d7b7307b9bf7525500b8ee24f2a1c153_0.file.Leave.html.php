<?php
/* Smarty version 3.1.30, created on 2018-11-07 09:12:42
  from "C:\Users\Administrator\Desktop\try\cims1\App\Home\View\Leave\Leave.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be23c0ac549c0_64005921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f97fb8f5d7b7307b9bf7525500b8ee24f2a1c153' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims1\\App\\Home\\View\\Leave\\Leave.html',
      1 => 1524638601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be23c0ac549c0_64005921 (Smarty_Internal_Template $_smarty_tpl) {
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

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>我要请假</legend>
    </fieldset>

    <form class="layui-form" action="index.php?p=home&c=leave&a=tijiao" method ="post">
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">学生姓名</label>
                <div class="layui-input-inline">
                    <input type="tel" name="stu_name"  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['rules']->value['name'];?>
"  readonly>
                </div>
            </div>
            <div class="layui-inline">
                <label class="layui-form-label">辅导员姓名</label>
                <div class="layui-input-inline">
                    <input type="text" name="teacher_name" lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['tname']->value['name'];?>
" readonly>
                </div>
            </div>

            <div class="layui-inline">
                <label class="layui-form-label">所在班级</label>
                <div class="layui-input-inline">
                    <input type="text" name="stu_class" lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['rules']->value['class'];?>
" readonly>
                </div>
            </div>

            <div class="layui-inline">
                <label class="layui-form-label">联系电话</label>
                <div class="layui-input-inline">
                    <input type="text" name="stu_phone" lay-verify="phone" autocomplete="off" class="layui-input" value="" 
                </div>
            </div>

            <div class="layui-inline">
                <label class="layui-form-label" style="width: 100px">紧急联系电话</label>
                <div class="layui-input-inline">
                    <input type="text" name="stu_e_phone" lay-verify="phone" autocomplete="off" class="layui-input" value="" >
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            
            <div class="layui-inline">
                <label class="layui-form-label">类别</label>
                <div class="layui-input-inline">
                    <input type="text" name="reason" lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-inline">
                <label class="layui-form-label">离校日期</label>
                <div class="layui-input-inline">
                    <input type="text" name="leave_time" id="date1" lay-verify="required" autocomplete="off" class="layui-input">
                </div>
            </div>
             <div class="layui-inline">
                <label class="layui-form-label">返校日期</label>
                <div class="layui-input-block">
                    <input type="text" name="back_time" id="date2" lay-verify="required" autocomplete="off" class="layui-input">
                </div>
            </div>
             
         <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">具体原因</label>
            <div class="layui-input-block">
                <textarea placeholder="请输入内容" lay-verify="required" class="layui-textarea" name="content" style="width: 840px; margin-top:20px; resize:none;" ></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
               <!--  <button  class="layui-btn" lay-submit="submit" lay-filter="demo1">立即提交</button> -->
                <input type="submit" value="提交" class="layui-btn" lay-submit="submit" lay-filter="demo1" )";>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

    <?php echo '<script'; ?>
 src="Public/layui/layui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <?php echo '<script'; ?>
>
        
        // console.log("11100");
        layui.use(['form', 'layedit', 'laydate'], function() {
            var form = layui.form,
                layer = layui.layer,
                layedit = layui.layedit,
                laydate = layui.laydate;

            //日期
            laydate.render({
                elem: '#date1'
                ,type: 'datetime'
                ,min: '<?php echo $_smarty_tpl->tpl_vars['nowTime']->value;?>
'
                ,max: '<?php echo $_smarty_tpl->tpl_vars['lastTime']->value;?>
'
            });
            laydate.render({
                elem: '#date2'
                ,type: 'datetime'
                ,min: '<?php echo $_smarty_tpl->tpl_vars['nowTime']->value;?>
'
                ,max: '<?php echo $_smarty_tpl->tpl_vars['lastTime']->value;?>
'
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
                },

            });

        });
        $(function(){
            $('#date1').input(function(){
                var a = $(this).val();
               /* var d1 = a.replace(/-/g,'');
                alert(d1)*/

                alert(a);
            })
            $('#date2').blur(function(){
                var a = $(this).val();
                var d2 = a.replace(/-/g,'');
                 alert(d2)
            })
            
        })
    <?php echo '</script'; ?>
>

</body>
</html>

<!-- select to_days(FROM_UNIXTIME(back_time,'%Y-%m-%d')) - to_days(FROM_UNIXTIME(leave_time,'%Y-%m-%d')) as cha from czxy_leave where id=8 --><?php }
}
