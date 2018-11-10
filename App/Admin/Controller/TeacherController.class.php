<?php 

	namespace Admin\Controller;
	
	use \Core\AdminController;

	class TeacherController extends AdminController{
		
		function doList(){

			
			$k = isset($_GET['k']) ? $_GET['k'] : "" ;

			$teacherModel = new \Model\TeacherModel;
		
			$data = $teacherModel->findAll();

			$this->assign("dataArr",$data);
			$this->display("list.html");   
		}


		
		function doAddBefore() {
			$classType = new \Model\ClasstypeModel;
			
			$arr = $classType->findAll();
			
			$this->assign("dataArr",$arr);
			
			$this->display("add.html");  
		}

		function doAdd(){

			$data[':login_name'] = $_POST['login_name'];
			$data[':pwd'] = md5($_POST['pwd']);
			$data[':name'] = $_POST['uname'];
			$data[':class'] = $_POST['class_type'];
					
			$teacherModel = new \Model\TeacherModel;
	
			if($teacherModel->addInfo($data)){
				$this->success("Admin","teacher","doList","类别{$data[':name']}添加成功！",1);

			}else{
				var_dump($data);
				$err = \Core\Dao::$error;
				$this->error("Admin","teacher","doAddBefore","类别{$data[':name']}添加失败！{$err}",3);
			}
			
		}


	
		function doUpdateBefore() {
			$classtypeModel = new \Model\ClasstypeModel;
			
			$classType = $classtypeModel->findAll();

			if(!isset($_GET['id'])) exit;
			$id = $_GET['id'];

			$teacherModel = new \Model\TeacherModel;
		
			$arr = $teacherModel->findRowById($id);

			$this->assign("dataArr",$arr);
			$this->assign("classArr",$classType);
			$this->display("edit.html");   
		} 

	
		function doUpdate(){
			
			$data[':login_name'] = $_POST['login_name'];
			$data[':pwd'] = $_POST['pwd'];
			$data[':name'] = $_POST['uname'];
			$data[':class'] = $_POST['class_type'];
			$data[":id"] = $_GET['id'];

			$teacherModel = new \Model\TeacherModel;
			if($teacherModel->updateInfo($data)){
		
				$this->success("Admin","teacher","doList","规则{$data[':name']}保存成功！",1);

			}else{
		
				$error = \Core\Dao::$error;
				$this->error("Admin","teacher","doList","规则{$data[':name']}保存失败！<br>{$error}",3);
			}
		}

		function deleteType(){

			if(!isset($_GET['id'])) exit;
			$id = $_GET['id'];
			$teacherModel = new \Model\TeacherModel;
			if($teacherModel->delete($id)){
				$this->success("Admin","Teacher","doList","删除成功！",1);

			}else{
				$this->error("Admin","Teacher","doList","删除失败！",3);
			}
		}
	}

 ?>