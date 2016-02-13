<?php
	function orderArray(&$arreglo){
		$sizeofArray=count($arreglo);
		for($i=0;$i<$sizeofArray;$i++){
			for($j=0;$j<$sizeofArray;$j++){
				if($arreglo[$i]<$arreglo[$j]){
					$aux=$arreglo[$i];
					$arreglo[$i]=$arreglo[$j];
					$arreglo[$j]=$aux;
				}
			}
		}
	}
	function echoArray($arreglo){
		$sizeofArray=count($arreglo);
		for($i=0;$i<$sizeofArray;$i++)
			echo($arreglo[$i]." ");
	}
	if($_POST['ordenar']){
		$sizeofArray=$_POST['sizeSaved'];
		$arreglo=array();
		for($i=0;$i<$sizeofArray;$i++)
			$arreglo[$i]=$_POST["position".$i];
		orderArray($arreglo);
		echo("<br><br>array order lest to greats<br>");	
		echoArray($arreglo);
	}
?>
<!DOCTYPE html>
<!--localhost/webApplication/ordenaArray.php-->
<html>
	<head>
		<title>Ordenamiento Ayan</title>
		<script type="text/javascript">
			var label;//label html
			function setAttribute(name,value){//set attribute in var label
				var attribute=document.createAttribute(name);//create attribute
				attribute.nodeValue=value;//set value of attribute
				return attribute;
			}
			function reloadInputs(){
				var container=document.getElementById("container");//get label div with id container that contains other label div in this was inputs
				container.removeChild(document.getElementById("inputs"));//remove label div with id inputs in this label was inputs	
				var inputs=document.createElement("div");//create other new label div
				inputs.attributes.setNamedItem(setAttribute("id","inputs"));//create div with id inputs that contins all inputs labels
				container.appendChild(inputs);//add label to container div
			}
			function setInputs(){
				var i,sizeofArray=document.getElementById("sizeofArray").value;//get value the size of array
				document.getElementById("sizeSaved").value=""+sizeofArray;//set size array in input for php
				reloadInputs();//remove all into label div "inputs" then remove all inputs with message
				var div=document.getElementById("inputs");//get label div "input"
				div.innerHTML="please enter values of array the index 1 to "+sizeofArray+":<br>";//set message in div "inputs"
				for(i=0;i<sizeofArray;i++){
					label=document.createElement("input");//create label input
					label.attributes.setNamedItem(setAttribute("type","text"));//set attribute type
					label.attributes.setNamedItem(setAttribute("name","position"+i));//set attribute name
					div.appendChild(label);//add label input to div
				}
			}
		</script>
	</head>
	<body>
		<form action="orderArray.php" method="post">
			enter size of array: <input id="sizeofArray" type="number" onkeyup="setInputs()"/>
			<div id="container"><div id="inputs"></div></div>
			<input id="sizeSaved" type="hidden" name="sizeSaved"/>
			<br><input type="submit" name="ordenar" value="ordenar"/>
		</form>
	</body>
</html>
