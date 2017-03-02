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
  <title>cancel</title></head>
<style>
body{
	background: #5fb0fc;
	background: -webkit-linear-gradient(#5fb0fc, #002447);
	background: -o-linear-gradient(#5fb0fc, #002447);
	background: -moz-linear-gradient(#5fb0fc, #002447);
	background: linear-gradient(#5fb0fc, #002447);
	height:100%;
}
.table{
	width:80%;
	margin-left:100px;
}
</style>  
<body>                                           
<br><br>
<?php
$id = $_POST['id'];
$userid = $_SESSION['userid'];
$asd = "DELETE FROM bookedtickets WHERE userid='$userid' AND id='$id'";
$deleted = mysqli_query($connect,$asd);
if(!$deleted)
{
	echo "<br><br><br><h3 style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:100'> No Such ticket id! Please try again!</h3>";
}
else{
echo "<br><br><br><h3 style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:100'>Your Request has been successfully processed";
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>