
<?php
include 'connect.php';
include 'header.php';

if(!$_SESSION['auth'])
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
<title>customer</title>
<style>
/* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 10px;
	  padding-top: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set 100% height */
    .sidenav {
      padding-top: 20px;
	  padding-left:10px;
      background-color: transparent;
	 
      height: 100%;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 10px;
      }
      .row.content {height:auto;}
    }
a.m{
        background-color: #FAEBD7;
		color: maroon;
		padding: 15px 30px;
		text-align: center;
		text-decoration: none;
		border-radius:5px;
		
		width:100%;
}
a.m:hover, a.m:active {
    background-color: white;
}



</style>
</head>
<body>
	



<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p> <a class="m" data-toggle="modal" data-target="#SEARCH" href="#"><b>Train Schedule</b></a></p><br> 
	  <p>  <a class="m" href="spcltrain1.html" ><b>Special Trains</b></a></p><br>
	  <p><a class="m" href="srcdest1.php"><b>Book A Ticket<b></a></p><br>
	  <p><a class="m" href="bookeddetails.php"><b>Check booked <b></a></p><br>
	  <p><a class="m" href="cancel.php"><b>Cancel Ticket<b></a></p><br>
    </div>
	<div class="col-sm-8 text-left">
       <h1><b>Welcome To Easytrip.com</h1>
	  <br>
	  <br>
	  <h2 align=center>Quotes</b></h2>
	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="cust1.jpg" width="100%" height="25px">
        
      </div>

      <div class="item">
        <img src="cust2.jpg"  width="100%" height="25px">
      </div>
    
      <div class="item">
        <img src="cust3.jpg"  width="100%" height="25px">
        
      </div>

      <div class="item">
        <img src="cust4.png"  width="100%" height="25px">
      </div>
	  
	   <div class="item">
        <img src="cust5.png"  width="100%" height="25px">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
	
	
	
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
<form action="test.php" method="post">

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
