<?php
/* Smarty version 3.1.30, created on 2018-11-07 23:30:32
  from "C:\Users\Administrator\Desktop\try\cims\App\Admin\View\Addgenerate\generate.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be30518a0b830_77542548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04ca201494cc6152670d5400b10f4a7e84f7534f' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims\\App\\Admin\\View\\Addgenerate\\generate.php',
      1 => 1524882331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be30518a0b830_77542548 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <!-- 设置网页的编码  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="Public/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.state{
			text-align: left;
		}
		h3{
			margin-bottom: 30px;
		}
		.start{
			margin-right: 30px;
		}
		.btn{
			margin-top: 30px;
		}
        .select_one{
            width: 145px;
            height: 35px;
            margin-bottom: 30px;
            font-size: 15px;
        }
        .select_one option{
            text-align:center;
        }
	</style>
  </head>
  <body>
    
    <div class="row">

	  <div class="col-md-2"></div>
	  <div class="col-md-8">

	  	<form action="index.php?p=admin&c=Addgenerate&a=produce" method="post">
			<div class="state">

				<h3>状态报告生成(暂未完成)</h3>
                    
                <select name="class_type" class="select_one">
                    <option value="">班级选择</option>
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
                <br>
				开始日期: <input type="text" name="leave_date" id="date" lay-verify="date" autocomplete="off" class="layui-input">
				结束日期: <input type="text" name="back_date" id="date1" lay-verify="date" autocomplete="off" class="layui-input">

				<br>
				<input type="hidden" value="1" name="flag">
				<input type="submit" class="btn btn-success" value="一键生成">
	 		</div>
 		</form>

	  </div>
	  <div class="col-md-2"></div>

	</div>


    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <?php echo '<script'; ?>
 src="Public/js/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <?php echo '<script'; ?>
 src="Public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
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


        });
    <?php echo '</script'; ?>
>
    
  </body>
</html>
<?php }
}
