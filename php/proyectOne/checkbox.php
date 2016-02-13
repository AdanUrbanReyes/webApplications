<?php
	if($_REQUEST['enter']){
		$extras=$_REQUEST['extras'];
		foreach($extras as $extra)
			echo "$extra<br>";
	}
?>
