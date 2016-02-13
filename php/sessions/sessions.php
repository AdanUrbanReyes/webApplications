<?php
	session_start();
	if($_POST['send']){
		if(isset($_SESSION['user'])){//session views is started?
			$_SESSION['user']=$_SESSION['user']." ".$_POST['user'];//increment one 
		}else{
			$_SESSION['user']=$_POST['user'];//set session in one
		}
?>
	user added ok
	<a href="receiveStringSession.php">go to page for recuperar users</a>
<?php
		//echo "user=".$_SESSION['user'];
	}
?>
<html>
	<body>
		<form action="sessions.php" method="POST">
			enter user <input type="text" name="user"/>
			<input type="submit" name="send" value="send"/>
		</form>
	</body>
</html>
