<?php
	include '../modelo/Sale.php';
	session_start();
	if($_GET['barcode']!="null"){
		$productToAdd=ProductDAO:: getProduct($_GET['barcode'],$_GET['expiration']);
		ProductDAO:: setStock($_GET['barcode'],$_GET['expiration'],$productToAdd->getStock()-1);
//		$productToAdd->setStock($productToAdd->getStock()-1);
		if(isset($_SESSION['buyCar'])){
			$sale=$_SESSION['buyCar'];
			$sale->addProductToBuyCar($productToAdd);
		}else{
			$sale=new Sale($_SESSION['user']);
			$sale->addProductToBuyCar($productToAdd);	
			$_SESSION['buyCar']=$sale;
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" src="../vista/styles.css">
		<title>Product</title>
		<script type="text/javascript" src="../vista/s"></script>
	</head>
	<body>
		<header>
			<h1>
				<?php
					echo $_SESSION['user'];
				?>
				<a href="BuyCar.php?barcode=null&expiration=null"><img alt="enter to go buy car" src="../imagens/buyCar.png" width="100px" height="100px"/></a>
			</h1>
			<a href="CloseSession.php">Cerrar session</a>
		</header>
		<section>
			<?php
				if(isset($_SESSION['buyCar'])){
					$sale=$_SESSION['buyCar'];
					$sale->printBuyCar();
					$sale->printTotal();
			?>
					<center><br><br>Targeta de credito: <input type="text" name="debit"/><br>
					<form action="FinishBuy.php" method="post">
						<input type="submit" name="buy" value="cerrar la compra"/><br>
					</form></center>
			<?php
				}else{
					echo "<center><h1>buy car is empty</h1></center>";
				}
			?>
			<center><br><br><a href="Buys.php">Seguir buscando</a></center>
		</section>
	</body>
</html>
