<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>pay</title>
	</head>
	<body>
      <div id="welcome">
         <h1>
            <?php
               echo $_SESSION['user'];
            ?>
            <a href="BuyCar.php"><img alt="enter to go buy car" src="../imagens/buyCar.png" width="100px" height="100px"/></a>
         </h1>
      </div>
			<h1>Medium of Pay Debit<br>please enter all fields<h1>
				Name: <input type="text" name="name" /><br>
				Debit Card: <input type="text" name="debitCard"/><br>
				Address Send: <input type="text" name="address"/><br>
			<form action="Finish.php" action="post">
				<input type="submit" name="finish" value="buy"/>
			</form>			
	</body>
</html>
