<html>
<!DOCTYPE html>
<html>
<head lang=" en">
<link rel="stylesheet" type="text/css" href="aboutus.css"></link>
<link rel="stylesheet" type="text/css" href="admin.css"></link>
<link rel="stylesheet" type="text/css" href="homepage.css"></link>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">easyTrip.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="#">Home</a></li>
	  <li><a href="notice.html">Notice</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Rules <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="reservationrules.html">Reservation Rules</a></li>
          <li><a href="refundrules.html">Refund Rules</a></li>
          <li><a href="otherrules.html">Other Rules</a></li>
        </ul>
      </li>
	  <li><a href="aboutus.html">About Us</a></li>
	  
	  <li><a href="contactus.html">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	
      <li><a  href="logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2 style="text-align:center">Train Details</h2>
  <table class="table table-bordered">
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
include 'connect.php';
$source=$_POST['source'];
$destination=$_POST['destination'];
$sql = "SELECT * FROM bookedtickets WHERE'";
$result = mysqli_query($connect,$sql);

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
</div>