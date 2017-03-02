<?php
include 'connect.php';
$source=$_POST['source'];
$destination=$_POST['destination'];

$result=mysqli_query($connect,$source,$destintion);
while($row=mysqli_fetch_array($result))
	{
	echo $row[1];
	echo ' ';
	echo $row[2];
	echo '<br>';
	}
?>
