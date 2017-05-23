<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
<head>
<title>GUEST BOOK ，HELLO LOSER</title>
</head>
<body>
<br />
<br />
<h2>留言板<h2>

<form action="fs_index.php" method="get">
info:<textarea id='uid' name="desc"></textarea><br>
<br>
user:<input type="text" name="user"/><br>
<input type="submit" value="GO!"/>
</form>
<?php
if(isset($_GET['user'])&&isset($_GET['desc'])){
$username=$_GET['user'];
$desc=$_GET['desc'];
echo 'user:'."\t".$username."</br>";
echo 'desc:'."\t".$desc."\n";
}
?>
</body>
</html>