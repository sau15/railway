
<!DOCTYPE html>
<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOMEPAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
.jumbotron{
	background:url("6.jpg") no-repeat center center;
	-webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
	min-height: 550px;}
.footer{
	background:url("footer.jpg") no-repeat center center;
	-webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
	min-height: 300px;}

.glyphicon.glyphicon-thumbs-up {
    font-size: 50px;
}
body
{
background-color:#FAEBD7;

}
  </style>
  </head>
<body>
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">eTrain.com</a>
    </div>
    <ul class="nav navbar-nav">
      
	  <li><a href="notice.html">Notice</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span	class="glyphicon glyphicon-book"> Rules</span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="reservationrules.html">Reservation Rules</a></li>
          <li><a href="refundrules.html">Refund Rules</a></li>
          <li><a href="otherrules.html">Other Rules</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a  data-toggle="modal" data-target="#ADMIN" href="#">Admin Login</a></li>
          <li><a  data-toggle="modal" data-target="#USER" href="#">User Login</a></li>
        </ul>
      </li>
      <li><a href="aboutus.html">About Us</a></li>
	  <li><a href="contactus.html" alt="contact us"><span class="glyphicon glyphicon-envelope"></span>&nbsp Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a  data-toggle="modal" data-target="#REGISTER" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
  
<div class="text-center mn">
  <div class="jumbotron tp">
  <br><br><br><br><br>
    <p><h1>eTrain.com</h1></p>
    <p>Make your booking easier!! </p>
  </div>
</div>

<div class="container mn tp">
  <h3>Other Attractions!!</h3><br>
  <div class="row text-center ">
    <div class="col-sm-4">
      <img src="offer1.jpg" class="img-responsive" style="width:100%" >
      <p><b>Summer offers</b></p>
    </div>
    <div class="col-sm-4">
      <img src="offer2.jpg" class="img-responsive" style="width:100%" >
      <p><b>paytym</b> </p>
    </div>
    <div class="col-sm-4">
       <img src="offer4.png" class="img-responsive" style="width:100%">
      <p><b>Upto 25 to 50% off on hotels</b></p>
    </div>
  </div>
</div>

<div class="container">
 <div class="page-header">
	<h2>Gallery</h2>
  </div>
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
        <img src="1.jpg" width="100%" height="150px">
        
      </div>

      <div class="item">
        <img src="6.jpg"  width="100%" height="150px">
      </div>
    
      <div class="item">
        <img src="3.jpg"  width="100%" height="150px">
        
      </div>

      <div class="item">
        <img src="4.jpg"  width="100%" height="150px">
      </div>
	  
	   <div class="item">
        <img src="5.jpg"  width="100%" height="150px">
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
<br><br>
<div class="container">
<h3>Travel Talk</h3>
<h4>Sharing travel experiences </h4>
  <div class="row text-center">
    <div class="col-sm-4" >
      <img src="t1.jpg" class="img-responsive" style="width:100%;height:220px" >
      <a href="https://en.wikipedia.org/wiki/Taj_Mahal"><h3><b>The Taj Mahal-Agra</b></h3></a>
	  <br><h4>The most spectacular feature is the marble dome that surmounts the tomb.</h4>
    </div>
    <div class="col-sm-4" >
      <img src="t2.jpg" class="img-responsive" style="width:100%">
      <a href="https://en.wikipedia.org/wiki/Marine_Drive,_Mumbai"> <h3><b>Marine Drive-Mumbai</b> </h3></a>
	  <br>
	  <h4> Marine Drive is also known as the Queen's Necklace because, if viewed at night from an elevated point anywhere along the drive, the street lights resemble a string of pearls in a necklace.</h4>
    </div>
    <div class="col-sm-4">
       <img src="t3.jpg" class="img-responsive" style="width:100%;height:220px">
     <a href="https://en.wikipedia.org/wiki/Dagadusheth_Halwai_Ganapati_Temple"> <h3><b>Dhagdusheth Halwai Ganpati temple-Pune</b></h3></a>
	 <h4>The temple is a beautiful construction and boasts a rich history of over 100 years.</h4>
    </div>
  </div>
</div>

<br><br>

<div class="container">
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="USER" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			<h1 align="center" style="font-family:Comic sans ms;color:#003366"> User login</h1>
          <p><form action="authenticate.php" method="post">
			<label for="fname;"><b>Username<b></label>
			<input type="text" id="username" name="userid">
			<label for="lname"><b>Password</b></label>
			<input type="password" id="password" name="password">
			<input type="submit" value="LOG IN" style="border-radius:8px; font-weight:bold ">  
	</form></p>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="ADMIN" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>
		  <h1 align="center" style="font-family:Comic sans ms;color:#003366"> Admin login</h1>
<form action="authenticate1.php" method="post">

  <label for="fname" style=color:#003366><b>Username</label>
  <input type="email" id="username" name="username" >
  <br>
  <label for="lname" style=color:#003366>Password&nbsp</b></label>
  <input type="password" id="password" name="password" >
  <br>
  <input type="submit" value="Submit" >

</form></p>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>





<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="REGISTER" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Enter your details</h4>
        </div>
        <div class="modal-body">
          <p>
		  <form action='register_insert.php' method='post'>
		<p class="b" ><b>
		First name: <br>
		<input type="text" name="firstname" required placeholder="Enter first name"> 
		<br>
		Last name:<br>
		<input type="text" name="lastname" required placeholder="Enter last name"><br>
		</p>
		<p class="b">
		Gender:<br>
		<select name="gender">
			<option value="male" >Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>
		<br><br>
		Mobile No:<br>
		<input type="number" name="mobno" placeholder="Enter mobile number">
		</p>
		<p class="b">
		Email ID:<br>
		<input type="email" name="email" required placeholder="Enter email Id"><br>
		
		DOB:<br>
		<input type="date" name="bday" required placeholder="Enter DOB"><br>
		</p>
		<p class="b">
		Credit card no:<br>
		<input type="text" name="CNN"  placeholder="Enter credit card number"><br>
		</p>
		<p class="b">
		Address: <br>
		<textarea id="styled" rows="4" cols="40" name="address" placeholder="Enter address" >
		</textarea>
		</p>
		<p class="b">
		City:<br>
		<input type="text" name="cityname" placeholder="Enter city name">
		</p>
		<p class="b">
		State:<br>
		<input type="text" name="statename" placeholder="Enter state name">
		</p>
		<p class="b">
		Pincode:<br>
		<input type="number" name="pincode" placeholder="Enter your pincode">
		</p>
		<p class="b">
		Country:<br>
		<input type="text" name="countryname" placeholder="Enter countr name">
		</p>
		<hr>
		<h2 class="c">Login Information</h2>
		<p class="b">
		User ID:<br>
		<input type="text" name="userid" placeholder="Enter user ID">
		</p>
		<p class="b">
		Password:<br></b>
		<input type="password" name="password" placeholder="Enter password">
		<br>
		<br>
		<br>
		<br>
		
		&nbsp &nbsp &nbsp <input type="submit" value="Register">&nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp <input type="reset" value="Clear">
		
	<form></p>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

<div class="container tp text-center footer">
  <h2>Why book with eTrain??</h2><br><br><br><br>
 <div class="row text-center">
    <div class="col-sm-4" >
      <span class="glyphicon  glyphicon-thumbs-up "></span>
	  <br><h3>Trusted</h3>
    </div>
    <div class="col-sm-4" >
      <span class="glyphicon "></span>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon "></span> 
    </div>
  </div>
 
</div>
</body>
</html>