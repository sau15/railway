<?php
include 'connect.php';
include 'Aheader.php';
if(!$_SESSION['auth1'])
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
.table{
	width:90%;
	margin-left:90px;
}
</style>  
<body>
<h1 style="text-align:center">Your Train Details Are!</h1>
<?php
$b="SELECT * FROM bookedtickets";
$result2 = mysqli_query($connect,$b);
if(mysqli_num_rows($result2)<=0)
{
	echo "<br><br><br><h3 style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:100'>You have not booked any ticket yet!</h3>";
}
else
{
?>
<br>
<table class="table table-bordered" style="color:maroon">
			<thead>
			<tr>
			<th>Ticket Id</th>
			<th>User Id</th>
			<th>Source</th>
			<th>Destination</th>
			<th>Train Number</th>
			<th>No of tickets</th>
			<th>Date</th>
		
			</tr>
			</thead>
			<tbody>
<?php
while($row=  mysqli_fetch_array($result2))
 {
?>
				 
			<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['userid']; ?></td>
			<td><?php echo $row['source']; ?></td>
			<td><?php echo $row['destination']; ?></td>
			<td><?php echo $row['trainno'] ;?></td>
			<td><?php echo $row['nooftickets'] ;?></td>
			<td><?php echo $row['date'] ;?></td>
			</tr>
<?php
  }
}
?>  
			</tbody>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>