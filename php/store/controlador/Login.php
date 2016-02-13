<?php
	session_start();
	function tryLoginLikeBoss($user,$password){
		include '../modelo/BossDAO.php';
		$boss=BossDAO:: getBoss($user,$password);
		if($boss!=false){
			$_SESSION["user"]="Boss ".$boss->getName()." ".$boss->getSurname();
			header("Location:../vista/index.html?typeUser=Boss&name=".$boss->getName()."&suername=".$boss->getSurname());
		}else{
			echo("user or password invalid<br>");
		}
	}
	function tryLoginLikeClient($user,$password){
		include '../modelo/ClientDAO.php';
		$client=ClientDAO:: getClient($user,$password);
		if($client!=false){
			$_SESSION["user"]="Client ".$client->getName()." ".$client->getSurname();
			header("Location:../vista/index.html?typeUser=Client&name=".$client->getName()."&suername=".$client->getSurname());
		}else{
			echo("user or password invalid<br>");
		}
	}
	if($_POST['login']){
		$user=$_POST['user'];
		$password=$_POST['password'];
		$typeUser=$_POST['typeUser'];
		if($typeUser=="Boss"){
			tryLoginLikeBoss($user,$password);
		}else{
			if($typeUser=="Client"){
				tryLoginLikeClient($user,$password);
			}
		}
	}
?>
