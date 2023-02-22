<?php
   include '../config.php';
   if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from baiviet where ma_bviet = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:article.php");
    }
   }
?>