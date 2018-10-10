<?php
session_start();
?>
<?php

include 'check_if_logged_in.php'; 
checklogin();

?>

<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="w3.css">

<title>
Scholar Hub: MANIT 
</title>
</head>
<body>
<h1> <b> <center> Scholar Hub: MANIT </center> </b> </h1> <br>
<h2>Welcome to Student's Portal <br> <br> </h2>

<b> <u>Change Password </u>  </b> <br> <br>
<form action="changepass.php" method="POST"> 
Current Password: &nbsp;
<input type="password" name="oldpass"> <br> <br>
New Password:  &nbsp; &nbsp;   &nbsp;
<input type="password" name="newpass"> <br> <br>

<b> <input type="submit" name="Submit" > </b>

</form> 



</body>

</html>