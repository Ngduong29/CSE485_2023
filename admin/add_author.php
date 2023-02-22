<?php
include("header.php");
include '../config.php';
if(isset($_POST['submit'])){
    $ten_tgia = $_POST['ten_tgia'];

    $sql = "insert into tacgia (ten_tgia)
    values('$ten_tgia')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:author.php");
    }
}

?>

      <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới tác giả</h3>
                <form action="add_author.php" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblatName">Tên tác giả</span>
                        <input type="text" class="form-control" name="ten_tgia" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblatName">Hình tác giả</span>
                        <input type="text" class="form-control" name="hinh_tgia_tgia" >
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="submit" name="submit" class="btn btn-success">
                        <a href="author.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
include("footer.php")
?>  