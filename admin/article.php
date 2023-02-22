<?php
include("header.php")
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="add_article.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Tên bài hát</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Tóm tắt</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col">Ngày viết</th>
                            <th scope="col">hình ảnh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           include '../config.php';

                           $sql = "SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai, baiviet.tomtat, baiviet.noidung, tacgia.ten_tgia, baiviet.ngayviet, baiviet.hinhanh 
                           FROM baiviet, theloai, tacgia
                           Where baiviet.ma_tloai = theloai.ma_tloai AND baiviet.ma_tgia = tacgia.ma_tgia";
                           
                           $result = mysqli_query($conn, $sql);
                           if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['ma_bviet'];
                                echo'<tr>';
                                echo'<th scope="row">' . $row['ma_bviet'] . '</th>';
                                echo'<td>' . $row['tieude'] . '</td>';
                                echo'<td>' . $row['ten_bhat'] . '</td>';    
                                echo'<td>' . $row['ten_tloai'] . '</td>'; 
                                echo'<td>' . $row['tomtat'] . '</td>'; 
                                echo'<td>' . $row['noidung'] . '</td>'; 
                                echo'<td>' . $row['ten_tgia'] . '</td>'; 
                                echo'<td>' . $row['ngayviet'] . '</td>'; 
                                echo'<td>' . $row['hinhanh'] . '</td>';                    
                                echo '<td>
                                <a href="edit_article.php?id='.$id.'"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>';
                                echo '<td>
                                <a href="delete_article.php?deleteid= '.$id.'"><i class="fa-solid fa-trash"></i></a>
                                </td>';
                                echo'</tr>';

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