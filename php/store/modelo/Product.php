<?php
	class Product{
		private $barcode;
		private $saleType;
		private $name;
		private $buyPrice;
		private $salePrice;
		private $description;
		private $expiration;
		private $image;
		private $stock;
		public function __construct($barcode,$saleType,$name,$buyPrice,$salePrice,$description,$expiration,$image,$stock){
			$this->barcode=$barcode;
			$this->saleType=$saleType;
			$this->name=$name;
			$this->buyPrice=$buyPrice;
			$this->salePrice=$salePrice;
			$this->description=$description;
			$this->expiration=$expiration;
			$this->image=$image;
			$this->stock=$stock;
		}
		public function __destruct(){
			//echo "product $this->name destroied";
		}
		public function getStock(){
			return $this->stock;
		}
		public function getBarcode(){
			return $this->barcode;
		}
		public function getSaleType(){
			return $this->saleType;
		}
		public function getName(){
			return $this->name;
		}
		public function getBuyPrice(){
			return $this->buyPrice;
		}
		public function getSalePrice(){
			return $this->salePrice;
		}
		public function getDescription(){
			return $this->description;
		}
		public function getExpiration(){
			return $this->expiration;
		}
		public function getImage(){
			return $this->image;
		}
		public function setBarcode($barcode){
			$this->barcode=$barcode;
		}
		public function setSaleType($saleType){
			$this->saleType=$saleType;
		}
		public function setStock($stock){
			$this->stock=$stock;
		}
		public function setName($name){
			$this->name=$name;
		}
		public function setBuyPrice($buyPrice){
			$this->buyPrice=buyPrice;
		}
		public function setSalePrice($salePrice){
			$this->salePrice=$salePrice;
		}
		public function setDescription($description){
			$this->description=$description;
		}
		public function setExpiration($expiration){
			$this->expiration=$expiration;
		}
		public function setImage($image){
			$this->image=$image;
		}
		public function printProduct(){
			echo "Codigo de barras: $this->barcode<br>";
			echo "Tipo de venta: $this->saleType<br>";
			echo "Nombre: $this->name<br>";
			echo "Precio :$this->salePrice<br>";
			echo "Descripcion: $this->description<br>";
			echo "Existencias: $this->stock<br>";
			if($this->expiration!="0000-00-00");
				echo "Expiration: $this->expiration<br>";
		}
	}
?>
