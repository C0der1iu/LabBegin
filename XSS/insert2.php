<html>
<meta charset="utf-8">
<head>
<?php
$con = mysql_connect("127.0.0.1","root","root");
if(!$con)
	{
		echo mysql_error();
	}
function convertScript($string)
{
return str_replace("<script>", "", $string);
}
$a=filter_var($_POST['user'], FILTER_CALLBACK, array("options"=>"convertScript"));
$b=filter_var($_POST['desc'], FILTER_CALLBACK, array("options"=>"convertScript"));
/*function convertJScript($string)
{
return str_replace("javascript", "", $string);
}
$a=filter_var($_POST['user'], FILTER_CALLBACK, array("options"=>"convertJScript"));
$b=filter_var($_POST['desc'], FILTER_CALLBACK, array("options"=>"convertJScript"));*/
function convertsingle($string)
{
return str_replace("'", "\'", $string);
}
$a=filter_var($a, FILTER_CALLBACK, array("options"=>"convertsingle"));
$b=filter_var($b, FILTER_CALLBACK, array("options"=>"convertsingle"));
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
		<a href="mysql2.php">GO BACK TO index(filter)</a>
	</p>
</body>
</html>