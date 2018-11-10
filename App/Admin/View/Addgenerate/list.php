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
	    <{foreach from=$stateArr item=$v}>
		<tr>
			<td><{$v.name}></td>
			<td><{$v.stu_class}></td>
			<td><{$v.start_date}></td>
			<td><{$v.end_date}></td>
			<td><a href="index.php?p=admin&c=Addgenerate&a=obtain&id=<{$v.id}>">修改信息</a></td>
		</tr>
		<{/foreach}>
	    </tbody>
	</table>


    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="Public/js/jquery-1.12.4.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="Public/js/bootstrap.min.js"></script>
    
  </body>
</html>
