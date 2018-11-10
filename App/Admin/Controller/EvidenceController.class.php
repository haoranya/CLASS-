<?php 

	namespace Admin\Controller;
	//AdminController  在Core文件夹下，并且命名空间 Core
	use \Core\AdminController;

	class EvidenceController extends AdminController{
		/*
		 *  getAllTypes() 方法
		 *  主要的作用查询所有的分类
		 */
		function doEvidence(){

			$data[':type']=$_POST['type'];
			$data[':stu_name']=$_POST['stu_name'];
			$data[':tea_name']=$_POST['tea_name'];
			$data[':stu_class']=$_POST['stu_class'];
			$file=$_FILES['wj_img'];
			$data[':today_date']=$_POST['today_date'];

			if($file['error']==0){

			   $ext = pathinfo($file['tmp_name'],PATHINFO_EXTENSION);

			   $type=['jpg','png','tmp','jpeg'];

			   if(in_array($ext,$type)){

			   		$dir = 'Upload/'.CONTROLLER."/".CONTROLLER.'images';

			   		if(!is_dir($dir)){

			   			mkdir($dir,0777,true);

			   		}

			   		 $dir = $dir.'/'.uniqid().'_'.$file['name'];
			   	
			   		if(move_uploaded_file($file['tmp_name'], $dir)){

			   				$data[':img_url']=$dir;

							   			//1）调用模型查询数据
							$evidenceModel = new \Model\EvidenceModel;
							//2）把查询的数据分配到模板中
							$num = $evidenceModel->insert_evidence($data);

							if($num!=false){

								$this->success('Admin','EvidencePage','evidenceDate','记录成功');

							}else{

								$this->error('Admin','EvidencePage','evidenceDate','记录失败');

							}

			   		}

			   }else{

			   		echo '文件不是图片';

			   }

			}


			

		
			
			 
		}


	}





 ?>