<!DOCTYPE html>
<?php
include 'connect.php';
include 'Aheader.php';
?>

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
body{
	background: #5fb0fc;
	background: -webkit-linear-gradient(#5fb0fc, #002447);
	background: -o-linear-gradient(#5fb0fc, #002447);
	background: -moz-linear-gradient(#5fb0fc, #002447);
	background: linear-gradient(#5fb0fc, #002447);
	height:100%;
}
input[type=submit],[type=reset]
	{
	background-color:#003366;
	color: white;
	border-radius:10px;
	border: 2px solid #003366;
	padding: 10px 25px;}
input[type=submit],[type=reset]
	{
	background-color:#003366;
	color: white;
	border-radius:10px;
	border: 2px solid #003366;
	padding: 10px 25px;}
	

</style>
</head>
<body>
	

<br><br><br><br>
	<div style="color:black" class="t">
		
	
<form action='removetrain.php' method='post'>
		<p class="b" ><b>
		Train no:<br>
		<input type="number" name="trainno" required placeholder="Train no..."> 
		<br>
		&nbsp &nbsp &nbsp <input type="submit" value="Remove">&nbsp &nbsp &nbsp 

		
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	</body>
	</html>