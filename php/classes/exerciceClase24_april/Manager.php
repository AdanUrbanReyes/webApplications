<?php
	include 'Employeer.php';
	class Manager extends Employeer{
		private $password;
		function __construct($name,$surname,$socialSecurityNumber,$phone,$salary,$password){
			parent:: __construct($name,$surname,$socialSecurityNumber,$phone,$salary);
			$this->password=$password;
		}
		function __destruct(){
			echo "manager destroied ".$this->name." ".$this->surname."<br>";
		}
		public function printInformation(){
			parent:: printInformation();
			echo "password: ".$this->password."<br>";
		}
		public function addProduct($barcode,$name,$description){
			echo "product ".$barcode." ".$name." added succefull <br>";
		}
		public function removeProduct($barcode){
			echo "product ".$barcode." removed succefull<br>";
		}
		public function changePassword($password){
			$this->password=$password;	
			echo "password changed succefull <br>";
		}
	}
?>
