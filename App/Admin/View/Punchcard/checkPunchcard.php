<?php 

		$date = $_GET['date'];

	    $pdo = new PDO('mysql:host=127.0.0.1;dbname=cims','root','123456');

		$pdo->exec('set names utf8');

		$datearr = explode('ID', $date);

		$nowtime = $datearr[0];

		function check($nowtime){

			global $pdo;

			$sql = "select id from czxy_punchcard where time = {$nowtime}";
			$stmt = $pdo->query($sql);
			$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$len = count($arr);
			
			if($len){

			   echo 1;

			}else{

			   echo 0;

			}
		}

		check($nowtime);



 ?>