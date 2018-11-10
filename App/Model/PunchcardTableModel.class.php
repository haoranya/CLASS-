<?php 

		namespace Model;

	    use \Core\Model;

	    class PunchcardTableModel extends Model{

	    	public $table = "punchcard";

	    	function insertPunchcard($data){

				$sql = "insert into ".$this->getTableName()." values(null,:stu_name,:class,:tea_name,:time,:id,:nowtime,:type,:state)";

				return $this->exec($sql,$data);


			}

			function getLastDate(){


				$sql = "select * from ".$this->getTableName()." order by id desc";

				return $this->getRow($sql,$data=[]);


			}

			function findTimeById($id){

				$sql = "select time from ".$this->getTableName()." where punchcard_id={$id} order by id desc ";

				return $this->getRow($sql,$data=[]);
			}

	    }

 ?>