<html>
<head>
<title>Login</title>
</head>
<body>
<?php
session_start();
$username =$_POST['username'];
$password =$_POST['password'];
if($username&&$password)
{
   $server='localhost';
   $userid2='root';
   $password2='';
   $dbname='klinik';
$conn=mysql_connect("$server","$userid2","$password2");

mysql_select_db("$dbname",$conn) or die (mysql_error());

$query=mysql_query("select *from login where username='$username'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
   while($row=mysql_fetch_assoc($query))
   {
      $dbusername=$row['username'];
      $dbpassword=$row['password'];
   }
if($username=='admin'&&$password==123)
{
   $_SESSION['username']=$username;
 echo "<script>alert('Tahniah Anda Berjaya Login !!!');
window.location='klinik/home.php'</script>";
}


   if($username==""||$password=="")
   {
      ?>
      <script type="text/javascript">alert("Usename ")</script>
      <?php
}
else if($username==$dbusername&&$password==$dbpassword)
{
   $_SESSION['username']=$username;
echo "<script>alert('Anda Berjaya Login !!!');
window.location='klinik/home.php'</script>";
} 
else if($username==''||$password=='')
{
   
echo "<script>alert('Sila isi tempat kosong!!!');
window.location='index.php'</script>";
} 
else
{ echo "<script>alert('Maaf, username dan password anda salah');
window.location='index.php'</script>";}
}// if 2
else

{
   echo "<script>alert('Maaf, username dan password anda tidak berdaftar');
window.location='index.php'</script>";
}
}//if 1
else
{
   echo "<script>alert('Maaf, username dan password anda salah');
window.location='index.php'</script>";
}


?>
</body>
</html>