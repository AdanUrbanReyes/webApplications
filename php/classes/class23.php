<?php
	//POO with PHP
	//definition of a class
	/*
		separar clases y utilizar html
	*/
	class client{
		var $name;
		var $number;
		var $movesRentadas;
		function __construct($name,$number){
			$this->name=$name;
			$this->number=$number;
			$this->movesRentadas=array();
		}
		function __destruct(){
			echo "<br>destruido".$this->name;	
		}
		function getNumber(){
			return $this->number;
		}
	}
	$client1=new client("Ayan",5540027762);
	$client2=new client("Alexa",5518648524);
	echo "ID client 1:".$client1->getNumber()."<br>";
	echo "ID client 2:".$client2->getNumber()."<br>";


	class soporte{
		public $title;
		protected $number;
		private $price;
		function __construct($title,$number,$price){
			$this->title=$title;
			$this->number=$number;
			$this->price=$price;
		}
		public function getPriceAnyIVA(){
			return $this->price;
		}
		public function getPriceWithIVA(){
			return $this->price*1.16;
		}
		public function getNumberId(){
			return $this->number;
		}
		public function printCaracteristicas(){
			echo $this->title."<br>";
			echo $this->price." (any iva)";
		}	
	}
	class cintaVideo extends soporte{
		private $duration;
		function __construct($title,$number,$price,$duration){
			parent:: __construct($title,$number,$price);//constructor of classe soporte
			$this->duration=$duration;
		}
		public function showCaracteristicas(){
			echo "move in VHS:<br>";
			parent:: muestraCaracteristicas();
			echo "<br>Duration:".$this->duration;
		}
	}
	$soporte1=new soporte("Avengers",11,17311);
	echo "<b>".$soporte1->title."</b><br>";
	echo "price:".$soporte1->getPriceAnyIVA()." pons<br>";
	echo "price with iva:".$soporte1->getPriceWithIva()." pons<br>";
?>
