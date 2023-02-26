<?php
include("header.php");
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Người dùng</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php   
                             include '../config.php';
                             $sql = "SELECT COUNT(id) as count FROM users";
                             $result = mysqli_query($conn,$sql);
                             $row = mysqli_fetch_array($result);
                             $count = strval($row['count']);
                             echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Thể loại</a>
                        </h5>

                        <h5 class="h1 text-center">
                        <?php   
                             include '../config.php';
                             $sql = "SELECT COUNT(ma_tloai) as count FROM theloai";
                             $result = mysqli_query($conn,$sql);
                             $row = mysqli_fetch_array($result);
                             $count = strval($row['count']);
                             echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Tác giả</a>
                        </h5>

                        <h5 class="h1 text-center">
                        <?php   
                             include '../config.php';
                             $sql = "SELECT COUNT(ma_tgia) as count FROM tacgia";
                             $result = mysqli_query($conn,$sql);
                             $row = mysqli_fetch_array($result);
                             $count = strval($row['count']);
                             echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Bài viết</a>
                        </h5>

                        <h5 class="h1 text-center">
                        <?php   
                             include '../config.php';
                             $sql = "SELECT COUNT(ma_bviet) as count FROM baiviet";
                             $result = mysqli_query($conn,$sql);
                             $row = mysqli_fetch_array($result);
                             $count = strval($row['count']);
                             echo $count;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
include("footer.php")
?>  