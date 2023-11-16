<!DOCTYPE html>
<html>
<head>
<title>ONLINE RESTAURENT BOOKING</title>
</head>
<body style="background-color:lightgreen;">
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="restaurent";

$name=$_POST['name'];
$pass=$_POST['pass'];
$number=$_POST['number'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `admin` (`name`, `pass`, `number`) VALUES ('$name','$pass','$number')";

 $result = mysqli_query($con,$sql);
 
 if($result){
  echo "successfully inserted";
  header("location:res_reg.php");}
  else

   echo "not inserted";
}

?>
<h2 align="center">LOGIN</h2>

<form action="/hem/rest.php" method="POST">
USER NAME : <input type="text" id="name" name="name" /><br><br>
PASSWORD : <input type="text" id="pass" name="pass" /><br><br>  
NUMBER	 : <input type="number" id="number" name="number" /><br><br>
            <input type="submit" id="submit" name="submit"/><br><hr>
</form>
</body>
</html> 