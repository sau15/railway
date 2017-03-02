<! DOCTYPE html>
<html>
<head lang=" en">
<link rel="stylesheet" type="text/css" href="homepage.css"></link>
<!-- <link rel="stylesheet" type="text/css" href="aboutus.css"></link>
<link rel="stylesheet" type="text/css" href="admin.css"></link>-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>book1</title></head>
<style>
body{
	background: #5fb0fc;
	background: -webkit-linear-gradient(#5fb0fc, #002447);
	background: -o-linear-gradient(#5fb0fc, #002447);
	background: -moz-linear-gradient(#5fb0fc, #002447);
	background: linear-gradient(#5fb0fc, #002447);
	height:100%;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">eTrain.com</a>
    </div>
    <ul class="nav navbar-nav">
      
	  <li><a href="notice.html">Notice</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span	class="glyphicon glyphicon-book"> Rules</span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="reservationrules.html">Reservation Rules</a></li>
          <li><a href="refundrules.html">Refund Rules</a></li>
          <li><a href="otherrules.html">Other Rules</a></li>
        </ul>
      </li>
	  
      <li><a href="aboutus.html">About Us</a></li>
	  <li><a href="contactus.html" alt="contact us"><span class="glyphicon glyphicon-envelope"></span>&nbsp Contact Us</a></li>
    </ul>
    
  </div>
</nav>

<?php
include 'connect.php';
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$gender=$_POST['gender'];
$mobno=$_POST['mobno'];
$email=$_POST['email'];
$dob=$_POST['bday'];
$cnn=$_POST['CNN'];
$address=$_POST['address'];
$city=$_POST['cityname'];
$state=$_POST['statename'];
$pin=$_POST['pincode'];
$country=$_POST['countryname'];
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql_user = "INSERT INTO register (firstname,lastname,gender,mobno,email,bday,CNN,address,cityname,statename,pincode,countryname,
userid,password) VALUES('$fname','$lname','$gender','$mobno','$email','$dob','$cnn','$address','$city','$state','$pin','$country','$userid','$password')";


if(mysqli_query($connect, $sql_user)==true)
{
	echo "<br><br><br><h3 style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:40'>Registration successfull! Login for booking.</h3>";
	
}	
else
{
	echo "<br><br><br><h3 style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:40'>Registration unsuccessful,please try again</h3>";
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>