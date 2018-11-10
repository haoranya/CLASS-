<?php 

	namespace Admin\Controller;

	use \Core\AdminController;

	class StateController extends AdminController{
		
		function stateRepost(){

		
			$stateModel = new \Model\StateModel;
			// 状态表
			$arr = $stateModel->findAll();

			$studentModel = new \Model\StudentModel;
			// 学生表查询信息
			$stu = $studentModel->findRowStuid($arr[0]['stu_id']);

			
			
			$this->display("generate.php");

		}


	}





 ?>