<!DOCTYPE html>
<html>
<head>
<title>digital devices</title>
</head>
<body style="background-color:lightblue";>
<h1 align="center">Room Booking</h1>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="Hemanth1";

$room=$_POST['room'];
$furnished=$_POST['furnished'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `book` (`rooms`, `furnished`) VALUES ('$room', '$furnished');";

 $result = mysqli_query($con,$sql);
 
 if($result){
  echo "successfull";
  	
}
  else
   echo "not inserted";
}

?>

<form action="/hem/Booking.php" method="POST">
NO_ROOMS : <input type="number" id="room" name="room" /><br><br>
FURNISHED : <input type="boolean" id="furnished" name="furnished" /><br><br>  
	   <input type="submit" id="submit" name="submit"/><br><hr>
	
</form>
</body>
</html> 