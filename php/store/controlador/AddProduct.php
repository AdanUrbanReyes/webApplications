<?php
	include '../modelo/ProductDAO.php';
	function upgradeImage(){
		$path="../imagens/";
		$path.=basename($_FILES['image']['name']);
		if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
			echo "file ".basename($_FILES['image']['name'])." was uploaded<br>";
		}else{
			exit ("file ".basename($_FILES['image']['name'])." NOT was uploaded<br>");
		}
	}
	if($_POST['addProduct']){
		if($_POST['haveExpiration']=="no"){
			$expiration="";
		}else{
			$expiration=$_POST['expiration'];
		}
		upgradeImage();
		$product=new Product($_POST['barcode'],$_POST['saleType'],$_POST['name'],$_POST['buyPrice'],$_POST['salePrice'],$_POST['description'],$expiration,basename($_FILES['image']['name']),$_POST['stock']);
		if((ProductDAO:: addProduct($product))!=false) echo "product added succeful<br>";
		else echo "error adding product<br>";
	}
?>
