
<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
<link href='style.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<form id="form" name="form" method="post" action="pros_insert.php">
   <title>CLINIC</title>
<?php 
include 'config.php';
?>
  <style type="text/css">
      .main_h {
  position: fixed;
  top: 0px;
  max-height: 70px;
  z-index: 999;
  width: 100%;
  padding-top: 12px;
  background: none;
  overflow: hidden;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  opacity: 0;
  top: -100px;
  padding-bottom: 6px;
  font-family: "Montserrat", sans-serif;
}
@media only screen and (max-width: 766px) {
  .main_h {
    padding-top: 25px;
  }
}

.open-nav {
  max-height: 400px !important;
}
.open-nav .mobile-toggle {
  transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
}

.sticky {
  background-color: rgba(255, 255, 255, 0.93);
  opacity: 1;
  top: 0px;
  border-bottom: 1px solid gainsboro;
}

.logo {
  width: 50px;
  font-size: 25px;
  color: #8f8f8f;
  text-transform: uppercase;
  float: left;
  display: block;
  margin-top: 0;
  line-height: 1;
  margin-bottom: 10px;
}
@media only screen and (max-width: 766px) {
  .logo {
    float: none;
  }
}

nav {
  float: right;
  width: 60%;
}
@media only screen and (max-width: 766px) {
  nav {
    width: 100%;
  }
}
nav ul {
  list-style: none;
  overflow: hidden;
  text-align: right;
  float: right;

}
@media only screen and (max-width: 766px) {
  nav ul {
    padding-top: 10px;
    margin-bottom: 22px;
    float: left;
    text-align: center;
    width: 100%;
  }
}
nav ul li {
  display: inline-block;
  margin-left: 35px;
  line-height: 1.5;
  margin: 19px;
    margin-top: -600px;
}
@media only screen and (max-width: 766px) {
  nav ul li {
    width: 100%;
    padding: 7px 0;
    margin: 0;
  }
}
nav ul a {
  color: #888888;
  text-transform: uppercase;
  font-size: 12px;
}

.mobile-toggle {
  display: none;
  cursor: pointer;
  font-size: 20px;
  position: absolute;
  right: 22px;
  top: 0;
  width: 30px;
  -webkit-transition: all 200ms ease-in;
  -moz-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}
@media only screen and (max-width: 766px) {
  .mobile-toggle {
    display: block;
  }
}
.mobile-toggle span {
  width: 30px;
  height: 4px;
  margin-bottom: 6px;
  border-radius: 1000px;
  background: #8f8f8f;
  display: block;
}

.row {
  width: 100%;
  max-width: 940px;
  margin: 0 auto;
  position: relative;
  padding: 0 2%;
}

* {
  box-sizing: border-box;
}

body {
  color: #8f8f8f;
  background: white;
  font-family: "Cardo", serif;
  font-weight: 300;
  -webkit-font-smoothing: antialiased;
}

a {
  text-decoration: none;
}

h1 {
  font-size: 30px;
  line-height: 1.8;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
}

p {
  margin-bottom: 15px;
  font-size: 17px;
  line-height: 2;
}

.content {
  padding: 50px 2% 250px;
}

.hero {
  position: relative;
  background: url(1.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  text-align: center;
  color: #fff;
  padding-top: 110px;
  min-height: 500px;
  letter-spacing: 2px;
  font-family: "Montserrat", sans-serif;
}
.hero h1 {
  font-size: 50px;
  line-height: 1.3;
}
.hero h1 span {
  font-size: 25px;
  color: #1E28FF;
  border-bottom: 2px solid #1E28FF;
  padding-bottom: 12px;
  line-height: 3;
}

@-webkit-keyframes scroll {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }
}
@keyframes scroll {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }
}
input[type=submit] {
    width:150px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 25px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=reset] {
    width:150px;
    background-color: red;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
table,tr,th,td
{
 border-radius: 5px;
  padding: 5px;
  color: black;
  font-family: calibri;
}
table
{
  border-collapse:collapse;
  max-width: 100%;
  max-height: 100%;
border:0px solid white; 
}
td {
  text-align: center;
   
}
tr{
  background-color: #ddd;
}
tr:hover{
  background-color: #CACFD2    ;
}
th{

    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    
    font-size: 15px;
    
}
input[type=text]
{
width: 250px;
    padding: 10px 5px;
    margin: auto;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date]
{
width: 250px;
    padding: 10px 5px;
    margin: auto;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number]
{
width: 250px;
    padding: 10px 5px;
    margin: auto;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

select {

    width: 250px;
    padding: 10px 5px;
    padding: 10px 5px;
    margin: auto;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.tble tr,th,td
{
  border: 1px solid white;
  padding: 25px;
  color: black;
}
.tble
{
  border-collapse:collapse;

}
.tble td {
  text-align: center;
}


.tble th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}

.tble td button a{
  text-decoration: none;
  color: black;
}
.editbtn{
    width:80px;
    background-color: #4CAF50;
    color: white;
    padding: 5px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}
.deletebtn{
    width:80px;
    background-color: #E04040 ;
    color: white; 
    padding: 5px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}
hr{
  color: black;
}
  </style>

<header class="main_h">

    <div class="row">
        <a class="logo" href="home.php" style="  padding-top: 13px;
">CLINIC</a>

        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav>
            <ul>
                              <li><a href="home.php">Home</a></li>

                <li><a href="home.php">Daftar</a></li>
                <li><a href=".sec01">Data</a></li>
                                                <li><a href="try.html">About</a></li>

                <li><a href=".sec03"></a></li>
                <li><a href="../index.php">Sign Out</a></li>
            </ul>
        </nav>

    </div> <!-- / row -->

</header>

<div class="hero">

    <h1><span>WELCOME TO</span><br>THE CLINIC</h1>

    

</div>
<div class="content"><center>
  <p>
  
    <h1 class="sec01"><center>PAPARAN DATA</center></h1>

<center>
  <br>
  <br>
  <br>
<table width="1150" height="156" class="tble">
<tr>
<th width="290">NAMA PENUH</th>
<th width="138">KAD PENGENALAN</th>
<th width="156">PEKERJAAN</th>
<th width="97">JANTINA</th>
<th width="149">TARIKH</th>

<th width="253">TINDAKAN</th>


</tr>

<?php
$ambil=mysql_query("SELECT * FROM form ORDER BY tarikh DESC" );

while($data=mysql_fetch_array($ambil)) {
?>

<tr>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['nokp']; ?></td>
<td><?php echo $data['pekerjaan']; ?></td>
<td><?php echo $data['jantina']; ?></td>
<td><?php echo $data['tarikh']; ?></td>




<td><a class="editbtn" href="form_update.php?id=<?php echo $data['id_kad'];?>">EDIT</a> | 
    <a class="deletebtn" href="pros_delete.php?id=<?php echo $data['id_kad'];?>">DELETE</td>
</tr>

<?php 
}
?>

</table>

</center>


</div>
</center>
<br>
<br>
<br>
<br>

<hr>
</form>
</div></p><p><br><br></p>
    <h1 class="sec03"></h1>
    <p></p>
    <h1 class="sec04"></h1>
    <p></p>
</div>
<script type="text/javascript">
    // Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});
</script>