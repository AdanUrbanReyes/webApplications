<?php
	class Employeer{
		public $name;
		public $surname;
		private $socialSecurityNumber;
		private $phone;
		private $salary;
		function __construct($name,$surname,$socialSecurityNumber,$phone,$salary){
			$this->name=$name;
			$this->surname=$surname;
			$this->socialSecurityNumber=$socialSecurityNumber;
			$this->phone=$phone;
			$this->salary=$salary;
		}
		function __destruct(){
			echo "destroied ".$this->socialSecurityNumber."<br>";
		}
		public function printInformation(){
			echo "name: ".$this->name."<br>";
			echo "surname: ".$this->surname."<br>";
			echo "social security number: ".$this->socialSecurityNumber."<br>";
			echo "phone: ".$this->phone."<br>";
			echo "salary: ".$this->salary."<br>";
		}
		public function checkIn(){
			$date=getdate();
			echo "check in at ".$date["mday"]."/".$date["month"]."/".$date["year"].":".$date["hours"]."/".$date["minutes"]."/".$date["seconds"]."<br>";
		}
		public function saleProduct($barcode,$name,$pieces){
			echo "saled product with barcode=".$barcode." name=".$name." pieces=".$pieces."<br>";
		}
	}
?>
