<?php
	if(is_uploaded_file($_FILES["file"]["tmp_name"]))
	{	
		$upfile=$_FILES["file"];
		$name=$upfile["name"];
		$type=$upfile["type"];
		$size=$upfile["size"];
		$tmp_name=$upfile["tmp_name"];

		echo "上传文件名:" . $_FILES["file"]["name"] . "/br>";
		echo "上传文件类型:" . $_FILES["file"]["type"] . "</br>";
		echo "上传文件大小:" . ($_FILES["file"]["size"] / 1024) . "Kb<br />";
	
		$destination="../file/".$name;
		move_uploaded_file($tmp_name,$destination);
	}
	else
	{
		echo"文件上传失败";
	}
?>
