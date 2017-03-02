<?php
include 'connect.php';
include 'header.php';
if(!$_SESSION['auth'])
{

header('location:index.php');
}
?>
<! DOCTYPE html>
<html>
<head lang=" en">
<link rel="stylesheet" type="text/css" href="srcdest1.css"></link>
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

<body>
  
<h1>Book Tickets !</h1>
<div>
<form action="book_register.php" method="post">
<br><br>
<h5 style="color:black;font-weight:bold">Source : &nbsp</h5>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    
<input type="text" name="source" placeholder="Enter Source">
<br><br>
<h5 style="color:black;font-weight:bold">Destination : &nbsp</h5> 
&nbsp &nbsp &nbsp &nbsp &nbsp   
<input type="text" name="destination" placeholder="Enter Destination" required >
<br><br>
<h5 style="color:black;font-weight:bold">Train Number :&nbsp &nbsp &nbsp &nbsp &nbsp </h5> 
<input type="number" name="trainno" placeholder="Enter Train Number" required >
<br><br>
<h5 style="color:black;font-weight:bold">Number of Tickets :&nbsp </h5> 
<select name="nooftickets" required>
<option selected="selected" disabled="disabled">--Please Select--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option></select>
<br><br>
<h5 style="color:black;font-weight:bold">Journey Date : &nbsp  &nbsp &nbsp &nbsp &nbsp </h5>
<input name="date" id="e" style="width: 50%; padding: 10px 20px; margin: 8px 0; color:#003366; box-sizing: border-box; background-color:#A0CFEC; border-radius: 4px;" required>
<script>
document.getElementById('e').value = new Date().toISOString().substring(0, 10);
</script>
<br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input style="font-weight:bold" class="sub" 
type="submit" value="Book">
&nbsp &nbsp &nbsp &nbsp <input  style="font-weight:bold" class="res" type="reset" value="Clear">
</div>
<br><br><br><br>
</body>
</html>