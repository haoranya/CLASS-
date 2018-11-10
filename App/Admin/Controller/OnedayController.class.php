<?php 

	namespace Home\Controller;
	use \Core\HomeController;

	class OnedayController extends HomeController{
	
		function doList(){
			$this->display("Oneday.html");
		}
	

		function doInsert(){
			$data[':title'] = $_POST['title'];
			$data[':gongsi'] = $_POST['gongsi'];
			$data[':date'] = time($_POST['date']);
			$data[':state_time'] = time($_POST['state_time']);
			$data[':end_time'] = time($_POST['end_time']);
			$data[':content'] = $_POST['content'];
			// var_dump($data);
	
			$id = isset($_POST['id']) ?$_POST['id'] :1;
			$reportModel = new \Model\ReportModel;
			if($reportModel->getInsert1($id,$data)){
				echo "111";
			}else{
				$err = \Core\Dao::$error;
				echo $err;
			}
			 
			$this->display("Oneday.html");       
			// 开始  结束 标题  
		}


	}





 ?>