<?php
 $servername = "localhost";
 $username = "root";
 $password = "123456";
 $db_name = "btth01_cse485";  
 $conn = new mysqli($servername, $username, $password, $db_name, 3306);
 if($conn->connect_error){
     die("Connection failed".$conn->connect_error);
 }
?>