<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../vista/buys.css">
		<title>tore</title>
	</head>
	<body>
		<div id="welcome">
			<h1>
				<?php
					echo $_SESSION['user'];
				?>
				<a href="BuyCar.php?barcode=null&expiration=null"><img alt="enter to go buy car" src="../imagens/buyCar.png" width="100px" height="100px"/></a>
			</h1>
			<a href="CloseSession.php">Cerrar seccion</a>
		</div>
		<div>
			<?php
				include'../modelo/ProductDAO.php';	
				function loadProducts(){
					$products=ProductDAO:: getProducts();
					echo "<center><h1>.:Productos:.</h1><br>";
					echo "<table border=\"3px\">";
					foreach($products as $product){
						if($product->getStock()>0){
							echo "<tr>";//create row
							echo "<td>
								<img src=\"../imagens/".$product->getImage()."\" alt=\"product image\" width=\"600px\" height=\"400px\"\><br>
								<a href=\"Buy.php?barcode=".$product->getBarcode()."&expiration=".$product->getExpiration()."\">mostrar informacion</a><br>
								</td>";
							echo "</tr>";
						}
					}
					echo "</table></center>";
				}
				loadProducts();
			?>
		</div>
	</body>
</html>
