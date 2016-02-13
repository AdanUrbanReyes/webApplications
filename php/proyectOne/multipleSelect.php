<?php
	if($_POST['send']){
		$lenguages=$_POST['lenguages'];
		echo "lengugages:<br>";
		foreach($lenguages as $lenguage)
			echo "$lenguage<br>";
	}
?>
