<!DOCTYPE html>
<html>

<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="login_user";

// Create connection
$cn = mysqli_connect($servername, $username, $password,$dbname);

if (!$cn) 
{
  die("could not connect".mysqli_error());
}
else
{
  echo "";
}
echo "<br>";
$user = $_POST['user'];
$pass = $_POST['pass'];
$q="INSERT INTO users(user,pass) VALUES ('$user','$pass')";

if ($cn->query($q)===TRUE){
	echo "New record inserted successfully";
}

else{
	echo("Connection failed: ".mysqli_error());
}
 $cn->close();
 ?>
<br> <br>
<a href="login.html" style="text-decoration:none;color:black"><button type="button"> Home </button></a>
</center>
 </html>