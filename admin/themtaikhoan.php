<?php

  require("../ketnoi.php");
  // if(isset($_GET['taikhoan']) && isset($_GET['matkhau']) && isset($_GET['hoten']) && isset($_GET['avatar'])){
  //   $taikhoan = $_GET['taikhoan'];
  //   $matkhau = $_GET['matkhau'];
  //   $hoten = $_GET['hoten'];
  //   $avatar = $_GET['avatar'];
  //   $stringRequest = "INSERT INTO taikhoan VALUES('".$taikhoan."','".$matkhau."','".$hoten."','".$avatar."')";
  //   $request = mysqli_query($ketnoi,$stringRequest);
  //   if ($request) {
  //       echo "<script> alert('Thêm thành công') </script>";
  //   }else{
  //     echo "<script> alert('Thêm thất bại') </script>";
  //   }

  // }
  if (isset($_POST['account'])) {
    $account = $_POST['account'];
    $password = $_POST['password'];
    $fullName = $_POST['fullname'];
    $avatar = $_FILES['avatar'];
    $nameAvatar= $_FILES["avatar"]["name"];
    if (isset($avatar)) {

      $target_dir = "uploads/";
      $target_file   = $target_dir . basename($_FILES["avatar"]["name"]);
      $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
      $allowUpload   = true;
      $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');
      if ($_FILES["avatar"]['error'] != 0) {
        echo "<br>The uploaded file is error or no file selected.";
        die;
      }
      if (!in_array($fileType, $allowtypes)) {
        echo "<br>Only allow for uploading .txt, .dat or .data files.";
        $allowUpload = false;
      }
      if ($allowUpload) {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
          $sql = "INSERT INTO `taikhoan` (`taikhoan`, `matkhau`, `hoten`, `avatar`) VALUES ('$account','$password','$fullName','$nameAvatar')";
          mysqli_query($ketnoi, $sql);
          mysqli_close($ketnoi);
          header('location:index.php?taikhoan=admin');
        }

      }
    } else {
      echo ('you must chose file');
    }
  }


?>

<div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"> QUẢN LÝ TÀI KHOẢN</h1>
              </div>
            </div>
          </div>
        </div>
        <section class="content">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-7">
                  <div class="col-md-6 form-group">
                    <label for="name">Tài khoản</label>
                    <input type="text" id="taikhoan" name="account" class="form-control ">
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="phone">Mật khẩu</label>
                    <input type="text" id="matkhau" name="password" class="form-control ">
                  </div>

                  <div class="col-md-6 form-group">
                      <label for="phone">Họ tên</label>
                      <input type="text" id="hoten" name="fullname" class="form-control ">
                    </div>

                  <div class="col-md-6 form-group">
                      <label for="phone">Ảnh đại diện</label>
                      <input type="file" id="anhdaidien" name="avatar" class="form-control ">
                    </div>

                  <div class="col-md-6 form-group">
                    <input type="submit" value="Thêm Tài Khoản" class="btn btn-primary">
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="content">
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">AVATAR</th>
                      <th scope="col">TÀI KHOẢN</th>
                      <th scope="col">MẬT KHẨU</th>
                      <th scope="col">HỌ TÊN</th>
                      <th scope="col">THAO TÁC</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                                $stringRequest = "SELECT * FROM taikhoan ORDER BY taikhoan DESC";
                                $request = mysqli_query($ketnoi,$stringRequest);
                                if ($request) {
                                    # code...
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($request)) {
                                        # code...
                                        echo "<tr>";
                                          echo "<th scope='row'>".$i++."</th>";
                                          echo "<td> <img src='".$row['avatar']."' style='width:200px'></td>";
                                          echo "<td>".$row['taikhoan']."</td>";
                                          echo "<td>".$row['matkhau']."</td>";
                                          echo "<td>".$row['hoten']."</td>";
                                          echo "<td>
                                              <button type='button' onclick='xoathucan(".$row['taikhoan'].")' class='btn btn-danger'>Xóa</button>
                                              </td>";
                                        echo "</tr>";
                                    }
                                }

                            ?>
                  </tbody>
              </table>
            </div>
        </section>
      </div>
