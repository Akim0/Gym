<?php
include ('config.php');

$username=$_POST['username'];
$password=$_POST['password'];





echo"<br>";

$query="insert into login values
('$username','$password')";
if(mysql_query($query)){
if ($result==TRUE) header("Location:index.php");
if ($result==FALSE) header("Location:index.php");}
	
else

echo "<script>alert('Maaf, username anda telah diambil');
window.location='index.php'</script>";

?>
