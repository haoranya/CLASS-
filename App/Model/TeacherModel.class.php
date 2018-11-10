<?php 

	//定义命名空间
	namespace Model;
	use \Core\Model;

	class TeacherModel extends Model {

		//定义table属性
		public $table = "teacher";

		/*
		 * 查询所有的数据
		 */
		function findAll(){

			//1、拼接sql语句
			$sql = "select *  from ".$this->getTableName();
			
			//2、调用父类的方法，进行查询
			return $this->getAll($sql,$data=[]);
			//3、返回结果给控制器
		}

		

		function pageListHome($k,$y,$filmtypeid){

			//从配置文件中获取配置
			global $config;
			$pageSize = $config['pageSize']['home_pagesize'];

			$likeStr = "";
			//判断$k的值，如果值为"" 表示没有进行搜索或者搜索框灭有内容
			//否则，用关键字拼接sql的字符串
			if($k!=""){
			
				$likeStr .= "  and (film_typename like '%$k%') ";
			}
			if($y!=""){
				$likeStr .="   and (year like '%$y%') ";
			}

		
			$sql = "select count(*) from ".$this->getTableName()." where type_id=:filmtypeid ".$likeStr;

			$data[':filmtypeid'] = $filmtypeid;
			
			$totalCount = $this->getFirstFeild($sql,$data);

			
			$pageArr = \Page::makePage($totalCount,$pageSize);

		
			$sql = "select id,douban_score,name_en,film_time,film_typename,file_poster from ".$this->getTableName()." where type_id=:filmtypeid  {$likeStr} order by pubtime2 desc ".$pageArr['limit'];
		
			$arr['data'] = $this->getAll($sql,$data);
			$arr['pageStr'] = $pageArr['pageStr'];

			return $arr;
		}

	
		function updateInfo($data){

			$sql = "update ".$this->getTableName()." set login_name =:login_name , pwd=:pwd , name=:name , class=:class where id=:id";
			var_dump($sql,$data);
			
			return $this->exec($sql,$data);

		}



		function delete($id){

			$sql = "delete from ".$this->getTableName()." where id=:id";
		
			$data[':id'] = $id;
			
			return $this->exec($sql,$data);

		}


		function findRowById($id){

			$sql = "select id,login_name,pwd,name,class from ".$this->getTableName()." where id=:id";
			
			$data[':id'] = $id;
			return $this->getRow($sql,$data);

		}

		function findAllById($id,$num){

			$sql = "select * from ".$this->getTableName()." where type_id =:id limit ".$num;
			$data[':id'] = $id;
			return $this->getAll($sql,$data);

		}

		function addInfo($data){

			$sql = "insert into ".$this->getTableName()." (id,login_name,pwd,name,class) values(null,:login_name,:pwd,:name,:class)";
			var_dump($sql,$data);
			
			return $this->exec($sql,$data);

		}

		function findTeacherName($class){

			$sql = "select name from ".$this->getTableName()." where class=:class";
			//保存参数到数组中
			$data[':class'] = $class;
			return $this->getRow($sql,$data);

		}

		function findRowByCandI($id,$class){

			$sql = "select * from ".$this->getTableName()." where id=:id and class=:class";
			//保存参数到数组中
			$data[':id'] = $id;
			$data[':class'] = $class;
			return $this->getRow($sql,$data);

		}

		function findNameByCandI($id,$class){

			$sql = "select name from ".$this->getTableName()." where id=:id and class=:class";
			//保存参数到数组中
			$data[':id'] = $id;
			$data[':class'] = $class;
			return $this->getRow($sql,$data);

		}

		function findRowByClass($class){

			$sql = "select * from ".$this->getTableName()." where class=:class";
			//保存参数到数组中
			$data[':class'] = $class;
			return $this->getRow($sql,$data);

		}

		function getUserInfoByName($username){

			//保存用户名到数组中
			$data[':name'] = $username;
			//定义sql
			$sql = "select * from ".$this->getTableName()." where login_name =:name";

			//调用底层方法，返回一行数据
			return $this->getRow($sql,$data);
			
		}


	}

 ?>