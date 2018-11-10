<?php 

	namespace Admin\Controller;
	//AdminController  在Core文件夹下，并且命名空间 Core
	use \Core\AdminController;

	class LeaveController extends AdminController{
		/*
		 *  getAllTypes() 方法
		 *  主要的作用查询所有的分类
		 */
		function doList(){
			$teacherModel = new \Model\TeacherModel;
			// var_dump($_SESSION);
			//接收要搜索的关键字
			$k = isset($_GET['k']) ? $_GET['k'] : "" ;
			$a = $teacherModel->findRowById($_SESSION['userid']);
			// var_dump($a);
			$_SESSION['class'] = $a['class'];
			//1）调用模型查询数据
			$filmModel = new \Model\FilmModel;
			//2）把查询的数据分配到模板中
			$arr = $filmModel->pageList($k);

			$leaveModel = new \Model\LeaveModel;
			$findAll = $leaveModel->findAll($_SESSION['class']);
			// var_dump($findAll);
			
			$teacher = $teacherModel->findRowByCandI($_SESSION['userid'],$_SESSION['class']);
			// var_dump($_SESSION);	
			// var_dump($teacher);	
			//3）display 显示指定的模板
			$this->assign("teacher",$teacher);
			$this->assign("dataArr",$arr);
			$this->assign("findAll",$findAll);
			$this->display("list.html");   
		}


		function details(){
			if(!isset($_GET['id'])) exit;
			//接收参数 id
			$id = $_GET['id'];
			$leaveModel = new \Model\LeaveModel;
			$rules = $leaveModel->findRowById($id);
			$teacherModel = new \Model\TeacherModel;
			$teacher = $teacherModel->findRowByClass($rules['stu_class']);
			// var_dump($rules,$teacher);
			$this->assign("rules",$rules);
			$this->assign("teacher",$teacher);
			$this->display("edit.html");
		}

		function agree(){
			if(!isset($_GET['id'])) exit;
			//接收参数 id
			$data['id'] = $_GET['id'];
			$leaveModel = new \Model\LeaveModel;
			if($leaveModel->agree($data)){
				// echo "成功";
				
				$arr = $leaveModel->findRowById($data['id']);
				if($arr['a_number']==$arr['flow']){

					if($leaveModel->OK($data['id'])){
						echo "1111";
					}else{
						echo "222";
					}
					
				}
				$this->success("Admin","leave","doList","批准成功！",1);
			}else{
				echo "失败";
			}
		}

		function disagree(){
			if(!isset($_GET['id'])) exit;
			//接收参数 id
			$data['id'] = $_GET['id'];
			
			$this->assign("id",$data['id']);
			$this->display("disAgree.html");
		}

		function reject(){
			if(!isset($_GET['id'])) exit;
			//接收参数 id
			$leaveModel = new \Model\LeaveModel;
			$data[':content'] = $_POST['content'];
			// var_dump($_SESSION);
			$teacherModel = new \Model\TeacherModel;
			$arr = $teacherModel->findNameByCandI($_SESSION['userid'],$_SESSION['class']);
			$data[':name'] = $arr['name'];
			$data[':id'] = $_GET['id'];
			// var_dump($name);
			if($leaveModel->Reject($data)){
				echo "驳回成功";
			}else{
				echo "失败";
			}
			
		}


	}





 ?>