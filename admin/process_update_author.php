<?php
include '../config.php';
include("header.php");
        $id = $_GET['ma_tgia'];
        $ten_tgia = $_POST['ten_tgia'];
      
        
        $sql1 = "UPDATE tacgia SET ten_tgia = '$ten_tgia' where ma_tgia = '$id'";
        if (mysqli_query($conn, $sql1) == true) {

            header("location:author.php");
        } else {
            echo mysqli_error($conn);
        }
   
include("footer.php");
?>