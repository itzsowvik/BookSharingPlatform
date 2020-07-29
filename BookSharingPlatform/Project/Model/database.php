<?php
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "project";
    $con = new mysqli($servername, $db_username, $db_password, $db_name);

   if($con->connect_error){
    die("Connection Failed: ".$con->connect_error);
   } 
?>