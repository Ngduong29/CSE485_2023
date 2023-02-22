<?php
include("header.php");
include '../config.php';
$id = $_GET['id'];
$sql = " SELECT * FROM baiviet where ma_bviet = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin bài viết</h3>
            <form action="process_update_article.php?ma_tloai=<?php echo $id ?>" method="post">
                <div class="form-group mt-3">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" name="tieude" value="<?php echo $row['tieude'] ?>">
                </div>

                <div class="form-group mt-3">
                    <label>Tên bài hát</label>
                    <input type="text" class="form-control" name="ten_bhat" value="<?php echo $row['ten_bhat'] ?>">
                </div>

                <div class="form-group mt-3">
                    <label>Tên thể loại</label>
                    <select class="form-select" aria-label="Default select example" name="ma_tloai"
                        value="<?php echo $row['ten_tloai'] ?>">
                        <?php
                        include '../config.php';
                        $sql = "SELECT * FROM theloai";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($theloai = $result->fetch_assoc()) {

                                $selected = ($theloai['ma_tloai'] == $row['ma_tloai']) ? 'selected' : '';
                                echo "<option value='" . $theloai['ma_tloai'] . "' $selected>" . $theloai['ten_tloai'] . "</option>";
                            }
                        } else {
                            echo "không tìm thấy thể loại";
                        }

                        mysqli_close($conn);
                        ?>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label>Tóm tắt</label>
                    <input type="text" class="form-control" name="tomtat" value="<?php echo $row['tomtat'] ?>">
                </div>

                <div class="form-group mt-3">
                    <label>Nội dung</label>
                    <input type="text" class="form-control" name="noidung" value="<?php echo $row['noidung'] ?>">
                </div>

                <div class="form-group mt-3">
                    <label>Tác giả</label>
                    <select class="form-select" aria-label="Default select example" id="ten_tgia" name="ma_tgia"
                        value="<?php echo $row['ten_tgia'] ?>">
                        <?php
                        include '../config.php';
                        $sql = "SELECT * FROM tacgia";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($tacgia = $result->fetch_assoc()) {

                                $selected = ($tacgia['ma_tgia'] == $row['ma_tgia']) ? 'selected' : '';
                                echo "<option value='" . $tacgia['ma_tloai'] . "' $selected>" . $tacgia['ten_tgia'] . "</option>";
                            }
                        } else {
                            echo "không tìm thấy tác giả";
                        }

                        mysqli_close($conn);
                        ?>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label>Ngày viết</label>
                    <input type="date" class="form-control" name="ngayviet" value="<?php echo $row['ngayviet']; ?>">
                </div>

                <div class="form-group mt-3">
                    <label>Hình ảnh</label>
                    <input type="text" class="form-control" name="hinhanh" value="<?= $row['hinhanh'] ?>">
                </div>

                <div class="form-group  float-end mt-3">
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