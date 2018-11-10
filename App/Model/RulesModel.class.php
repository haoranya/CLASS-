<?php 

	//定义命名空间
	namespace Model;
	use \Core\Model;

	class RulesModel extends Model {

		//定义table属性
		public $table = "rules";

		/*
		 * 查询所有的数据
		 */
		function findAll(){

			//1、拼接sql语句
			$sql = "select *,concat(path,'-',id) dpath  from ".$this->getTableName()." order by dpath";
			
			//2、调用父类的方法，进行查询
			return $this->getAll($sql,$data=[]);
			//3、返回结果给控制器
		}

		/*
		 * 定义方法，保存新的分类
		 */
		function addInfo($data){

			$sql = "insert into ".$this->getTableName()." values(null,:rname,:desc,:url,:filmtypeid,:content,:type,:start,:end,:pid,:path)";

			//           调用父类 Model方法
			return $this->exec($sql,$data);

		}


		/*
		 * 定义方法，保存新的分类
		 */
		function updateInfo($data){

			$sql = "update ".$this->getTableName()." set rules_name =:rname , rules_desc=:desc , url=:url , filmtypeid=:filmtypeid,content=:content , type=:type , start_page =:start , end_page=:end , pid=:pid , path=:path  where id=:id";

			//           调用父类 Model方法
			return $this->exec($sql,$data);

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





		function findRowById($id){

			$sql = "select * from ".$this->getTableName()." where id=:id";
			//保存参数到数组中
			$data[':id'] = $id;
			return $this->getRow($sql,$data);

		}

	}

 ?>