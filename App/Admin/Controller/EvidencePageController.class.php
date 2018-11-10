<?php 

	namespace Admin\Controller;
	use \Core\AdminController;

	class EvidencePageController extends AdminController{

		function evidenceDate(){

			global $config;

			$k = isset($_GET['k'])?$_GET['k']:'';

			$likestr = '';

			if($k!=''){

				$likestr = " and stu_name like '%$k%' or tea_name like '%$k%' or stu_class like '%$k%'";

			}

			$pagesize = $config['pageSize']['home_pagesize'];

			$evidence = new \Model\EvidenceModel;

			$evidence_total = count($evidence ->selectAllEvidence($likestr));

			$pagearr = \page::makePage($evidence_total,$pagesize);

			$evidenceArr = $evidence->selectEvidence($pagearr['limit'],$likestr);

			$this->assign('evidenceArr',$evidenceArr);

			$this->assign('pagestr',$pagearr['pageStr']);

			$this->display('list.html');

		}

		function evidencePage(){

			$this->display('evidence.html');
			
		}

		function evidenceDelect(){

			$id = $_GET['id'];

			$evidence = new \Model\EvidenceModel;

			$num = $evidence->delect_evident($id);

			if($num!=false){

				$this->success('Admin','EvidencePage','evidenceDate','删除成功');

			}else{

				$this->error('Admin','EvidencePage','evidenceDate','删除失败');

			}


		}

		function evidenceSee(){

			$id = $_GET['id'];

			$evidence = new \Model\EvidenceModel;

			$dateById = $evidence->select_evidence($id);

			$this->assign('dateById',$dateById);

			$this->display('evidence_update.html');

		}

		function evidenceUpdate(){
			$data['id']=$_GET['id'];
			$data[':type']=$_POST['type'];
			$data[':stu_name']=$_POST['stu_name'];
			$data[':tea_name']=$_POST['tea_name'];
			$data[':stu_class']=$_POST['stu_class'];
			$data['img_url']=$_POST['old_img'];

			var_dump($data['img_url']);

			$data[':today_date']=$_POST['today_date'];

			$file = isset($_FILES['wj_img'])?$_FILES['wj_img']:1;

			if($file!=1){

				var_dump($file);

			   if($file['error']==0){

			   $ext = pathinfo($file['tmp_name'],PATHINFO_EXTENSION);

			   $type=['jpg','png','tmp','jpeg'];

			   if(in_array($ext,$type)){

			   		$dir = 'Upload'.CONTROLLER."/".CONTROLLER.'images';

			   		if(!is_dir($dir)){

			   			mkdir($dir,0777,true);

			   		}
			   	
			   		 $dir = $dir.'/'.uniqid().'_'.$file['name'];
			   	
			   		if(move_uploaded_file($file['tmp_name'], $dir)){

			   				$data[':img_url']=$dir;
							
			   		}

			   }else{

			   		echo '文件不是图片';

			   }

			}


			}else{

				var_dump('未上传图片');

			}


			                $evidenceModel = new \Model\EvidenceModel;
							
							$num = $evidenceModel->update_evident($data);

							if($num!=false){
							

								$this->success('Admin','EvidencePage','evidenceDate','记录成功');

							}else{
                              
								$this->error('Admin','EvidencePage','evidenceDate','记录失败');

							}


			



		}

		
			
	}








 ?>