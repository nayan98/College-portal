<?php

function checklogin(){
if(empty($_SESSION["sno"]))
   {
       echo("<script> alert(\"Don't be oversmart... Please login\"); window.location.href = 'studentlogin.html';  </script>");
    }
}
?>