<?php 

		namespace Admin\Controller;

		use \Core\AdminController;

		class PunchcardController extends AdminController{

			function main_page(){


				$this->display('timePunchcard.html');

			}

			function two_qrcode(){	

				 $time_type = $_GET['time'];

			     $id = isset($_SESSION['id'])?$_SESSION['id']:1;

			     $nowtime = time();
			    
				 $this->assign('id',$id);

				 $this->assign('time_type',$time_type);

				 $this->assign('nowtime',$nowtime);

				 $this->display('Punchcard.html');

			}

			function check(){

				 $date = $_GET['date'];

				 $punchcardTableModel = new \Model\PunchcardTableModel;

				 $lastdate = $punchcardTableModel->getLastDate();

				 $time = $lastdate['time'];

				 if($time==$nowtime){

				 	$this->two_qrcode();

				 }else{

				 	echo "没有一样的时间戳";

				 }

			}

			function punchcard_insert(){

				$data[':time']=date("Y-m-d h:i:s");

				$nowtime = strtotime($data[':time']);

				$info = $_GET['info'];

				$infoarr = explode('ID', $info);

				$data[':nowtime']=$infoarr[0];

				$tea_id = $infoarr[1];

				$time_type = $infoarr[2];

				if($time_type=='morning'){

					$data[':type']='早上';

					$time = strtotime(date('Y-m-d 08:50:00'));

						if($nowtime>$time){

							$a = ($nowtime-$time);

							$h = round(($a/3600),2);
					      
							if($h<1){
							
							  $m = round(($a/60),2);

							  $data[':state']='迟到了'.$m."分钟";
					      
					        }else{

					          $data[':state']='迟到了'.$h."小时";

					        }

				        }else{

						    $a = ($time-$nowtime);

							$h = round(($a/3600),2);
					      
							if($h<1){
							
							  $m = round(($a/60),2);

							  $data[':state']='提前了'.$m."分钟";
					      
					        }else{

					          $data[':state']='提前了'.$h."小时";

					        }

					}

				}else if($time_type=='afternoon'){

					$data[':type']='午后';

					$time = strtotime(date('Y-m-d 02:10:00'));

					if($nowtime>$time){

							$a = ($nowtime-$time);

							$h =round(($a/3600),2);
					      
							if($h<1){
							
							  $m = round(($a/60),2);

							  $data[':state']='迟到了'.$m."分钟";
					      
					        }else{

					          $data[':state']='迟到了'.$h."小时";

					        }

				         }else{

						    $a = ($time-$nowtime);

							$h = round(($a/3600),2);
					      
							if($h<1){
							
							  $m = round(($a/60),2);

							  $data[':state']='提前了'.$m."分钟";
					      
					        }else{

					          $data[':state']='提前了'.$h."小时";

					        }

					}

				}else{

					$data[':type']='晚上';

					$time = strtotime(date('Y-m-d 07:50:00'));

					if($nowtime>$time){

							$a = ($nowtime-$time);

							$h =round(($a/3600),2);
					      
							if($h<1){
							
							  $m = round(($a/60),2);

							  $data[':state']='迟到了'.$m."分钟";
					      
					        }else{

					          $data[':state']='迟到了'.$h."小时";

					        }

				     }else{

						    $a = ($time-$nowtime);

							$h = round(($a/3600),2);
					      
							if($h<1){
							
							  $m = round(($a/60),2);

							  $data[':state']='提前了'.$m."分钟";
					      
					        }else{

					          $data[':state']='提前了'.$h."小时";

					        }

					}

				}

				$punchcardModel = new \Model\PunchcardTeacherModel;

				$tea_arr = $studentDate = $punchcardModel->findAllById($tea_id);

				$data[':tea_name']=$tea_arr['name'];

				$data[':class']=$tea_arr['class'];

				$id = isset($_SESSION['id'])?$_SESSION['id']:1;

				$data[':id']=$id;

				$punchcardStudentModel = new \Model\PunchcardStudentModel;

				$punchcardTableModel = new \Model\PunchcardTableModel;

				$stu_arr = $punchcardStudentModel->findAllById($id);

				$data[':stu_name']=$stu_arr['name'];

				$num = $punchcardTableModel->insertPunchcard($data);

				var_dump($num);

				if($num){

					echo "打卡成功";

				}else{

					echo '打卡失败';

				}

			}


		}




 ?>