<?php
	include '../modelo/ProductDAO.php';
	if($_POST['removeProduct']){
		if($_POST['haveExpiration']=="no"){
			$expiration="0000-00-00";
		}else{
			$expiration=$_POST['expiration'];
		}
		$product=ProductDAO:: getProduct($_POST['barcode'],$expiration);
		unlink("../imagens/".$product->getImage());
		if((ProductDAO:: removeProduct($_POST['barcode'],$expiration))!=false)echo "product removed succefull<br>";
		else echo "error removing product<br>";
	}	
?>
