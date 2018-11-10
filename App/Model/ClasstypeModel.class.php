<?php 

	
	namespace Model;
	use \Core\Model;

	class ClasstypeModel extends Model {

		
		public $table = "class_type";

	
		
		function findAll(){

		
			$sql = "select *,concat(path,'-',id) dpath  from ".$this->getTableName()." order by dpath";
			
			
			return $this->getAll($sql,$data=[]);
			
		}

	
		function addInfo($data){

			$sql = "insert into ".$this->getTableName()." values(null,:tname,:pid,:path)";

			
			return $this->exec($sql,$data);

		}

	
		function delete($id){
		
			$sql = "delete from ".$this->getTableName()." where id=:id";
			
			$data[':id'] = $id;
			
			return $this->exec($sql,$data);

		}

		function getType($ClassPath){

		
			$sql = "select name from {$this->getTableName()} where path = :path";

			$data[':path'] = $ClassPath;
			// var_dump($sql);
			// var_dump($ClassPath);
			
			return $this->getRow($sql,$data);
			
		}

	
		function getAllSubTypes($pid){

			$sql="select * from ".$this->getTableName(). "where pid =:pid order by level,id";
			$data[':pid'] = $pid;

			return $this->getAll($sql,$data);

		}


	}

 ?>