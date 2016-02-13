<?php
	include 'Mysql.php';
	include 'Boss.php';
	class BossDAO{
		public static function getBoss($email,$password){
			$mysql=new Mysql();
			$response=$mysql->query("select * from boss where email='$email' and password=PASSWORD('$password')");
			$mysql->closeConnection();
			if($response==false)
				return false;
			$response=mysql_fetch_assoc($response);
			$boss=new Boss($response['name'],$response['surname'],$response['email'],$response['password']);
			return $boss;
		}
	}
?>
