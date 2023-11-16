<!DOCTYPE html>
<html>
<head>
<title>digital devices</title>
</head>
<body style="background-color:lightpink";>
<h1 align="center">LOGIN PAGE FOR LIBRARY</h1><hr>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="Hemanth1";

$user=$_POST['user'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `login` (`user`, `pass`, `cpass`) VALUES ('$user', '$pass', '$cpass');";

 $result = mysqli_query($con,$sql);
 
 if($result){
  echo "successfully logged in";
  	header("location:regi.php");
}
  else
   echo "not inserted";
}
?>

<form action="/hem/login.php" method="POST">
USER NAME : <input type="text" id="user" name="user" /><br><br>
PASSWORD : <input type="password" id="pass" name="pass" /><br><br>  
CNF_PASS :	   <input type="password" id="cpass" name="cpass" /><br><br> 
	   <input type="submit" id="submit" name="submit"/><br><hr>
	
</form>
<a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=digital&table=signin">go</a>
</body>
</html> 