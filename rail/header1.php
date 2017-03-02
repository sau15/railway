<!DOCTYPE html>
<html>
<head lang=" en">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="homepage.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </head>

<?php
session_start();
?>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index1.php">eTrain.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="custhome.php">Home</a></li>
	  <li><a href="notice.html">Notice</a></li>
      <?php
	  if(!$_SESSION["auth"])
	  {
		  ?>
	  <li class="dropdown"><?php echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-log-in'></span> Login<span class='caret'></span></a>?>"; ?>
        <ul class="dropdown-menu">
          <li><?php echo"<a  data-toggle='modal' data-target='#ADMIN' href='#'>Admin Login</a>"; ?> </li>
          <li><?php echo"<a  data-toggle='modal' data-target='#USER' href='#'>User Login</a>"; ?> </li>
        </ul>
	  <?php }?>
      </li>
      <li><a href="aboutus.html">About Us</a></li>
	  <li><a href="contactus.html" alt="contact us"><span class="glyphicon glyphicon-envelope"></span>&nbsp Contact Us</a></li>
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<li><?php
		if($_SESSION["auth"])
		{
		echo "<div style ='color:white'><br>&nbsp Welcome &nbsp ".$_SESSION['userid']."&nbsp</div>";
		?></li>
	<li><?php
		echo "<a  href='logout.php'><span class='glyphicon glyphicon-user'></span> Log Out</a>";
		?></li>
		<?php 
		}
		else
		{
			?>
      <li><?php
	  echo "<a  data-toggle='modal' data-target='#REGISTER' href='#'><span class='glyphicon glyphicon-user'></span> Sign Up</a>";
		}
		?> </li>
    </ul>
  </div>
</nav>
</body>
</html>