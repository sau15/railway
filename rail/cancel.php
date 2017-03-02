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
input[type=number]  
   { 
    width: 50%;
    padding: 10px 20px;
    margin: 8px 0;
	color:#003366;
    box-sizing: border-box;
	background-color:#A0CFEC;
    border-radius: 4px;
    }
div {
	background-color:transparent;
	margin-left:400px;}
h1{
	text-align:center;
	}
</style>  

<body>
  
<h1>Cancel Ticket!</h1><br>
<h4 style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms'>Enter the ticket id of the ticket you want to cancel!</h4>
<div>
<form action="canceledticket.php" method="post">
<br>
<h5 style="color:black;font-weight:bold">Ticket Id : &nbsp</h5> 
<input type="number" name="id" placeholder="Enter ticket Id">  <br><br> 
<input style="font-weight:bold" class="sub" 
type="submit" value="Confirm Cancelation">
&nbsp &nbsp &nbsp &nbsp <input  style="font-weight:bold" class="res" type="reset" value="Clear">
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
















