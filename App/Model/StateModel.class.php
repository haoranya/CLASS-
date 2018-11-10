<?php 

	//定义命名空间
	namespace Model;
	use \Core\Model;

	class StateModel extends Model {

		//定义table属性
		public $table = "class_state";

		/*
		 * 查询所有的数据
		 */
		function findAll(){

			//1、拼接sql语句
			$sql = "select * from ".$this->getTableName();
			//2、调用父类的方法，进行查询
			return $this->getAll($sql,$data=[]);
			//3、返回结果给控制器
		}

		/*
		 * 定义方法，
		 */
		function addInfo($data,$dArr){	
			//保存参数到数组中
			// var_dump($dArr);
			// var_dump($data);
			
			for($i=0;$i<count($dArr);$i++){
			
				$data1[':stu_id'] = $data['id'];
				$data1[':today_date'] = $dArr[$i];
				$sql = "select id from ".$this->getTableName()." where stu_id=:stu_id and today_date=:today_date";
				$data_skip = $this->getRow($sql,$data1);

				if($data_skip){
					// var_dump("存在");
					continue;
				}else{
					
					$data2[':stu_id'] = $data['id'];
					$data2[':today_date'] = $dArr[$i];
					$data2[':attention'] = "是";
					$data2[':study'] = "是";
					$data2[':hand_in_phone'] = "是";
					$data2[':active'] = "A";
					$data2[':forenoon_state'] = "√";
					$data2[':afternoon_state'] = "√";
					$data2[':evening_state'] = "√";
					$data2[':body_state'] = "良好";
					$data2[':score'] = "100";
					$sql = "insert into ".$this->getTableName()." values(null,:stu_id,:today_date,:attention,:study,:hand_in_phone,:active,:forenoon_state,:afternoon_state,:evening_state,:body_state,:score)";

					if($this->exec($sql,$data2)){
						// echo "成功!<br>";
					}
				}

			}
			
			// if($num>0){
			// 	return true;
			// }
			// $sql = "select * from czxy_class_state a,czxy_student b where b.id=a.stu_id and a.today_date=";

		}


		/**
		 * 根据id删除 数据
		 */
		function delete($id){
			//定义sql
			$sql = "delete from ".$this->getTableName()." where id=:id";
			//保存参数到数组中
			$data[':id'] = $id;
			//调用父类的Model的exec方法，执行
			return $this->exec($sql,$data);

		}

		function findRowStuid($stu_id){

			$sql = "select * from ".$this->getTableName()." where stu_id=:stu_id";
			//保存参数到数组中
			$data[':stu_id'] = $stu_id;
			return $this->getRow($sql,$data);

		}


		function findRowById($id){

			$sql = "select * from ".$this->getTableName()." where id=:id";
			//保存参数到数组中
			$data[':id'] = $id;
			return $this->getRow($sql,$data);

		}
		// 根据学生id与当日时间查询
		function findRowById_date($id,$dArr){

			$sql = "select * from ".$this->getTableName()." where stu_id=:id and today_date=:today_date";
			//保存参数到数组中
			$data[':id'] = $id;
			$data[':today_date'] = $dArr;

			return $this->getRow($sql,$data);

		}

		function findRowById_type($staArr){

			$sql = "select * from ".$this->getTableName()." where stu_id=:id and today_date=:today_date";
			//保存参数到数组中
			$data[':id'] = $staArr;
			$data[':start_date'] = $staArr;
			$data[':end_date'] = $staArr;

			return $this->getRow($sql,$data);

		}

		// 根据学生id与分数查询
		function findRowById_date_score($id,$dArr,$score){

			// dArr 日期
			// score 分数
			$sql = "select today_date,{$score['type']} from ".$this->getTableName()." where stu_id=:stu_id and today_date=:today_date";
			//保存参数到数组中
			$data[':stu_id'] = $id;
			$data[':today_date'] = $dArr;

			return $this->getRow($sql,$data);

		}

		// 根据学生id与出勤查询
		function findRowById_date_time($id,$dArr,$score){

			$sql = "select today_date,{$score['type']},{$score['type2']},{$score['type3']} from ".$this->getTableName()." where stu_id=:id and today_date=:today_date";
			//保存参数到数组中
			$data[':id'] = $id;
			$data[':today_date'] = $dArr;

			return $this->getRow($sql,$data);

		}

		// 根据学生id与上课状态
		function findRowById_date_state($id,$dArr,$score){

			$sql = "select today_date,{$score['type']},{$score['type2']},{$score['type3']} from ".$this->getTableName()." where stu_id=:id and today_date=:today_date";
			//保存参数到数组中
			$data[':id'] = $id;
			$data[':today_date'] = $dArr;

			return $this->getRow($sql,$data);

		}

		// 根据学生id与活跃度
		function findRowById_date_active($id,$dArr,$score){

			$sql = "select today_date,{$score['type']} from ".$this->getTableName()." where stu_id=:id and today_date=:today_date";
			//保存参数到数组中
			$data[':id'] = $id;
			$data[':today_date'] = $dArr;

			return $this->getRow($sql,$data);

		}

		// 根据学生id与身体状况
		function findRowById_date_body($id,$dArr,$score){

			$sql = "select today_date,{$score['type']} from ".$this->getTableName()." where stu_id=:id and today_date=:today_date";
			//保存参数到数组中
			$data[':id'] = $id;
			$data[':today_date'] = $dArr;

			return $this->getRow($sql,$data);

		}


	}

 ?>