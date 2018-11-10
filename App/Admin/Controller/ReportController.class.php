<?php 

	namespace Admin\Controller;
	use \Core\AdminController;

	class reportController extends AdminController{


		function reportTable(){
			global $config;
			$reportModel = new \Model\ReportModel;
			$pagetotal = count($reportModel->getRepAll());

			$pageSize = $config['pageSize']['home_pagesize'];
			$pagearr = \Page::makepage($pagetotal,$pageSize);

			$arr  = $reportModel->getreplimit($pagearr['limit']);
			$get = $_GET['a'];


			// var_dump($arr);
			$this->assign("dataArr",$arr);
			$this->assign("pageStr",$pagearr['pageStr']);
			$this->assign("type",$get);
			$this->display("report.html");  

		}

		function reportTable_o(){
			global $config;
			$reportModel = new \Model\ReportModel;
			$pagetotal = count($reportModel->getRepAll_o());

			$pageSize = $config['pageSize']['home_pagesize'];
			$pagearr = \Page::makepage($pagetotal,$pageSize);

			$arr  = $reportModel->getreplimit_o($pagearr['limit']);
			$get = $_GET['a'];

			// var_dump($arr);
			$this->assign("dataArr",$arr);
			$this->assign("pageStr",$pagearr['pageStr']);
			$this->assign("type",$get);

			$this->display("report.html");  
		}

		function reportTable_t(){
			global $config;
			$reportModel = new \Model\ReportModel;
			$pagetotal = count($reportModel->getRepAll_t());

			$pageSize = $config['pageSize']['home_pagesize'];
			$pagearr = \Page::makepage($pagetotal,$pageSize);

			$arr  = $reportModel->getreplimit_t($pagearr['limit']);
			$get = $_GET['a'];

			// var_dump($arr);
			$this->assign("dataArr",$arr);
			$this->assign("pageStr",$pagearr['pageStr']);
			$this->assign("type",$get);

			$this->display("report.html");  
		}



		function retAll() {

			if(!isset($_GET['id'])) exit;

			$id = $_GET['id'];

			$type= $_GET['type'];



			$retAll = new \Model\ReportModel;

			if($type == "reportTable"){

				// var_dump($type);
				$retGall = $retAll->GrtAll($id);	

			}else if($type == "reportTable_o"){

				// var_dump($type);
				$retGall = $retAll->GrtAll_o($id);
					// var_dump($retGall);
			}else if($type == "reportTable_t"){

				// var_dump($type);
				$retGall = $retAll->GrtAll_t($id);
			}
			 
			$this->assign("retGall",$retGall[0]);
			$this->display("report_content.html");

		}



		function retAll_o() {

			if(!isset($_GET['id'])) exit;

			$id = $_GET['id'];

			$retAll = new \Model\ReportModel;

			$retGall = $retAll->GrtAll_o($id);
			 
			$this->assign("retGall",$retGall[0]);
			$this->display("report_content.html");

		}
		function retAll_t() {

			if(!isset($_GET['id'])) exit;

			$id = $_GET['id'];

			$retAll = new \Model\ReportModel;

			$retGall = $retAll->GrtAll($id);
			 
			$this->assign("retGall",$retGall[0]);
			$this->display("report_content.html");

		}

		function doAdd(){
			$data[':id'] = $_GET['id'];
			$data[':gz_title'] = $_POST['gz_title'];
			$data[':gz_gongsi'] = $_POST['gz_gongsi'];
			$data[':gz_start_time'] = $_POST['gz_start_time'];
			$data[':gz_end_time'] = $_POST['gz_end_time'];
			$data[':gz_content'] = $_POST['gz_content'];
			$data[':gz_pingfen'] = $_POST['gz_pingfen'];
			// var_dump($data);
			$doadd = new \Model\ReportModel;

			// $doaddRep = $doadd->doAdd($data);
			if ($doadd->doAdd($data)) {
				$this->success("Admin","Classtype","getAllTypes","类别添加成功！",1);
				
			}else {
				echo "321";
			}
		}
			

		function deleteType(){

			if(!isset($_GET['id'])) exit;
		
			$id = $_GET['id'];
	
			$repDelete = new \Model\ReportModel;
			
		
			if($repDelete->delete($id)){
			
				$this->success("Admin","Report","reportTable","类别添加成功！",1);
				

			}else{

				echo "321";
			}
			

		}




	}






 ?>