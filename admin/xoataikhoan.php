<?php

  require("../ketnoi.php");
  if(isset($_GET['taikhoan'])){
    $taikhoan = $_GET['taikhoan'];
    $stringRequest = "DELETE FROM taikhoan WHERE taikhoan = '".$taikhoan."'";
    $request = mysqli_query($ketnoi,$stringRequest);
    if ($request) {
        echo "<script> alert('Xóa thành công') </script>";
    }else{
      echo "<script> alert('Xóa thất bại') </script>";
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
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="col-md-6 form-group">
                  <label for="name">Tài khoản</label>
                  <input type="text" id="taikhoan" name="ten" class="form-control ">
                </div>

                <div class="col-md-6 form-group">
                  <label for="phone">Mật khẩu</label>
                  <input type="text" id="matkhau" name="sdt" class="form-control ">
                </div>

                <div class="col-md-6 form-group">
                    <label for="phone">Họ tên</label>
                    <input type="text" id="hoten" name="sdt" class="form-control ">
                  </div>

                <div class="col-md-6 form-group">
                    <label for="phone">Ảnh đại diện</label>
                    <input type="text" id="anhdaidien" name="sdt" class="form-control ">
                  </div>

                <div class="col-md-6 form-group">
                  <input name='send' onclick='themtaikhoan()' value="Thêm Tài Khoản" class="btn btn-primary">
                </div>
              </div>
            </div>
          </div>
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