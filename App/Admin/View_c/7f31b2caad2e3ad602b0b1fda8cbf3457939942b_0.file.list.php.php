<?php
/* Smarty version 3.1.30, created on 2018-04-27 15:53:35
  from "C:\wamp64\www\App\Admin\View\Addgenerate\list.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2d6ff77c565_30749925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f31b2caad2e3ad602b0b1fda8cbf3457939942b' => 
    array (
      0 => 'C:\\wamp64\\www\\App\\Admin\\View\\Addgenerate\\list.php',
      1 => 1524732681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2d6ff77c565_30749925 (Smarty_Internal_Template $_smarty_tpl) {
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
		.table {
		    /*width: 85%;*/
		}
	</style>
  </head>
  <body>
    
    <table class="table table-striped">
	    <thead>
	    <tr>
	        <th>学生姓名</th>
	        <th>学生班级</th>
	        <th>开始日期</th>
	        <th>结束日期</th>
	        <th>操作</th>
	    </tr>
	    </thead>
	    <tbody>
	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['stu_class'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['start_date'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['end_date'];?>
</td>
			<td><a href="index.php?p=admin&c=Addgenerate&a=obtain&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改信息</a></td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    </tbody>
	</table>


    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <?php echo '<script'; ?>
 src="Public/js/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <?php echo '<script'; ?>
 src="Public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
  </body>
</html>
<?php }
}
