<?php
	function getMagicSquare($sizeSquare){
		$tope=pow($sizeSquare,2);
		$number=2;
		$r=0;
		$c=ceil($sizeSquare/2)-1;
		echo("number=".$number."<br>tope=".$tope."<br>center=".$c);
		$magicSquare[0][$c]=1;
		while($number<=$tope){
			$r--;
			$c++;
			if($r<0){//salio by arriba of rows
				if($c<$sizeSquare){//salio by arriba of rows but not salio by columns 
					$r=$sizeSquare-1;
				}else{
					if($c>=$sizeSquare){//salio by la esquina superior
						$r+=2;
						$c--;
					}
				}
			}else{
				if($r>=0){//not salio of rows
					if($c>=$sizeSquare){
						$c=0;
					}
				}
			}
			if($magicSquare[$r][$c]!=0){//was ocupado
				$r+=2;
				$c--;
			}
			$magicSquare[$r][$c]=$number++;
		}	
		return $magicSquare;
	}
	if($_GET['create']){
		$sizeSquare=$_GET['sizeSquare'];
		$magicSquare=getMagicSquare($sizeSquare);
		echo ("<table>");
		for($r=0;$r<$sizeSquare;$r++){
			echo ("<tr>");
			for($c=0;$c<$sizeSquare;$c++){
				echo ("<th>".$magicSquare[$r][$c]."</th>");
			}
			echo("</tr>");
		}
		echo ("</table>");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>magic square</title>
	</head>
	<body>
		<form action="magicSquare.php" method="get">
			please enter size of square <input type="number" name="sizeSquare"/>
			<input type="submit" name="create" value="create" />
		</form>
	</body>
</html>
