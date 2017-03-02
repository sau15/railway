<?php
include 'connect.php';
session_start();
?>
<!doctype html>
<html lang="en-IN">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="contactus.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<style>
body {background-image:url("7.jpg");
background-repeat:no-repeat;
background-size:100%;
background-attachment:fixed}

</style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
     
	  <li><a href="notice.html">Notice</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Rules <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="reservationrules.html">Reservation Rules</a></li>
          <li><a href="refundrules.html">Refund Rules</a></li>
          <li><a href="otherrules.html">Other Rules</a></li>
        </ul>
      </li>
	  <li ><a href="aboutus.html">About Us</a></li>
	  <li class="active"><a href="contactus.html">Contact Us</a></li>
    </ul>
  </div>
</nav>
</div>

<br><br><br><br>
<p style="color:#FAEBD7;text-align:center;font-size:300%">Have a Question?</p>
<h2 style="color:#FAEBD7; text-align:center;">Get in touch !</h2>
<div class="container"> 
<div class="n" style=color:#FAEBD7>We are here to answer any questions you may have
 about your experiences. Reach out to us and we'll
 respond as soon as we can.</div><br>
 <form action="contactus.php" method="post">
 <p class="tf" style=color:#FAEBD7>Name:</p>
 <input type="text" name="name" autocomplete="">
 <p class="tf"style=color:#FAEBD7>Email:</p>
 <input type="email" name="email" autocomplete="email">
 <p class="tf"style=color:#FAEBD7>Message:</p>
 <textarea id="styled" rows="6" cols="40" name="message"></textarea><br>
&nbsp &nbsp <input class="sub" type="submit" value="Submit" style="color:maroon;border-radius:5px ;background-color: #FAEBD7"> &nbsp &nbsp &nbsp &nbsp
 <input class="sub" type="reset" value="Reset" style="color:maroon;border-radius:5px ;background-color: #FAEBD7">
 </form>

 </div>
</body>
</html>