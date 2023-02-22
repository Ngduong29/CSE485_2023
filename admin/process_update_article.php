<?php
include '../config.php';

$id = $_GET['ma_bviet'];
$tieude = $_POST['tieude'];
$ten_bhat = $_POST['ten_bhat'];
$ma_tloai = $_POST['ma_tloai'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$ma_tgia = $_POST['ma_tgia'];
$ngayviet = $_POST['ngayviet'];
$hinhanh = $_POST['hinhanh'];


$sql ="UPDATE baiviet SET tieude='$tieude',ten_bhat='$ten_bhat',ma_tloai='$ma_tloai',tomtat='$tomtat',noidung='$noidung',ma_tgia='$ma_tgia',ngayviet='$ngayviet',hinhanh='$hinhanh' WHERE ma_bviet='$id'";
if (mysqli_query($conn, $sql) == true) {
    header("location:article.php");
} else {
    echo mysqli_error($conn);
}

?>