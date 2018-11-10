<?php 

	//定义命名空间
	namespace Model;
	use \Core\Model;

	class StateListModel extends Model {

		//定义table属性
		public $table = "state_list";

		/*``````
		 * 查询所有的数据
		 */
		function findAll(){

			//1、拼接sql语句
			$sql = "select * from ".$this->getTableName()." order by id desc";
			//2、调用父类的方法，进行查询
			return $this->getAll($sql,$data=[]);
			//3、返回结果给控制器
		}

		/*
		 * 定义方法，保存新的分类
		 */
		function addInfo($classArr,$date){
			
			for($i=0;$i<count($classArr);$i++){

				$data1[':name'] = $classArr[$i]['name'];
				$data1[':start_date'] = $date[':leave'];
				$data1[':end_date'] = $date[':back'];

				$sql = "select id from ".$this->getTableName()." where name=:name and start_date=:start_date and end_date=:end_date";

				$data_skip = $this->getRow($sql,$data1);
				if($data_skip){
					// var_dump("存在");
					continue;

				}else{

					$data[':name'] = $classArr[$i]['name'];
					$data[':stu_id'] = $classArr[$i]['id'];
					$data[':stu_class'] = $classArr[$i]['class'];
					// var_dump($classArr);
					// exit;
					$data[':start_date'] = $date[':leave'];
					$data[':end_date'] = $date[':back'];
					$data[':state_list'] = "未发布";
		
					$sql = "insert into ".$this->getTableName()." values(null,:name,:stu_id,:stu_class,:start_date,:end_date,:state_list)";

					if($this->exec($sql,$data)){
						// echo "成功!<br>";
					}
				}
			}

		}


		/*
		 * 定义方法，保存新的分类
		 */
		function updateInfo($data){

			$sql = "update ".$this->getTableName()." set rules_name =:rname , rules_desc=:desc , url=:url , filmtypeid=:filmtypeid,content=:content , type=:type , start_page =:start , end_page=:end , pid=:pid , path=:path  where id=:id";

			//           调用父类 Model方法
			return $this->exec($sql,$data);

		}

		function getType($ClassPath){

		
			$sql = "select name from {$this->getTableName()} where path = :path";

			$data[':path'] = $ClassPath;
			// var_dump($sql);
			// var_dump($ClassPath);
			
			return $this->getRow($sql,$data);
			
		}

		function classType($classType){

		
			$sql = "select name from {$this->getTableName()} where class = :class";

			$data[':class'] = $classType;
			// var_dump($sql);
			// var_dump($ClassPath);
			
			return $this->getRow($sql,$data);
			
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

	}

 ?>