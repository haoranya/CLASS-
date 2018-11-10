<?php 

	namespace Model;

	use \Core\Model;

	class PunchcardStudentModel extends Model{

			public $table = "student";

			function findAllById($id){

				$sql = "select * from ".$this->getTableName()." where id = :id";

				$data[':id']=$id;

				return $this->getRow($sql,$data);

			}

		


  }
 ?>