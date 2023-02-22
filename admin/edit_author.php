<?php
include("header.php");
include '../config.php';
$id = $_GET['id'];
$sql = " SELECT * FROM tacgia where ma_tgia = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tác giả</h3>
            <form action="process_update_author.php" method="post">

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblTgId">Mã tác giả</span>
                    <input type="text" class="form-control" name="ma_tgia" id="ma_tgia" value="<?php echo $row['ma_tgia'] ?>"
                        readonly>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblTgName">Tên tác giả</span>
                    <input type="text" class="form-control" name="ten_tgia" id="ten_gia"
                        value="<?php echo $row['ten_tgia'] ?>">
                </div>

                <div class="form-group  float-end ">
                    <input type="submit" name="save" value="Lưu lại" class="btn btn-success">
                    <a href="author.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include("footer.php")
    ?>