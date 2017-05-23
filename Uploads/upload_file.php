<?php
	if(is_uploaded_file($_FILES["file"]["tmp_name"]))
	{
		$upfile=$_FILES["file"];
		$name=$upfile["name"];
		$type=$upfile["type"];
		$size=$upfile["size"];
		$tmp_name=$upfile["tmp_name"];

		echo "the name of file:".$_FILES["file"]["name"]."</br>";
		echo "the type of file:".$_FILES["file"]["type"]."</br>";
		echo "the size of file:".($_FILES["file"]["size"]/1024)."Kb</br>";

		$destination="../file/".$name;
		move_uploaded_file($tmp_name, $destination);
	}
	else
	{
		echo"upload faild";
	}
?>