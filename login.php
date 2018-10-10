<?php
session_start();
?>
<?php
include 'establish_connection.php';

$conn=connect();
$_SESSION["sno"]=testandcheck($_POST['sno']);
$snum=$_SESSION["sno"];
$pass=htmlspecialchars($_POST['pass']);
$sql = "SELECT * FROM Sheet1 where sno=$snum and pass='$pass'";
$result= mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==0)
{  echo("<script>");
  echo(" alert(\"Invalid scholar number or password... Please try again\");");
  echo("window.location.href = 'studentlogin.html'");
  echo("</script> ");
    
    
 
}

else {
         $row= mysqli_fetch_assoc($result);
        $_SESSION["name"]=$row["name"];
        $_SESSION["dob"]=$row["dob"];
        $_SESSION["cno"]=$row["cno"];
        $_SESSION["res_status"]=$row["res_status"];
        $_SESSION["dept"]=$row["dept"];
        $_SESSION["sem"]=$row["sem"];
        

echo("<script>window.location.href = 'dashboardfinal.php'</script>");
 
 
}



?>




