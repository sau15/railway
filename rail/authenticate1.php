<?php
include 'connect.php';
$admin=$_POST['username'];
$password=$_POST['password'];
$sql_admin="select * from admin where username='$admin' and password='$password'";

$result_admin =mysqli_query($connect,$sql_admin);
$match = mysqli_num_rows($result_admin);
if($match > 0)
{
   
    
	session_start();
	$_SESSION['username'] = $admin;
	$_SESSION['auth1']='true';
	header('location: admin.php');
	
 }
 else{
     echo "Only admin login!";
 }
?>