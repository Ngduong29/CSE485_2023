<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:../login.php");
}
include("header.php")
    ?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="add_author.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên tác giả</th>
                        <th scope="col">Hình tác giả</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../config.php';
                    $count = 0;

                    $sql = "SELECT * FROM tacgia ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['ma_tgia'];
                            $count++;
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $count ?>
                                </th>
                                <td>
                                    <?= $row['ten_tgia'] ?>
                                </td>
                                <td>
                                    <?= $row['hinh_tgia'] ?>
                                </td>
                                <td>
                                    <a href="edit_author.php?id=<?= $id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Ban co muon xoa khong');"
                                        href="delete_author.php?deleteid= <?= $id ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            
                            <?php
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
include("footer.php")
    ?>