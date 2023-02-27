<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:../login.php");
}
include("header.php");
include '../config.php';
$id = $_GET['id'];
$sql = " SELECT * FROM theloai where ma_tloai = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
            <form action="process_update_category.php?ma_tloai=<?php echo $id ?> " method="post">

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                    <input type="text" class="form-control" name="ma_tloai" id="ma_tloai" value="<?php echo $row['ma_tloai'] ?>"
                        readonly>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                    <input type="text" class="form-control" name="ten_tloai" id="ten_tloai"
                        value="<?php echo $row['ten_tloai'] ?>">
                </div>

                <div class="form-group  float-end ">
                    <input type="submit" name="save" value="Lưu lại" class="btn btn-success">
                    <a href="category.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include("footer.php")
    ?>