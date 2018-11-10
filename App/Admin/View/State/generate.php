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
	</style>
  </head>
  <body>
    
    <div class="row">

	  <div class="col-md-2"></div>
	  <div class="col-md-8">

	  	<form action="index.php?p=admin&c=Addgenerate&a=produce" method="post">
			<div class="state">

				<h3>状态报告生成</h3>
				
				<select name="" id="">
					<option value="">班级选择</option>
				</select>

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
    <script src="Public/js/jquery-1.12.4.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="Public/js/bootstrap.min.js"></script>
    <script src="Public/layui/layui.js"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script>
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
    </script>
    
  </body>
</html>