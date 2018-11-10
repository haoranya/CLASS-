<?php 

	namespace Home\Controller;
	use \Core\HomeController;

	class ReportController extends HomeController{

		function doList(){

			$this->display("Report.html"); 

		}
		function doInsert(){
			$data[':title'] = $_POST['title'];
			$data[':gongsi'] = $_POST['gongsi'];
			$data[':date'] = time($_POST['date']);
			$data[':state_time'] = time($_POST['state_time']);
			$data[':end_time'] = time($_POST['end_time']);
			$data[':content'] = $_POST['content'];
			$data[':gz_name'] = $_SESSION['name'];
			
			$id = isset($_POST['id']) ?$_POST['id'] :1;

			$reportModel = new \Model\ReportModel;
			
			if($reportModel->getInsert($id,$data)){

				$this->success("home","report","doList","报告成功成功！",1);
				
			}else{
				$err = \Core\Dao::$error;
				echo $err;
			}
			
			$this->display("Report.html"); 
		}

	}





 ?>