
<html>
<!DOCTYPE html>
<html>
<head lang=" en">
<link rel="stylesheet" type="text/css" href="aboutus.css"></link>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
input[type=date],[type=text],[type=number]  
   { 
    width: 50%;
    padding: 10px 20px;
    margin: 8px 0;
	color:#003366;
    box-sizing: border-box;
	background-color:#A0CFEC;
    border-radius: 4px;
    }
.table{
	width:80%;
	
}
.bs{
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
include 'header.php';
if(!$_SESSION['auth'])
{

header('location:index.php');
}
$userid =  $_SESSION['userid'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$trainno = $_POST['trainno'];
$nooftickets = $_POST['nooftickets'];
$date=$_POST['date'];
$today= date("Y-m-d H:i:s");
if($today <= $date)
{

$s="SELECT * FROM details WHERE source='$source' AND destination='$destination' AND trainno='$trainno'";
$result1 = mysqli_query($connect,$s);
if(mysqli_num_rows($result1)<=0)
{
echo "<p style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:28'>No such train!</p>";
echo "<h4 style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms'>Check the train schedule before booking and enter the correct details!</h4><br><br><br>";
echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button class='bs' onclick=window.open('custhome.php','_self','')>Check Train Schedule</button>";
}
else
{
$sql_ticket = "INSERT INTO bookedtickets (userid,source,destination,trainno,nooftickets,date) VALUES('$userid','$source','$destination','$trainno','$nooftickets','$date')";

if(mysqli_query($connect, $sql_ticket)==true)
{
	echo "<h2 style='font-weight:bold; text-align:center; color:black'>Your Seat has been booked</h2><br><br>";

	$sql = "SELECT * FROM bookedtickets WHERE userid='$userid' AND date='$date' AND trainno='$trainno'";
	$result = mysqli_query($connect,$sql);
?>
	
	<table class="table table-bordered" style="color:maroon">
			<thead>
			<tr>
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
 while($row=  mysqli_fetch_array($result))
 {
?>
				 
			<tr>
			<td><?php echo $row['userid']; ?></td>
			<td><?php echo $row['source']; ?></td>
			<td><?php echo $row['destination']; ?></td>
			<td><?php echo $row['trainno'] ;?></td>
			<td><?php echo $row['nooftickets'] ;?></td>
			<td><?php echo $row['date'] ;?></td>
			</tr>
<?php
  }
?>  
			</tbody>
			</table>
<?php
}	
else
{
	echo "<a href='srcdest1.html' style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms;>Unable to book! Try booking again!</a>";
}
}
}
else{
	echo "<p style='color:black; text-align:center; font-weight:bold; font-family:Cosmic sans ms; font-size:28'>Invalid date</p>";
}
?>
</body>
</html>