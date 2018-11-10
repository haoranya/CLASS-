<?php 

	//命名空间
	namespace Model;
	use \Core\Model;
	//创建模型类
	class UserModel extends Model{

		protected $table = 'student';

		/*
		* 查询所有的User表中的数
		*/
		function findAll($data=[]){

			//定义sql
			$sql = "select * from {$this->getTableName()}";
			//返回一个数组
			return $this->getAll($sql,$data);

		}


		/*
		* 根据用户名查询用户信息是否存在
		*/
		function getUserInfoByName($username){

			//保存用户名到数组中
			$data[':name'] = $username;
			//定义sql
			$sql = "select * from ".$this->getTableName()." where login_name =:name";
		
			//调用底层方法，返回一行数据
			return $this->getRow($sql,$data);
			
		}

		function findRowStuid($stu_id){

			$sql = "select * from ".$this->getTableName()." where id=:id";
			//保存参数到数组中
			$data[':id'] = $stu_id;
			return $this->getRow($sql,$data);

		}

		function addInfo($data){
			// var_dump($data[':password']);	

			// var_dump($data[':password']);
			$sql = "insert into ".$this->getTableName()." values(null,:username,:password,:rename,:class_type,now())";

			// var_dump($data);
		
			
			return $this->exec($sql,$data);

		}


		function findName($data){

			

			$sql = "select * from ".$this->getTableName()." where login_name=:username";
			
			$data1[':username'] = $data[':username'];
			// var_dump($sql,$data1);
			return $this->getRow($sql,$data1);
		}


	}



 ?>