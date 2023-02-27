<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:../login.php");
}
include("header.php");
include '../config.php';
if(isset($_POST['submit'])){
    $ten_tloai = $_POST['ten_tloai'];

    $sql = "insert into theloai (ten_tloai)
    values('$ten_tloai')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:category.php");
    }
}
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
                <form action="add_category.php" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <input type="text" class="form-control" name="ten_tloai" >
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="submit" name="submit" class="btn btn-success">
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
include("footer.php")
?>