<?php
	function beautifullNumber($number){
		$aux=$number;
		while($number!=1){
			if($number%2==0)
				$number/=2;
			else
				$number=$number*3+1;
			echo($number."<br>");
		}
		echo "then ".$aux." is beautifull number<br>";
	}
	if($_GET['send']){
		beautifullNumber($_GET['number']);
	}
?>
<form action="beautifullNumber.php" method="get">
		enter number integer greates than 0: <input type="number" name="number" min="1"/>
		<br><input type="submit" name="send" value="isBeatifullNumber"/>
</form>
