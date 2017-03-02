<!DOCTYPE html>
<?php
include 'connect.php';
include 'Aheader.php';
?>
<html>
<head lang=" en">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="srcdest1.css" type="text/css">
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
	
</style>
</head>
<body>
	
	<div style="color:black" class="t">
		
	
<form action='addtrain.php' method='post'>
		<p class="b" ><b>
		Train no:<br>
		<input type="number" name="trainno" required placeholder="Train no..."> 
		<br>
		Enter Source:<br>
		<input type="text" name="source" required placeholder="Source Name..."><br>
		</p>
		<p class="b">
		Enter Destination:<br>
		<input type="text" name="destination" required placeholder="Destination Name..."><br>
		</p>
		Enter Fare:<br>
		<input type="number" name="fare" placeholder="Fare...">
		</p>
		Enter Class:<br>
		<input type="text" name="class" placeholder="Class...">
		</p>
		
		
		&nbsp &nbsp &nbsp <input type="submit" value="Add">&nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp <input type="reset" value="Clear">
		
	</form>
	
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
	</html>