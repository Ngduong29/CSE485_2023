<?php
include("header.php");
?>

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="add_category.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên thể loại</th>
                        <th scope="col">Số lượng bài viết</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../config.php';
                    $count = 0;
                    $sql = "SELECT * FROM theloai";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['ma_tloai'];
                            $count++;
                            ?>
                            <th scope="row">
                                <?= $count ?>
                            </th>
                            <td>
                                <?= $row['ten_tloai'] ?>
                            </td>
                            <td>
                                <?= $row['SLBaiViet'] ?>
                            </td>
                            <td>
                                <a href="edit_category.php?id=<?= $id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a onclick="return confirm('Ban co muon xoa khong');"
                                    href="delete_category.php?deleteid= <?= $id ?>"><i class="fa-solid fa-trash"></i></a>
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
include("footer.php");
?>