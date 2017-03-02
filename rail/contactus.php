<?php
include 'connect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql_contact = "INSERT INTO contactus (name,email,message) VALUES('$name','$email','$message')";

if(mysqli_query($connect, $sql_contact))
{
	echo "Message Sent!!";
}	
else
{
	echo "Please try again!!";
}

?>
