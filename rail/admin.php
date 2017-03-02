
<?php
include 'connect.php';
?>
<?php
session_start();
if(!$_SESSION['auth1'])
{

header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head lang=" en">
<link rel="stylesheet" type="text/css" href="aboutus.css"></link>
<link rel="stylesheet" type="text/css" href="admin.css"></link>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<title>admin</title>
<style>





</style>
</head>
<body>
	


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">eTrain.com</a>
    </div>
    <ul class="nav navbar-nav">
      
	   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Modify Schedule<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a  href="add.php">Add Train</a></li>
          <li><a  href="remove.php">Remove Train</a></li>
        </ul>
      </li>
      
      <li><a data-toggle="modal" data-target="#SEARCH" href="#">Train Schedule</a></li>
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
<br>
<br>
<div class="container text-center ">
  <div class="jumbotron tp">
    <p><h1>eTrain.com</h1></p>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	
	<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="SEARCH" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>
<h1 align="center" style="font-family:Comic sans ms;color:#003366">Train Schedule</h1>
<form action="test1.php" method="post">

  <label for="fname" style=color:#003366><b>Source&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" name="source" >
  <br><br>
  <label for="lname" style=color:#003366>Destination</b></label>
  <input type="text" name="destination" >
  <br>
  <input type="submit" value="Search" >
  </form></p>
        </div>
	</body>
	</html>