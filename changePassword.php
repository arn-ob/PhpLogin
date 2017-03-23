<html>
<body>
<center>
<p> Password Change form </p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="login_user";

$new = $_GET['new_pass'];
$old = $_GET['old_pass'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE users SET pass='$new' WHERE pass='$old'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
 ?>
 </center>
 </body>
 </html>