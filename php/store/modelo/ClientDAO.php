<?php
	include 'Client.php';
	include 'Mysql.php';
	class ClientDAO{
		public static function getClient($email,$password){
			$mysql=new Mysql();
			$response=$mysql->query("select * from client where email='$email' and password=PASSWORD('$password')");
			$mysql->closeConnection();
			if($response==false)
				return false;
			$response=mysql_fetch_assoc($response);
			$client=new Client($response['name'],$response['surname'],$response['email'],$response['password']);
			return $client;
		}
		/*public static function getClient($email){
			$mysql=new Mysql();
			$response=$mysql->query("select * from client where email='$email'");
			$mysql->closeConnection();
			if($response==false)
				return false;
			$response=mysql_fetch_assoc($response);
			$client=new Client($response['name'],$response['surname'],$response['email'],$response['password']);
			return $client;
			
		}*/
	}
?>
