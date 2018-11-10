<?php 

		namespace Model;

		use \Core\Model;

		class PunchcardTeacherModel extends Model{

			public $table = "teacher";

			function findAllById($id){

				$sql = "select * from ".$this->getTableName()." where id = :id";

				$data[':id']=$id;

				return $this->getRow($sql,$data);

			}

			function findTimeById($id){

				$sql = "select time form ".$this->getTableName()." where punchcard_id = :id order by id desc";


			}

		}





 ?>