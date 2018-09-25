<?php

include 'config.php';

$update=mysql_query("UPDATE form SET nama='$_POST[nama]',nokp='$_POST[nokp]',pekerjaan='$_POST[pekerjaan]',jantina='$_POST[jantina]',tarikh='$_POST[tarikh]' WHERE id_kad='$_POST[id]'");

if($update){
	if(result==TRUE) header("Location:data.php");
	if(result==FALSE) header("Location:data.php");

}
else{
	echo "<script>alert('hapus?')
	window.location='data.php'</script>";	

}
?>