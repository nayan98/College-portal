<?php 
session_start();
?>
<?php

include "establish_connection.php";
$conn=connect();
$snum=$_SESSION["sno"];
if(empty($_SESSION["sno"]))
   {
       echo("<script> alert(\"Don't be oversmart... Please login\"); window.location.href = 'studentlogin.html';  </script>");
    }
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
$sql1 = "SELECT * FROM Sheet1 where sno=$snum and pass='$oldpass' ";
$result = mysqli_query($conn,$sql1);


if(mysqli_num_rows($result)==0)
   {
   echo(" <script>  alert(\"Update Unsuccesful... Please Check your old password and try again\");  
  window.location.href = 'settings.php';
   
   </script>");
   
   }
   
   else
   {   
       $sql = "UPDATE Sheet1  SET pass='$newpass' WHERE sno=$snum and pass='$oldpass'";
       if(mysqli_query($conn, $sql))
       echo("<script> alert(\"Update Successful\");   window.location.href = 'studentlogin.html'; </script>\n");
       
   }







?>