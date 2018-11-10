<?php 

	namespace Home\Controller;
	//HomeController  在Core文件夹下，并且命名空间 Core
	use \Core\HomeController;

	class MonthController extends HomeController{
		/*
		 *  getAllTypes() 方法
		 *  主要的作用查询所有的分类
		 */
		function doList(){
			
			$this->display("Month.html"); 
		}






	
		function doInsert2(){
			$data[':title'] = $_POST['title'];
			$data[':gongsi'] = $_POST['gongsi'];
			$data[':date'] = time($_POST['date']);
			$data[':state_time'] = time($_POST['state_time']);
			$data[':end_time'] = time($_POST['end_time']);
			$data[':content'] = $_POST['content'];
	
			$id = isset($_POST['id']) ?$_POST['id'] :1;
			$reportModel = new \Model\ReportModel;
			if($reportModel->getInsert2($id,$data)){
				// echo "111";
			}else{
				$err = \Core\Dao::$error;
				echo $err;
			}
			
			$this->display("Month.html"); 
		}




	}





 ?>