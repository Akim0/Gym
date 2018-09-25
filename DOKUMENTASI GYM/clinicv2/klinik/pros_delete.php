<?php
include ('config.php');
$delete=mysql_query("DELETE FROM form where id_kad='$_GET[id]'");
if($delete)
{


header("Location:data.php");}

?>



