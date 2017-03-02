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
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a  data-toggle="modal" data-target="#ADMIN" href="#">Admin Login</a></li>
          <li><a  data-toggle="modal" data-target="#USER" href="#">User Login</a></li>
        </ul>
      </li>
      <li><a href="aboutus.html">About Us</a></li>
	  <li><a href="contactus.html" alt="contact us"><span class="glyphicon glyphicon-envelope"></span>&nbsp Contact Us</a></li>
    </ul>
    </div>
</nav>

<?php
include 'connect.php';
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql_users="select * from register where userid='$userid' and password='$password'";

$result_users =mysqli_query($connect,$sql_users);
if(mysqli_num_rows($result_users)<=0)
{
echo "No user found with such email id and password";
}
else
{
	session_start();
	
	$_SESSION['userid'] = $userid;
	$_SESSION['auth']='true';
	header('location:custhome.php');
 
 
}

?>