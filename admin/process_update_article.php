<?php
include '../config.php';

if (isset($_POST['submit'])) {
    $ma_bviet= $_POST['ma_bviet'];
    $tieude = $_POST['tieude'];
    $tieude = addslashes($tieude);
    $ten_bhat = $_POST['ten_bhat'];
    $ten_bhat = addslashes($ten_bhat);
    $theloai = $_POST['ten_tloai'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $tacgia = $_POST['ten_tgia'];
    $ngayviet = $_POST['ngayviet'];

    $sql_up = "SELECT hinhanh FROM baiviet WHERE ma_bviet = '$ma_bviet'";
    $result_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($result_up);
    if ($_FILES['hinhanh']['name'] == '') {
        $hinhanh = $row_up['hinhanh'];
    } else {
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $target = 'C:/xampp/htdocs/btth01/images/songs/' . basename($_FILES['hinhanh']['name']);
        move_uploaded_file($hinhanh_tmp, $target);
    }

    $sql_checkId_tloai = "SELECT ma_tloai FROM theloai WHERE ten_tloai = '$theloai'";
    $resultIdtheloai = mysqli_query($conn, $sql_checkId_tloai);
    if (mysqli_num_rows($resultIdtheloai) > 0) {
        $rowIdtheloai = mysqli_fetch_assoc($resultIdtheloai);
        $category_id = $rowIdtheloai['ma_tloai'];
    } else {
        die("Không tìm thấy thể loại có tên '$theloai'");
    }

    $sql_checkId_tgia = "SELECT ma_tgia FROM tacgia WHERE ten_tgia = '$tacgia'";
    $resultIdtacgia = mysqli_query($conn, $sql_checkId_tgia);
    if (mysqli_num_rows($resultIdtacgia) > 0) {
        $rowIdtacgia = mysqli_fetch_assoc($resultIdtacgia);
        $author_id = $rowIdtacgia['ma_tgia'];
    } else {
        die("Không tìm thấy tác giả có tên '$tacgia'");
    }

    $sql = "UPDATE baiviet SET tieude='$tieude',ten_bhat='$ten_bhat',ma_tloai='$category_id',tomtat='$tomtat',noidung='$noidung',ma_tgia='$author_id',ngayviet='$ngayviet',hinhanh='$hinhanh' WHERE ma_bviet='$ma_bviet'";
    $result = mysqli_query($conn, $sql);
    header("location:article.php");

}

?>