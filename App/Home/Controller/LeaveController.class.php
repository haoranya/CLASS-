<?php 

	namespace Home\Controller;
	//HomeController  在Core文件夹下，并且命名空间 Core
	use \Core\HomeController;

	class LeaveController extends HomeController{
		/*
		 *  getAllTypes() 方法
		 *  主要的作用查询所有的分类
		 */
		function doList(){
			// var_dump($_SESSION);
			$StudentModel = new \Model\StudentModel;

			$rules = $StudentModel->findRowById($_SESSION['userid']);
			$teacherModel = new \Model\TeacherModel;
			$name = $teacherModel->findTeacherName($rules['class']);
			// var_dump($rules);
			// var_dump($name);
			$time = date("Y-m-d");
			$ltime = date("Y-m-d",strtotime("next month"));
			// var_dump($ltime);
			
			$this->assign("nowTime",$time);
			$this->assign("lastTime",$ltime);
			$this->assign("rules",$rules);
			$this->assign("tname",$name);
			$this->display("Leave.html");
		}

		function tijiao(){
			$day = null;
			$data[':stu_name'] = $_POST['stu_name'];
			$data[':stu_class'] = $_POST['stu_class'];
			$data[':stu_phone'] = $_POST['stu_phone'];
			$data[':stu_e_phone'] = $_POST['stu_e_phone'];
			$data[':leave_type'] = $_POST['reason'];
			$data[':content'] = $_POST['content'];
			$data[':leave_time'] = strtotime($_POST['leave_time']);
			$data[':back_time'] = strtotime($_POST['back_time']);
			$data[':leave_days'] = self::days($data[':back_time'],$data[':leave_time']);
			// var_dump($data[':leave_days']);
			// die;
			if(strpos($data[':leave_days'],"天")){
				$num = stripos($data[':leave_days'],"天");
				$num1 = stripos($data[':leave_days'],"小时");
				$day = substr($data[':leave_days'], 0 , $num);
				$time = substr($data[':leave_days'], $num+3 , $num1-4);
				$day.= ".{$time}";
				// var_dump($data[':leave_days'],$day);
			}else{
				$data[':flow'] = 1;
			}
			if($day>1&&$day<=3){
				// echo "7777";
				$data[':flow'] = 3;
			}
			var_dump($data);
			// die;
			$leaveModel = new \Model\LeaveModel;
			if($leaveModel->initcon($data)){
				echo "<script>alert('申请表提交成功')</script>";
				echo "<script>window.location.href='index.php?p=home&c=leave&a=viewDetails';</script>";
			}else{
				$error = \Core\Dao::$error;
				var_dump($error);
			}
		}

		static function days($back,$leave){
			 	$time = $back-$leave;
				$d = floor($time / (3600*24));
				$h = floor(($time % (3600*24)) / 3600);
				$m = floor((($time % (3600*24)) % 3600) / 60);
				if($d>0){
				    return $days = $d.'天'.$h.'小时'.$m.'分';
				}else{
				    if($h!=0){
				     	return $hover = $h.'小时'.$m.'分';
				    }else{
				        return $m = $m.'分';
				    }
				}
		}

		function result(){
			$this->display("Result.html");
		}



		/**
		 * 根级id查询一条影片的信息
		 */
		
		function findFilmById(){

			//判断id是否存在
			if(!isset($_GET['id'])) {
				$this->error("home","index","index","参数错误!");
			}

			//接收id
			$id = $_GET['id'];

			//根据影片的id查询影片信息
			$filmModel = new \Model\FilmModel;
			$film = $filmModel -> findRowById($id);

			// var_dump($film);
			// 把查询的结果分配到模板页中
			$this->assign("film",$film);
			$this->display("content.html");

		}

		
		function viewDetails(){
			// if(!isset($_GET['id'])) exit;
			// $id = 1;
			$StudentModel = new \Model\StudentModel;
			$ziji = $StudentModel->findRowById($_SESSION['userid']);
			$leaveModel = new \Model\LeaveModel;
			$rules = $leaveModel->findSelf($ziji['name'],$ziji['class']);
			// var_dump($rules);
			$this->assign("rules",$rules);
			$this->display("list.html");
		}

		function See(){
			if(!isset($_GET['id'])) exit;
			$data['id'] = $_GET['id'];
			$leaveModel = new \Model\LeaveModel;
			$result = $leaveModel->Result($data);
			// var_dump($data['id']);
			$content = $leaveModel->Content($data['id']);
			// var_dump($content);
			$this->assign("content",$content);
			$this->assign("result",$result);
			$this->display("edit.html");
		}



	}





 ?>