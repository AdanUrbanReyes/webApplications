<?php
	/*
		first create schema and table in localhost/phpmyadmin
		create schema sale_point_ayan;
		use sale_point_ayan;
		create table employeer(name char(17) not null,surname char(34) not null,address char(85) not null,phone char(15) not null,email char(34) not null,password char(17) not null,primary key(phone));
	*/
	function getConnection(){
		$connection=mysql_connect("localhost","root","");
		if(!$connection){
			exit ("error connecting mysql ".mysql_error());
		}
		if(!mysql_select_db("sale_point_ayan")){
			exit ("error connecting to data base ".mysql_error());
		}
		return $connection;
	}
	function registerEmployeer($name,$surname,$address,$phone,$email,$password){
		$connection=getConnection();
		if(!mysql_query("insert into employeer value('$name','$surname','$address','$phone','$email','$password')",$connection)){
			exit ("error inserting employerr ".mysql_error());
		}
		echo "register added succefull<br>";
		mysql_close();
	}
	function showRegisters(){
		$connection=getConnection();
		$query=mysql_query("select * from employeer",$connection);
		// $response=mysql_fetch_assoc($query);
		// echo "<pre>";
		// die(var_dump($response));
		while($response=mysql_fetch_assoc($query)){
			echo "name: ".$response["name"]."<br>";
			echo "surname: ".$response["surname"]."<br>";
			echo "address: ".$response["address"]."<br>";
			echo "phone: ".$response["phone"]."<br>";
			echo "email: ".$response["email"]."<br>";
			echo "password: ".$response["password"]."<br><hr/>";
		}
	}
	function removeRegister($phone){
		$connection=getConnection();
		if(!mysql_query("delete from employeer where phone='$phone'",$connection)){
			exit ("error deleting user $phone ".mysql_error());
		}
		echo "user $phone deleted :D";
	}
	if($_GET['show']){
		showRegisters();
	}
	if($_POST['register']){
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		registerEmployeer($name,$surname,$address,$phone,$email,$password);
	}
	if($_POST['remove']){
		$phone=$_POST['phone'];
		removeRegister($phone);	
	}
?>
