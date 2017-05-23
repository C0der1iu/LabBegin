<html>
<meta charset="utf-8">
<head>
<?php
$con = mysql_connect("127.0.0.1","root","root");
if(!$con)
	{
		echo mysql_error();
	}
function convertsingle($string)
{
return str_replace("'", "\'", $string);
}
$a=filter_var($_POST['user'], FILTER_CALLBACK, array("options"=>"convertsingle"));
$b=filter_var($_POST['desc'], FILTER_CALLBACK, array("options"=>"convertsingle"));	
mysql_select_db("website",$con);
$sql = "INSERT INTO fstinfo (username,info)
VALUES('$a','$b')";	
if (!mysql_query($sql,$con))
  {
  echo mysql_error();
  }
echo "留言提交完毕";
mysql_close($con);
?>
</head>
<body>
	<p>
		<a href="mysqlchc.php">GO BACK TO index(normal)</a>
	</p>
</body>
</html>