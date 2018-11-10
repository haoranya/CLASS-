<?php  
	namespace Model;
	use \Core\Model;

	class reportModel extends Model{
		// 添加
		function getInsert($id,$data){
			$sql = "insert into czxy_huibao(id,gz_name,gz_title,gz_gongsi,gz_data,gz_start_time,gz_end_time,gz_content) values(null,:gz_name,:title,:gongsi,:date,:state_time,:end_time,:content)";
	
		    return  $this->exec($sql,$data);
	

		}
		function getInsert1($id,$data) {
			
			$sql = "insert into czxy_zhoubao(id,gz_name,gz_title,gz_gongsi,gz_data,gz_start_time,gz_end_time,gz_content) values(null,:gz_name,:title,:gongsi,:date,:state_time,:end_time,:content)";
		
			return $this->exec($sql,$data);
		}

		function getInsert2($id,$data) {
			
			$sql = "insert into czxy_yuebao(id,gz_name,gz_title,gz_gongsi,gz_data,gz_start_time,gz_end_time,gz_content) values(null,:gz_name,:title,:gongsi,:date,:state_time,:end_time,:content)";
			
			return $this->exec($sql,$data);
		}

			function getRepAll(){
				$sql = "select * from czxy_huibao";

				return $this->getAll($sql,$data=[]);
			}

			function grtAll($id){

				$sql = "select * from czxy_huibao where id = {$id}";

				return $this->getAll($sql,$data=[]);
			}

			function getreplimit($limit){
				$sql = "select * from czxy_huibao where 1=1 {$limit}";

				return $this->getAll($sql,$data=[]);

			}




			function getRepAll_o(){
				$sql = "select * from czxy_zhoubao";

				return $this->getAll($sql,$data=[]);
			}

			function getreplimit_o($limit){
				$sql = "select * from czxy_zhoubao where 1=1 {$limit}";

				return $this->getAll($sql,$data=[]);

			}

			function grtAll_o($id){

				$sql = "select * from czxy_zhoubao where id = {$id}";

				return $this->getAll($sql,$data=[]);
			}




			function getRepAll_t(){
				$sql = "select * from czxy_yuebao";

				return $this->getAll($sql,$data=[]);
			}


			function getreplimit_t($limit){
				$sql = "select * from czxy_yuebao where 1=1 {$limit}";

				return $this->getAll($sql,$data=[]);

			}	
			
			function grtAll_t($id){

				$sql = "select * from czxy_yuebao where id = {$id}";

				return $this->getAll($sql,$data=[]);
			}




			function doAdd($data){
				$sql = "update czxy_huibao set gz_title=:gz_title,
				gz_gongsi=:gz_gongsi,
				gz_start_time=:gz_start_time,
				gz_end_time=:gz_end_time,
				gz_content=:gz_content,
				gz_pingfen=:gz_pingfen where id=:id";
				// var_dump($sql);
				// var_dump($data);
				return $this->exec($sql,$data);

			}


			function delete($id) {
				$sql = "delete from czxy_huibao where id = {$id}";
				var_dump($sql);
				return $this->exec($sql,$data=[]);
			}

			



		

















	}


?>



