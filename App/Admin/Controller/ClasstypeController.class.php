<?php 

	namespace Admin\Controller;

	use \Core\AdminController;

	class ClasstypeController extends AdminController{
		
		function getAllTypes(){

		
			$classtypeModel = new \Model\ClasstypeModel;
		
			$arr = $classtypeModel->findAll();


	
			for($i=0;$i<count($arr);$i++){

			
				$a1 = explode("-",$arr[$i]['path']);               
				$len = count($a1);            
			
				$str = "";
				for($j=1;$j<$len;$j++){
					$str .="--";
				}

				
				$arr[$i]['name'] = $str."|".$arr[$i]['name'];
			}


			$this->assign("dataArr",$arr);
			$this->display("list.html");    
		}



		
		function addType() {

			
			$classtypeModel = new \Model\ClasstypeModel;
	
			$arr = $classtypeModel->findAll();


			
			for($i=0;$i<count($arr);$i++){

				$a1 = explode("-",$arr[$i]['path']);               
				$len = count($a1);                   
				
				$str = "";
				for($j=1;$j<$len;$j++){
					$str .="--";
				}

				
				$arr[$i]['name'] = $str."|".$arr[$i]['name'];
			}

			$this->assign("dataArr",$arr);
			
			$this->display("add.html");    
		}

		
		function add(){


		
			$type = $_POST['type'];             
		
			if($type=='0'){

				$data[':pid'] = 0;
				$data[':path'] = 0;
			}else {

				
				$arr = explode("#",$type);
				$data[':pid'] = $arr[0];
				$data[':path'] = $arr[1]."-".$arr[0];   
			}
			
			$data[':tname'] = $_POST['typename'];
		
			
			$classtypeModel = new \Model\ClasstypeModel;
		
			if($classtypeModel->addInfo($data)){

				
				$this->success("Admin","Classtype","getAllTypes","类别{$data[':tname']}添加成功！",1);

			}else{

				$this->error("Admin","Classtype","addType","类别{$data[':tname']}添加失败！",3);
			}
			
		}


		
		function deleteType(){

			if(!isset($_GET['id'])) exit;
		
			$id = $_GET['id'];
		
			$classtypeModel = new \Model\ClasstypeModel;
			
		
			if($classtypeModel->delete($id)){
			
				$this->success("Admin","Classtype","getAllTypes","删除成功！",1);

			}else{

				$this->error("Admin","Classtype","getAllTypes","删除失败！",3);
			}
			


		}






	}





 ?>