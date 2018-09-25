<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CLINIC</title>
  <form action="pros_login.php" id="login" name="login" method="post">
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="materialContainer">


   <div class="box">

      <div class="title">LOGIN</div>

      <div class="input">
         <label for="name">Username</label>
         <input type="text" name="username" id="name" required>
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input type="password" name="password" id="pass" required>
         <span class="spin"></span>
      </div>
<br>
<p>
          <input type="checkbox" style="width: 16%;" onclick="myFunction()">Show Password

     <div class="button login">
         <button><span>SUBMIT</span> </button>
      </div>


   </div>
</form>
  <form action="pros_insert.php" id="login" name="login" method="post">

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">SIGN UP</div>

      <div class="input">
         <label for="regname">Username</label>
         <input type="text" name="username" id="regname" required>
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" name="password" id="regpass" required>
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input type="password" name="password" id="reregpass" required>
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>NEXT</span></button>
     
      </div>


   </div>

</div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

<script>//coding untuk show password
function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>



</body>

</html>
