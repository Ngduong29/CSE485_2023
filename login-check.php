<?php

include 'config.php';
if (isset($_POST['button'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM users WHERE username='$username'";
   $rs = mysqli_query($conn, $sql);

   if (mysqli_num_rows($rs) > 0) {
    $row = mysqli_fetch_assoc($rs);
    $pass_hash = $row['password'];
    $role = $row['role'];
    if ($pass_hash==$password) {
        if($role =='admin'){

      header("location:admin/index.php");}
      
    } else {
      echo 'mật khẩu không chính xác';
    }
  }

}