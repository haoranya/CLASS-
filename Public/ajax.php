<?php 

		$arr = array(
               array('10谢宇伟','10庞若男','10郭嘉','10王刚','10宋佳绘','10苏品生'),
               array('11王存烨','11王芳','11王帅','11李浩淇','11杨浩然','11李立权'),
               array('12刘国英','12李子龙','12谢福泰','12谌相宇','12许若尘','12袁锦超'),
               array('13连梓豪','13刘萌森','13冯玥敏','13洪林标','13刘浩哲','13刘珍秀'),
               array('14唐椿崴','14刘佳怡','14侯阿康','14孙威','14黄文希','14杨永强'),
               array('15乔昱涵','15张亚泽','15芦奕铭','15匡苏薇','15冉江华','15王一凡'),
               array('16高赞','16罗芳','16王金梁','16罗文凯','16杨卓','16瞿灿'),
               array('17任广发','17彭文双','17怀闯','17张晓旭','17王景笑'),
               array('18陈逸涵','18王震','18徐嘉琪','18贾庆林','18林孜俊','18尹睿'),
               array('19胡亚鹏','19刘悦','19刘彦伯','19刘玉飞','19邓琦峰','19范晋清'),
               array('20齐福伦','20石学文','20郑宇楠','20曹晓波','20杨雪莹'),
              ); 

        
          shuffle($arr);

          for($i=0;$i<count($arr);$i++){

              shuffle($arr[$i]);

          }


          $newarr = array_merge($arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],$arr[7],$arr[8],$arr[9],$arr[10]);

          $stu_name = json_encode($newarr);

          echo $stu_name;

        




 ?>