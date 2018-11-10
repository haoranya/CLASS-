<?php 

	//定义命名空间
	namespace Model;
	use \Core\Model;

	class LeaveModel extends Model {

		//定义table属性
		public $table = "leave";

		/*
		 * 查询所有的数据
		 */
		function findAll($class){

			//1、拼接sql语句
			$sql = "select * from ".$this->getTableName()." where stu_class=:class order by add_time desc";
			$data[':class'] = $class;
			// var_dump($sql,$data);
			//2、调用父类的方法，进行查询
			return $this->getAll($sql,$data);
			//3、返回结果给控制器
		}

		function findSelf($name,$class){

			//1、拼接sql语句
			$sql = "select * from ".$this->getTableName()." where stu_name=:name and stu_class=:class order by add_time desc";
			$data[':class'] = $class;
			$data[':name'] = $name;
			// var_dump($sql,$data);
			//2、调用父类的方法，进行查询
			return $this->getAll($sql,$data);
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

		function initcon($data){
			$sql = "insert into  czxy_leave  (id,stu_name,stu_class,stu_phone,stu_e_phone,leave_type,content,leave_time,back_time,leave_days,flow,add_time) values(null,:stu_name,:stu_class,:stu_phone,:stu_e_phone,:leave_type,:content,:leave_time,:back_time,:leave_days,:flow,now())";
			
			var_dump($sql);
			return $this->exec($sql,$data);
		}

		function agree($data){

			$sql = "update ".$this->getTableName()." set a_number = a_number+1  where id=:id";
			//           调用父类 Model方法
			return $this->exec($sql,$data);

		}
		function OK($id){
			$sql = "update ".$this->getTableName()." set if_agree = 1  where id=:id";
			$data[':id'] = $id;
			return $this->exec($sql,$data);
		}
		function Result($data){
			$sql = "select a_number,flow,if_agree from ".$this->getTableName()." where id=:id";
			//保存参数到数组中
			return $this->getRow($sql,$data);
		}
		function Reject($data){
			$sql = "update ".$this->getTableName()." set if_agree = 2 , reject = :content , dismissal = :name  where id=:id";
			//           调用父类 Model方法
			return $this->exec($sql,$data);
		}
		function Content($id){
			$sql = "select reject,dismissal from ".$this->getTableName()." where id=:id";
			//保存参数到数组中
			$data[':id'] = $id;
			return $this->getRow($sql,$data);
		}

	}

 ?>