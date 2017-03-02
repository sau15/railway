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
<?php
include 'connect.php';
include 'Aheader.php';
if(!$_SESSION['auth1'])
{

header('location:index.php');
}
$trainno=$_POST['trainno'];

$sql_user = "DELETE FROM details WHERE trainno='$trainno'";
if(mysqli_query($connect, $sql_user)==true)
{
	echo "<p style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:28'>Your Request has been successfully processed</p>";
	
}	
else
{
	echo "<p style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:28'>Registration unsuccessful,please try again</p>";
}
?>
</body>
</html>