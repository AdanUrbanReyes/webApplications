<?php
	session_start();
?>
<html>
	<head>
		<title>recuepera data of session</title>
	</head>
	<body>
		<?php
			echo "session recuperate session['user'] = ".$_SESSION['user'];
		?>
	</body>
</html>
