<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" src="../vista/login.css">
		<link rel="stylesheet" type="text/css" src="../vista/buys.css">
		<title>Finish Buy</title>
	</head>
	<body>
		<?php
			unset($_SESSION['buyCar']);
			list($typeUser,$name,$surname)=split(" ",$_SESSION['user']);
		?>
		<br><br><center><h1>Thank for your buy</h1><center><br>
		<?php
			echo "<a href=\"../vista/index.html?typeUser=$typeUser&name=$name&surname=$surname\">go to index</a><br>";
		?>
	</body>
</html>
