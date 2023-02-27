<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:../login.php");
}
include '../config.php';
include("header.php");
        $id = $_GET['ma_tloai'];
        $ten_tloai = $_POST['ten_tloai'];
        $SLBaiViet = $_POST['SLBaiViet'];
        

        $sql = "UPDATE theloai SET ten_tloai = '$ten_tloai', SLBaiViet= '$SLBaiViet' where ma_tloai = '$id'";
        if (mysqli_query($conn, $sql) == true) {

            header("location:category.php");
        } else {
            echo mysqli_error($conn);
        }
   
include("footer.php");
?>