<?php
	include 'ProductDAO.php';
	include 'Client.php';
	class Sale{
		private $products;
		private $amounts;
		private $client;
		public function __construct($client){
			$this->client=$client;
			$this->products=array();
			$this->amounts=array();
		}
		public function __destruct(){
			;	
		}
		public function productWasInArray($product){
			$size=count($this->products);
			for($i=0;$i<$size;$i++){
				if($this->products[$i]->getBarcode()==$product->getBarcode()){
					if($this->products[$i]->getExpiration()==$product->getExpiration()){
						return $i;
					}
				}
			}
			return -1;
		}
		public function addProductToBuyCar($product){
			$i=$this->productWasInArray($product);
			if($i==-1){//product not was in array
				$size=count($this->products);
				$this->products[$size]=$product;
				$this->amounts[$size]=1;
			}else{
				$this->amounts[$i]++;
			}
		}
		public function printTotal(){
			$size=count($this->products);
			$total=0;
			for($i=0;$i<$size;$i++){
				$subTotal=$this->products[$i]->getSalePrice()*$this->amounts[$i];
				$total+=$subTotal;
			}
			echo "<h1>Total= $total</h1>";
		}
		public function printBuyCar(){
			$size=count($this->products);
			for($i=0;$i<$size;$i++){
				echo "<div class=\"producto\">";
				echo "<center>";
				echo "<img alt=\"image product\" src=\"../imagens/".$this->products[$i]->getImage()."\"/><br>";
				echo "<span>Nombre: ".$this->products[$i]->getName()."</span><br>";
				echo "<span>Precio:".$this->products[$i]->getSalePrice()."</span><br>";
				echo "<span>Cantidad:".$this->amounts[$i]."</span><br>";
				$subTotal=$this->products[$i]->getSalePrice()*$this->amounts[$i];
				echo "<span>SubTotal:$subTotal</span><br>";
				echo "</center>";
				echo "</div>";
			}
		}
	}
?>
