<?php
	include 'Product.php';
	include 'Mysql.php';
	class ProductDAO{
		public static function getProducts(){
			$mysql=new Mysql();
			$response=$mysql->query("select * from product");
			if($response==false){
				$mysql->closeConnection();
				return false;
			}
			for($i=0;($product=mysql_fetch_assoc($response));$i++){
				$products[$i]=new Product($product['barcode'],$product['saleType'],$product['name'],$product['buyPrice'],$product['salePrice'],$product['description'],$product['expiration'],$product['routeImage'],$product['stock']);
			}
			$mysql->closeConnection();
			return $products;
		}
		public static function getProduct($barcode,$expiration){
			$mysql=new Mysql();
			$response=$mysql->query("select * from product where barcode='$barcode' and expiration='$expiration'");	
			if($response==false){
				$mysql->closeConnection();
				return false;
			}
			$response=mysql_fetch_assoc($response);
			$product=new Product($response['barcode'],$response['saleType'],$response['name'],$response['buyPrice'],$response['salePrice'],$response['description'],$response['expiration'],$response['routeImage'],$response['stock']);
			$mysql->closeConnection();
			return $product;
		}
		public static function addProduct($product){
			$mysql=new Mysql();
			$update=$mysql->update("insert into product value('".$product->getBarcode()."','".$product->getSaleType()."','".$product->getName()."',".$product->getBuyPrice().",".$product->getSalePrice().",'".$product->getDescription()."','".$product->getExpiration()."','".$product->getImage()."',".$product->getStock().")");
			$mysql->closeConnection();
			return $update;
		}
		public static function setStock($barcode,$expiration,$stock){
			$mysql=new Mysql();
			$update=$mysql->update("update product set stock='$stock' where barcode='$barcode' and expiration='$expiration'");
			$mysql->closeConnection();
			return $update;	
		}
		public static function removeProduct($barcode,$expiration){
			$mysql=new Mysql();
			$update=$mysql->update("delete from product where barcode='$barcode' and expiration='$expiration'");
			$mysql->closeConnection();
			return $update;	
		}
	}
?>
