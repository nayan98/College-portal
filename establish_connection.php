<?php
function connect(){
 $host="localhost";
 $username="id4392901_3coders";
 $pass="1998password1998";
 $db="id4392901_student";
  
 $conn = new mysqli($host, $username, $pass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 

return $conn;
}

function testandcheck($var)
{
    $var=trim($var);
    $var=htmlspecialchars($var);
    
    return $var;
}

?>