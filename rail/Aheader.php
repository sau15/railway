<!DOCTYPE html>
<html>
<head lang=" en">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </head>

<?php
session_start();
?>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >eTrain.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin.php">Home</a></li>
      
	  <li><a href="Abookedoutput.php">Check Bookings</a></li>
	  
	  <li><a href="contactoutput.php">Check Contact Us</a></li>
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<li><?php
		if($_SESSION["auth1"])
		echo "<div style ='color:white'><br>&nbsp Welcome &nbsp ".$_SESSION['username']."&nbsp</div>";
		?></li>
	<li><a  href="logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
</body>