<?php
/* Smarty version 3.1.30, created on 2018-11-07 10:07:08
  from "C:\Users\Administrator\Desktop\try\cims1\App\Admin\View\Addgenerate\state.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be248cc04da33_32039535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0dbccf137ba695f5e213921d97becbb6d8443ca' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\try\\cims1\\App\\Admin\\View\\Addgenerate\\state.php',
      1 => 1524882259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be248cc04da33_32039535 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="Public/layui/css/layui.css" media="all">
    <link href="Public/css/status_repost.css" rel="stylesheet">
    <style>
      .td_one{
        width: 276px !important;
      }
      .td_two{
        width: 138px !important;
      }

    </style>
  </head>
  <body>
      
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
                    <input type="text" name="leave_date" id="date" lay-verify="date" placeholder="" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['staArr']->value['start_date'];?>
" disabled="disabled">
                </div>
            </div>
            <span>--</span>
             <div class="layui-inline">
                <label class="layui-form-label"></label>
                <div class="layui-input-block">
                    <input type="text" name="back_date" id="date1" lay-verify="date" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['staArr']->value['end_date'];?>
" disabled="disabled">
                </div>
            </div>
          </p>

            <p class="p_2 p_two" id="name2"><?php echo $_smarty_tpl->tpl_vars['staArr']->value['name'];?>
</p>
            <p class="p_3 p_two"><b>本阶段综合评价:★ ★ ★ ★ ★</b></p>
            
            <div class="div_one">
            <p class="p_2 p_three">一、本阶段数据汇总</p>
              <table class="table-bordered table_left table_conter" >
                <tr>
                  <td>作业总分</td>
                  <td>出勤情况</td>
                  <td>上课状态</td>
                  <td>活跃度</td>
                  <td>身体状况</td>
                </tr>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['huizong']->value['baifenbi'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['huizong']->value['kaoqin'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['huizong']->value['zhuangtai'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['huizong']->value['active'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['huizong']->value['shengbing'];?>
</td>
                </tr>
                <tr>
                  <td><button type="button" onclick="qqw(<?php echo $_smarty_tpl->tpl_vars['staArr']->value['id'];?>
,1)" class="btn btn-success" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">修改</button></td>
                  <td><button type="button" onclick="qqw(<?php echo $_smarty_tpl->tpl_vars['staArr']->value['id'];?>
,2)" class="btn btn-success" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">修改</button></td>
                  <td><button type="button" onclick="qqw(<?php echo $_smarty_tpl->tpl_vars['staArr']->value['id'];?>
,3)" class="btn btn-success" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">修改</button></td>
                  <td><button type="button" onclick="qqw(<?php echo $_smarty_tpl->tpl_vars['staArr']->value['id'];?>
,4)" class="btn btn-success" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">修改</button></td>
                  <td><button type="button" onclick="qqw(<?php echo $_smarty_tpl->tpl_vars['staArr']->value['id'];?>
,5)" class="btn btn-success" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">修改</button></td>
                </tr>
                <td><a href="">刷新页面</a></td>

              </table>
            </div>

            <div class="div_two">
            <p class="p_2 p_four">二、每日数据&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            
            <p class="p_title_one">1.作业评分（此数据来源于助理讲师每日批改作业的成绩）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            
              <table class="table-bordered table_left table_conter">
                <tr>
                  <td>日期</td>
                  <td>分数</td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['today_date'];?>
</td>
                  <td>线下作业</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    
                
              </table>
              <div class="spanx">
                <span>【标准：作业天数：8 天 每天作业满分：100 分 8 天作业合计总分：800 分】</span>
                <span>【备注：当前该同学 8 天作业的总分数是 646 分，8 天作业的满分是 800 分，那么所得分数所占的比例为：646/800 *100% =80.75%】</span>
                <span>2.出勤情况（此数据来源于辅导员老师和助理讲师每日记录的学生出勤数据）</span>
               
              </div>

              <table class="table-bordered table_left table_conter">
                <tr>
                  <td>日期</td>
                  <td colspan="2">出勤情况</td>
                  
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr>
                  <td rowspan="3"><?php echo $_smarty_tpl->tpl_vars['v']->value['today_date'];?>
</td>
                  <td>上午</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['forenoon_state'];?>
</td>
                  
                </tr>
                <tr>
                  <td>下午</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['afternoon_state'];?>
</td>
                  
                </tr>
                <tr>
                  <td>晚自习</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['evening_state'];?>
</td>
                  
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                
              </table>
              <div class="spanx">
                <span>【 备注：打“√”表示“学生出勤正常”】</span>
                <span>【学生“考勤不良”中包含：病假、事假、迟到、早退、旷课】</span>
                <span>【评价标准：</span>
                <span>考勤全勤：学生每天正常上课，无“病假”、“事假”、“迟到”、“早退”、“旷课”。</span>
                <span>考勤良好：学生请“病假” 1——2 次</span>
                <span>考勤较差：其它情况均为考勤较差 】</span>
                <span class="title_span">3.上课状态（此数据来源于辅导员老师每天对学生上课状态的观察）</span>
              </div>



               <table class="table-bordered table_left table_conter">
                <tr>
                  <td>日期</td>
                  <td>上课是否集中注意</td>
                  <td>屏幕是否与上课画面相符</td>
                  <td>上课上交手机分数</td>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['today_date'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['attention'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['study'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['hand_in_phone'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


              </table>
              <div class="spanx">
                <span>【评价标准：上课状态表格中填写的只有：“休息”、“是”、“否”三种评价。</span>
                <span>1. 上课状态优秀：当前阶段上课期间的上课状态选项中填写的均为“是”。</span>
                <span>2. 上课状态良好：当前阶段上课期间的上课状态选项中出现“否”的次数为 1——2 次。</span>
                <span>3. 上课状态较差：当前阶段上课期间的上课状态选项中出现“否”的次数多于 2 次。】</span>
                <span class="title_span">4.活跃度 (此数据来源于辅导员老师每天对学生参加活动、课堂上与老师互动的积极性、小组讨论的积极性的情况的记录)</span>
              </div>

              <table class="table-bordered table_left table_conter">
                <tr>
                  <td>日期</td>
                  <td>活跃度</td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['today_date'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['active'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


              </table>
              <div class="spanx">
                <span>【评价标准：</span>
                <span>A：积极</span>
                <span>B：一般</span>
                <span>C：不积极</span>
                <span>总评价中“积极”的评判标准：出现 A 的次数在（上课的天数/2）次或（上课的天数/2）次以上</span>
                <span>总评价中“一般”的评判标准：出现 B 的次数在（上课的天数/2）次或（上课的天数/2）次以上</span>
                <span>总评价中“不积极”的评判标准：出现 C 的次数在（上课的天数/2）次或（上课的天数/2）次以上</span>
                <span>备注：如果 A、B、C 出现的次数几乎一样，那么评级为“一般”。】</span>

                <span class="title_span">5.身体状况（此数据来源于辅导员老师每天对学生身体状况的观察）</span>
              </div>
              <table class="table-bordered table_left table_conter">
                <tr>
                  <td>日期</td>
                  <td>身体状况</td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['today_date'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['body_state'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


              </table>
              <div class="spanx">
                <span>【备注：</span>
                <span>● 填写“良好“：学生身体状况无异常</span>
                <span>● 填写“生病“：身体状况出现异常</span>
                <span>评价标准：</span>
                <span>如果表格中，“生病”出现的次数为上课总天数的四分之一或者更多，那么在“本阶
段数据汇总”的身体状况一栏中，要填写“生病”，辅导员老师会及时与家长沟通孩
子的身体状况，否则填写“良好”。】</span>

                <!-- <span class="title_span">6.辅导员老师评语：</span> -->
              </div>

            </div>

          </div>
          <div class="col-xs-2"></div>
        </div>
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
    <?php echo '</script'; ?>
>
      
      <!-- <button type="button"  class="btn btn-success btn-lg" data-toggle="modal" data-target="#haha">
        点我试试
      </button> -->

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" style="width:1070px ;" role="document">
        <div class="modal-content" style="height: 590px ;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">修改信息</h4>
          </div>
          <div class="modal-body">
            
              
              <div>
                <table class="table">
                  <thead id="thead">

                  </thead>
                  <tbody id="list_data">
                  
                  </tbody>
                </table>            
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
          </div>
        </div>
      </div>
    </div>


    <?php echo '<script'; ?>
>

      function qqw(id,t){
        $.ajax({

          url:"index.php?p=admin&c=Addgenerate&a=updata&id="+id+"&t="+t+"",
          type:'post',
          dataType:'json',
          data:{},

          success:function(data){

            $('#list_data').html("");
            $('#thead').html("");
            // $('#list_data').html(data);return;

            var leng = data.length;
            var name = $('#name2').html();
            console.log(data);

            if(t==1){
              str = "<tr>";
              str += "<td>学生姓名</td>";
              str += "<td>今日日期</td>";
              str += "<td>作业分数</td>";
              str += "</tr>";
              $('#thead').append(str);
            }else if(t==2){
              str = "<tr>";
              str += "<td>学生姓名</td>";
              str += "<td>今日日期</td>";
              str += "<td>上午出勤状态</td>";
              str += "<td>下午出勤状态</td>";
              str += "<td>晚自习出勤状态</td>";
              str += "</tr>";
              $('#thead').append(str);
            }else if(t==3){
              str = "<tr>";
              str += "<td>学生姓名</td>";
              str += "<td>今日日期</td>";
              str += "<td>上课是否集中注意</td>";
              str += "<td>窗口是否和老师一置</td>";
              str += "<td>手机是否上交</td>";
              str += "</tr>";
              $('#thead').append(str);
            }
            else if(t==4){
              str = "<tr>";
              str += "<td>学生姓名</td>";
              str += "<td>今日日期</td>";
              str += "<td>活跃度</td>";
              str += "</tr>";
              $('#thead').append(str);
            }
            else if(t==5){
              str = "<tr>";
              str += "<td>学生姓名</td>";
              str += "<td>今日日期</td>";
              str += "<td>身体状况</td>";
              str += "</tr>";
              $('#thead').append(str);
            }

            for (const key in data) {
              if (data.hasOwnProperty(key)) {
                const value = data[key];

                var str = "<tr>";
                str += "<td>"+name+"</td>";
                str += "<td>"+value.today_date+"</td>";
                if(t==1){

                  str += "<td>"+value.score+"</td>";
                }else if(t==2){

                  str += "<td>"+value.forenoon_state+"</td>";
                  str += "<td>"+value.afternoon_state+"</td>";
                  str += "<td>"+value.evening_state+"</td>";
                }
                else if(t==3){
                  str += "<td>"+value.attention+"</td>";
                  str += "<td>"+value.study+"</td>";
                  str += "<td>"+value.hand_in_phone+"</td>";
                }
                else if(t==4){
                  str += "<td>"+value.active+"</td>";
                }
                else if(t==5){
                  str += "<td>"+value.body_state+"</td>";
                }
                
                str += "</tr>";

                $('#list_data').append(str);

                console.log(value);
              }
            }

            

          },
           error:function(){
            
            alert("数据 OR 格式异常");
             
        }

        });
      }

    <?php echo '</script'; ?>
>
    <style>
      td{
        border: 1px solid #ccc; 
        text-align: center;
      }
    </style>



  </body>
</html>

<!-- <?php echo '<script'; ?>
>

$.ajax({
        
        url:"?email/Ajax_changeHeart",
        type:'get',
        dataType:'json',
        data:{id:id,is_top:state},
        success:function(data){
            // alert(data);
            // return;
            if(data*1==1){
                
                if($("#heart"+id).hasClass("fa-heart")){
                    $("#heart"+id).removeClass("fa-heart").addClass("fa-heart-o");
                }else if($("#heart"+id).hasClass("fa-heart-o"))
                    $("#heart"+id).removeClass("fa-heart-o").addClass("fa-heart"); 
                if(state==1)
                    $("#heart"+id).attr('data-state',0)
                else
                    $("#heart"+id).attr('data-state',1)
                
            }else
            {
                alert("失败");
            }

            str += data.name "span"+data.id;


            $("#aa").html();
                       
                
        },
        error:function(){
            
            alert("数据 OR 格式异常");
            
            
        }
    
        
    })

<?php echo '</script'; ?>
> --><?php }
}
