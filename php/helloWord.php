<?php
	if($_POST['send'])
		echo ("hello word!"."<br> welcome ".$_POST["name"]."<br>this is my first program in php :D");
?>
<form action="helloWord.php" method="post">
	what is your name? <input type="text" name="name"/>
	<input name="send" type="submit" value="send"/>
</form>
