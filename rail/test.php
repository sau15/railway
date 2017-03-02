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
<link rel="stylesheet" type="text/css" href="homepage.css"></link>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<style>
body{
	background: #5fb0fc;
	background: -webkit-linear-gradient(#5fb0fc, #002447);
	background: -o-linear-gradient(#5fb0fc, #002447);
	background: -moz-linear-gradient(#5fb0fc, #002447);
	background: linear-gradient(#5fb0fc, #002447);
	height:100%;
}
</style>
<body>


<div class="container">
  <h2 style="text-align:center">Train Details</h2>
  <table class="table table-bordered" style="color:maroon">
    <thead>
      <tr>
        <th>Train Id</th>
        <th>Train Number</th>
        <th>Source</th>
		<th>Destination</th>
		<th>Fare</th>
		<th>Class</th>
      </tr>
    </thead>
    <tbody>
   

        
	  
<?php
include 'connect.php';
$source=$_POST['source'];
$destination=$_POST['destination'];
$sql = "SELECT * FROM details WHERE source= '$source' and destination= '$destination'";
$result = mysqli_query($connect,$sql);

 while($row=  mysqli_fetch_array($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['trainno']; ?></td>
                <td><?php echo $row['source']; ?></td>
                <td><?php echo $row['destination'] ;?></td>
                <td><?php echo $row['fare'] ;?></td>
				<td><?php echo $row['class'] ;?></td>
               
            </tr>
        <?php
             }


?>  
    </tbody>
  </table>
</div>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<a href="srcdest1.php"><input style="font-weight:bold" class="sub" type="submit" value="Book"></a>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
