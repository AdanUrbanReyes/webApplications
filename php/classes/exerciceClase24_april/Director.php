<?php
//http://compupaste.com/?v=21969
	include 'Manager.php';
	class Director extends Manager{
		private $pedido;
		function __construct($name,$surname,$socialSecurityNumber,$phone,$salary,$password){
			parent:: __construct($name,$surname,$socialSecurityNumber,$phone,$salary,$password);
		}
		function __destruct(){
			echo "directory destroid ".$this->name." ".$this->surname."<br>";
		}
		function printInformation(){
			parent:: printInformation();
		}
		function setPedido($pedido){
			$this->pedido=$pedido;
		}
		function printPedido(){
			print_r($this->pedido);
			echo "<br>";
		}
	}
	if($_POST['enter']){
			$d=new Director($_POST['user'],$_POST['surname'],$_POST['ssn'],$_POST['phone'],$_POST['salary'],$_POST['password']);
			$pedido=array("lomotil","actron","sedalmer","cafiaspirina");
			$d->printInformation();
			$d->setPedido($pedido);
			$d->printPedido();
			Employeer:: saleProduct("2012630450","Ayan","17311");
			Manager:: removeProduct("2012630450");
			
	}
?>
