<?php
   include '../config.php';
   if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from theloai where ma_tloai = $id";


    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:category.php");
    }
   }
?>