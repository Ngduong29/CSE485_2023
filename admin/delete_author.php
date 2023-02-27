
<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:../login.php");
}
   include '../config.php';
   if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from tacgia where ma_tgia = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:author.php");
    }
   }
?>