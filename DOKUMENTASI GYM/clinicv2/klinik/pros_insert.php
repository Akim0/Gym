<?php
include ('config.php');
$id=$_POST['id_kad'];
$nama=$_POST['nama'];
$nokp=$_POST['nokp'];

$pekerjaan=$_POST['pekerjaan'];
$jantina=$_POST['jantina'];
$tarikh=$_POST['tarikh'];


echo"<br>";

$query="insert into form values
('$id','$nama','$nokp','$pekerjaan','$jantina','$tarikh')";
if(mysql_query($query)){
if ($result==TRUE) header("Location:data.php");
if ($result==FALSE) header("Location:data.php");}
	
else


echo"something went wrong";

?>