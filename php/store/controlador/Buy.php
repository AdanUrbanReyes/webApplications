<?
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../vista/addProduct.css">
		<link rel="stylesheet" type="text/css" href="../vista/buys.css">
		<title>Product</title>
	</head>
	<body>
      <div id="welcome">
         <h1>
            <?php
               echo $_SESSION['user'];
            ?>
            <a href="BuyCar.php"><img alt="enter to go buy car" src="../imagens/buyCar.png" width="100px" height="100px"/></a>
         </h1>
			<a href="CloseSession.php">Cerrar session</a>
      </div>
		<center>
		<div id="addProduct">
			<?php
				include '../modelo/ProductDAO.php';
				$product=ProductDAO:: getProduct($_GET['barcode'],$_GET['expiration']);
				echo "<img src=\"../imagens/".$product->getImage()."\" alt=\"".$product->getName()."\" width=\"600px\" height=\"400px\"/><br>";
				$product->printProduct();
				echo "<a href=\"BuyCar.php?barcode=".$product->getBarcode()."&expiration=".$product->getExpiration()."\">agregar al carrito</a><br>"
			?>	
		</div></center>
	</body>
</html>
