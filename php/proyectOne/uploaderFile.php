<?php
	if($_POST['uploadFile']){
		$targetPath="uploads/";//directory uploads deve existir antes de correr this program
		$targetPath.=basename($_FILES['file']['name']);//concateno para formal el path completo 
		if(move_uploaded_file($_FILES['file']['tmp_name'],$targetPath)){//move file
			echo "file ".basename($_FILES['file']['name'])." was uploaded :D<br>";
			echo time()."<br>";
		}else{
			echo "error file not uploaded try again :(<br>";
		}
	}
?>
