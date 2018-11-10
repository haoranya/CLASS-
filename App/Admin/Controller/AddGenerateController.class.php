<?php 

	namespace Admin\Controller;

	use \Core\AdminController;

	class AddGenerateController extends AdminController{

		// 班级
		function generate(){

			$classtypeModel = new \Model\ClasstypeModel;
			$typeArr = $classtypeModel->findAll();
			$arr = array();
			for($i=0;$i<count($typeArr);$i++){
				if(substr_count(($typeArr[$i]['path']), '-')>=2){
					$arr[] = $typeArr[$i]['path'];
				}
				continue;	
			}
			for($j=0;$j<count($arr);$j++){
				$classType[] = $classtypeModel->getType($arr[$j]);
			}


			$this->assign("className",$classType);
			$this->display("generate.php");
		}
		
		// 插入数据  显示列表
		function produce(){

			if(isset($_POST['flag'])){

				$date[':leave'] = $_POST['leave_date'];
				$date[':back'] = $_POST['back_date'];
				$date[':class_type'] = $_POST['class_type'];
				
				$d1=strtotime($date[':leave']);
				$d2=strtotime($date[':back']);

				$Days=round(($d2-$d1)/3600/24)+1;
				// var_dump($Days);
				
				for($i=0;$i<$Days;$i++){
					if($i==0){
						$d1=$d1;
						$dArr[] = date("Y-m-d",$d1);
					}else{
						$d1+=86400;
						$dArr[] = date("Y-m-d",$d1);
					}

				}
				
				$studentModel = new \Model\StudentModel;
				// 学生表数据
				$classArr = $studentModel->getClassType($date[':class_type']);

				// 往状态表里插入数据 
				
				$statelistModel = new \Model\StateListModel;
				$statelistModel->addInfo($classArr,$date);

				// 先往数据库里插入数据
				$stateModel = new \Model\StateModel;
				for($i=0;$i<count($classArr);$i++){
					$stateModel->addInfo($classArr[$i],$dArr);
				}

				// var_dump($dArr);
				// var_dump($classArr);

				$stateArr = $statelistModel->findAll();

				$this->assign("stateArr",$stateArr);
				$this->display("list.php");


			}else{
				echo "您没有填写表单，不能进行查询!";
			}

		}

		function obtain(){

			$id = $_GET['id'];

			$statelistModel = new \Model\StateListModel;
			$staArr = $statelistModel->findRowById($id);

			$date[':leave'] = $staArr['start_date'];
			$date[':back'] = $staArr['end_date'];
			
			$d1=strtotime($date[':leave']);
			$d2=strtotime($date[':back']);

			$Days=round(($d2-$d1)/3600/24)+1;
			
			for($i=0;$i<$Days;$i++){
				if($i==0){
					$d1=$d1;
					$dArr[] = date("Y-m-d",$d1);
				}else{
					$d1+=86400;
					$dArr[] = date("Y-m-d",$d1);
				}
			}

			// var_dump($staArr);
			// var_dump($dArr);

			$stateModel = new \Model\StateModel;
			$score = 0;
			$snum = 0;
			$kaoqin = 0;
			$zhuangtai = 0;
			$AA=0;
			$AB=0;
			$AC=0;
			$shengbing=0;
			for($i=0;$i<count($dArr);$i++){
				$stateArr[] = $stateModel->findRowById_date($staArr['stu_id'],$dArr[$i]);
				// var_dump($stateArr[$i]['score']);
				// 分数
				$score+=$stateArr[$i]['score'];
				// 考勤
				if($stateArr[$i]['forenoon_state']!='√'){
					$kaoqin++;
				}else if($stateArr[$i]['afternoon_state']!='√'){
					$kaoqin++;
				}else if($stateArr[$i]['evening_state']!='√'){
					$kaoqin++;
				}
				// 状态
				if($stateArr[$i]['attention']!='是'){
					$zhuangtai++;
				}else if($stateArr[$i]['study']!='是'){
					$zhuangtai++;
				}else if($stateArr[$i]['hand_in_phone']!='是'){
					$zhuangtai++;
				}

				if($stateArr[$i]['active']=="A"){
					$AA++;
				}else if($stateArr[$i]['active']=="B"){
					$AB++;
				}else if($stateArr[$i]['active']=="C"){
					$AC++;
				}

				if($stateArr[$i]['body_state']=="生病"){
					$shengbing++;
				}

				$snum++;
			}

			// 百分比
			$baifenbi = ($score/$snum);
			$baifenbi = round($baifenbi,2)."%";

			if($AA>=($snum/2)){
				$huizong['active'] = 'A';
			}else if($AB>=($snum/2)){
				$huizong['active'] = 'B';
			}else if($AC>=($snum/2)){
				$huizong['active'] = 'C';
			}else if($AA==$AB){
				$huizong['active'] = 'A';
			}else if($AB==$AC||$AA==$AC){
				$huizong['active'] = 'B';
			}
			$huizong['baifenbi'] = $baifenbi;
			
			if($kaoqin==0){
				$huizong['kaoqin'] = "A";
			}else if($kaoqin>0&&$kaoqin<=2){
				$huizong['kaoqin'] = "B";
			}else{
				$huizong['kaoqin'] = "C";
			}

			if($zhuangtai==0){
				$huizong['zhuangtai'] = "A";
			}else if($zhuangtai>0&&$zhuangtai<=2){
				$huizong['zhuangtai'] = "B";
			}else{
				$huizong['zhuangtai'] = "C";
			}

			if($shengbing>=($snum/4)){
				$huizong['shengbing'] = '生病';
			}else{
				$huizong['shengbing'] = '良好';
			}

			$num = ceil(count($stateArr)/6);
			
			$this->assign("num",$num);
			$this->assign("huizong",$huizong);
			// class_state数据
			$this->assign("stateArr",$stateArr);
			// state_list数据
			$this->assign("staArr",$staArr);

			$this->display("state.php");
		}


		function updata(){


			// echo "1";
			
			$id = $_GET['id'];

			// 类型
			$t = isset($_GET['t'])? $_GET['t'] : "";

			$statelistModel = new \Model\StateListModel;
			$stateModel = new \Model\StateModel;

			$staArr = $statelistModel->findRowById($id);
			// 日期获取
			$date[':leave'] = $staArr['start_date'];
			$date[':back'] = $staArr['end_date'];
			
			$d1=strtotime($date[':leave']);
			$d2=strtotime($date[':back']);

			$Days=round(($d2-$d1)/3600/24)+1;
			
			for($i=0;$i<$Days;$i++){
				if($i==0){
					$d1=$d1;
					$dArr[] = date("Y-m-d",$d1);
				}else{
					$d1+=86400;
					$dArr[] = date("Y-m-d",$d1);
				}
			}
			// 日期获取 end

			if($t==1){
				$data['type'] = 'score';

				for($i=0;$i<count($dArr);$i++){
					$stateArr[] = $stateModel->findRowById_date_score($staArr['stu_id'],$dArr[$i],$data);
				}

			}else if($t==2){

				$data['type'] = 'forenoon_state';
				$data['type2'] = 'afternoon_state';
				$data['type3'] = 'evening_state';
				for($i=0;$i<count($dArr);$i++){
					$stateArr[] = $stateModel->findRowById_date_time($staArr['stu_id'],$dArr[$i],$data);
				}

			}else if($t==3){

				$data['type'] = 'attention';
				$data['type2'] = 'study';
				$data['type3'] = 'hand_in_phone';
				for($i=0;$i<count($dArr);$i++){
					$stateArr[] = $stateModel->findRowById_date_state($staArr['stu_id'],$dArr[$i],$data);
				}

			}else if($t==4){

				$data['type'] = 'active';
				for($i=0;$i<count($dArr);$i++){
					$stateArr[] = $stateModel->findRowById_date_active($staArr['stu_id'],$dArr[$i],$data);
				}

			}else{

				$data['type'] = 'body_state';
				for($i=0;$i<count($dArr);$i++){
					$stateArr[] = $stateModel->findRowById_date_body($staArr['stu_id'],$dArr[$i],$data);
				}

			}

			// var_dump($staArr);
			// var_dump($data);
			// var_dump($stateArr);

			// var_dump$stateArr;
			// var_dump($data);
			// echo ;
			// var_dump($t);
			echo json_encode($stateArr);
			// echo json_encode($data);

		}

	}



 ?>


