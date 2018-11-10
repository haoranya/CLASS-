<?php 

		namespace Model;

		use \Core\Model;

		class EvidenceModel extends Model{

			public $table = 'evidence';

			function selectAllEvidence($likestr){

				$sql = "select * from ".$this->getTableName()." where 1=1 ".$likestr;

			    return $this->getAll($sql,$data=[]);


			}

			function selectEvidence($limit,$likestr){

				$sql = "select * from ".$this->getTableName()." where 1= 1 {$likestr} {$limit}";

			    return $this->getAll($sql,$data=[]);


			}

			 function insert_evidence($data){

	    	 	$sql = "insert into ".$this->getTableName()." values(null,:stu_name,:tea_name,:stu_class,:today_date,:img_url,:type)";

	    	 	return $this->exec($sql,$data);

	    	 }

	    	 function delect_evident($id){

			 $sql = "delete from ".$this->getTableName()." where id=:id";
		
			 $data[':id'] = $id;

			 return $this->exec($sql,$data);

		    }

		    function select_evidence($id){

		    	 $sql = "select * from ".$this->getTableName()." where id=:id";

		    	 $data[':id'] = $id;

		    	  return $this->getRow($sql,$data);

		    }

		    function update_evident($data){

		    	var_dump($data);

		    	$sql = "update ".$this->getTableName()." set stu_name = :stu_name , tea_name = :tea_name , stu_class = :stu_class , today_date=:today_date , img_url=:img_url , type=:type where id=:id";

		    	return $this->exec($sql,$data);

		    }



		}



 ?>