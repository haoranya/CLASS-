<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <!-- 设置网页的编码  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Public/layui/css/layui.css" media="all">
    <link href="Public/css/status_repost.css" rel="stylesheet">
  </head>
  <body>
    <form action="" class="form-horizontal">
      
      <!--表单 元素组 -->
     <!--  <div class="form-group"> -->
        <!-- form-control 作用是：让文本框以100%宽度显示，编程圆角的文本框 -->
        <!-- 让label的文字和 文本框对齐
             control-label   上下居中，右对齐
         -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-2"></div>
          <div class="col-xs-8 content">

            <img src="Public/images/webwxgetmsgimg.jpg" class="logo" alt="">
            <h1 class="h_title" id="button">大学生阶段报告</h1>

            <p class="p_1 p_one">起止日期：
              <div class="layui-inline">
                <label class="layui-form-label"></label>
                <div class="layui-input-inline">
                    <input type="text" name="leave_date" id="date" lay-verify="date" placeholder="" autocomplete="off" class="layui-input">
                </div>
            </div>
            <span>--</span>
             <div class="layui-inline">
                <label class="layui-form-label"></label>
                <div class="layui-input-block">
                    <input type="text" name="back_date" id="date1" lay-verify="date" autocomplete="off" class="layui-input">
                </div>
            </div>
          </p>

            <p class="p_2 p_two"><{$stu.name}></p>
            <p class="p_3 p_two"><b>本阶段综合评价:</b></p>
            
            <div class="div_one">
            <p class="p_2 p_three">一、本阶段数据汇总</p>
              <table class="table-bordered table_left">
                <tr>
                  <td>作业总分</td>
                  <td>出勤情况</td>
                  <td>上课状态</td>
                  <td>活跃度</td>
                  <td>身体状况</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>

            <div class="div_two">
            <p class="p_2 p_four">二、每日数据&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            
            <p class="p_title_one">1.作业评分（此数据来源于助理讲师每日批改作业的成绩）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            
            
              <table class="table-bordered table_left">
                <tr>
                  <td>日期</td>
                  <td>分数</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>

                
              </table>
              <p class="p_title_one">【标准：作业天数：8天 每天作业满分：100分 8天作业合计总分：800分】【备注：当前该同学8天作业的总分数是646分，8天作业的满分是800分，那么所得分数所占的比例为：646/800 *100% =80.75%】</p>
              <p class="p_title_one">2.出勤情况（此数据来源于辅导员老师和助理讲师每日记录的学生出勤数据）</p>
              <table class="table-bordered table_left">
                <tr>
                  <td>日期</td>
                  <td>出勤情况</td> 
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                
              </table>

            </div>

          </div>
          <div class="col-xs-2"></div>
        </div>
      </div>

      <input type="submit" value="我要提交" class="btn btn-success" >


    </form>

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
        });

      // $(function(){
      //   var date = $("#date").val();
      //   var date1 = $("#date1").val();

      //   if(date!=""&&date1!=""){

      //     $.post("../../Controller/StateController.class.php",{"date":date,"date1":date1},function(data){

      //       alert(typeof(data));

      //       if(data*1){
      //         console.log("数据已获取到");
      //       }else{
      //         console.log("数据未获取到");
      //       }
      //     });

      //   }

      //   alert(date);
      //   alert(date2);


      // });
    </script>
    
  </body>
</html>
