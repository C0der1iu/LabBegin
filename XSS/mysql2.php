<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
<head>
<?php
setcookie("user", "test cookies", time()+3600);
?>
<title>GUEST BOOK ，HELLO LOSER</title>
</head>
<body>
<br />
<br />
<h2>留言板<h2>

<form action="insert2.php" method="post">
info:<textarea id='uid' name="desc"></textarea>
<br>
<br>
user:<input type="text" name="user"/><br>
<input type="submit" value="GO!" onclick='loction="insert2.php"'/>
</form>
<?php
$con = mysql_connect("127.0.0.1","root","root");
if (!$con)
  {
  echo('Could not connect: ' . mysql_error());
  }

mysql_select_db("website", $con);

$result = mysql_query("SELECT * FROM fstinfo");

echo "<table border='1'>
<tr>
<th>user:</th>
<th>info:</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['info'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
</body>
</html>