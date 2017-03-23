<!DOCTYPE html>
<html>


<?php
$newpass = $_POST['new_pass'];
$oldpass = $_POST['old_pass'];


?>
<center>
<br> <br>
<h3> Please click the Change Password Button for changing the password </h3>
<a href="changePassword.php?new_pass=<?php echo $newpass; ?>&old_pass=<?php echo $oldpass; ?>"> <button type="button">Clck to change pass </button></a><br/>
<br/>
<a href="login.html" style="text-decoration:none;color:black"><button type="button"> Home </button></a>
</center>
 </html>