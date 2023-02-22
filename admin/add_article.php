<?php
include("header.php");
include '../config.php';
if(isset($_POST['submit'])){
    $tieude = $_POST['tieude'];
    $ten_bhat = $_POST['ten_bhat'];
    $ma_tloai = $_POST['ma_tloai'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $ma_tgia = $_POST['ma_tgia'];
    $ngayviet = $_POST['ngayviet'];

    $sql = "INSERT INTO baiviet ( tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet) 
        VALUES ( '$tieude', '$ten_bhat', '$ma_tloai', '$tomtat', '$noidung', '$ma_tgia', '$ngayviet')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:article.php");
    }
}
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm thông tin bài viết</h3>
                <form action="" method="post">
                    <div class="form-group mt-3">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="tieude">
                    </div>

                    <div class="form-group mt-3">
                        <label>Tên bài hát</label>
                        <input type="text" class="form-control" name="ten_bhat" >
                    </div>

                    <div class="form-group mt-3">
                        <label>Tên thể loại</label>
                        <select class="form-select" aria-label="Default select example" id="ten_tloai" name="ma_tloai" >
                        <?php
                            include '../config.php';
                            $sql = "SELECT ma_tloai, ten_tloai FROM theloai";
                            $result = mysqli_query($conn,$sql);

                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value='" . $row['ma_tloai'] . "'>" . $row['ten_tloai'] . "</option>";
                            }

                            mysqli_close($conn);
                            ?>
                            </select>
                    </div>

                    <div class="form-group mt-3">
                    <label>Tóm tắt</label>
                        <input type="text" class="form-control" name="tomtat" >
                    </div>

                    <div class="form-group mt-3">
                    <label>Nội dung</label>
                        <input type="text" class="form-control" name="noidung" >
                    </div>

                    <div class="form-group mt-3">
                    <label>Tác giả</label>
                        <select class="form-select" aria-label="Default select example" id="ten_tgia" name="ma_tgia" >
                        <?php
                            include '../config.php';
                            $sql = "SELECT ma_tgia, ten_tgia FROM tacgia";
                            $result = mysqli_query($conn,$sql);

                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value='" . $row['ma_tgia'] . "'>" . $row['ten_tgia'] . "</option>";
                            }

                            mysqli_close($conn);
                            ?>
                             </select>
                    </div>

                    <div class="form-group mt-3">
                    <label>Ngày viết</label>
                        <input type="date" class="form-control" name="ngayviet" >
                    </div>

                    <div class="form-group mt-3">
                    <label>Hình ảnh</label>
                        <input type="text" class="form-control" name="hinhanh" >
                    </div>

                    <div class="form-group  float-end mt-3">
                        <input type="submit" name="submit" value="Thêm" class="btn btn-success">
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
include("footer.php")
?>  
