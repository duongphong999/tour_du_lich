<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản Trị Tour</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php
      require("../ketnoi.php");
      if(isset($_GET['taikhoan'])){
          $taikhoan = $_GET['taikhoan'];
          $string = "SELECT * FROM taikhoan WHERE taikhoan = '".$taikhoan."'";

          $request = mysqli_query($ketnoi,$string);
          if($request){
            while ($row = mysqli_fetch_array($request))
               {
                  $hoten = $row['hoten'];
                  $avatar = $row['avatar'];
               }
         }
      }
      else{
          Header("Location: dangnhap.php");
      }



  ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <div class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input id="timkiem" class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm TOUR du lịch..." aria-label="Tìm kiếm">
        <div class="input-group-append">
          <button class="btn btn-navbar" onclick="timkiemtour()">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="VietNam Tourisn" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">VietNam Tourisn</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <img src='uploads/<?=$avatar?>' class='img-circle elevation-2' alt='User Image' style='width: 40px; height: 40px'>
        </div>
        <div class="info">
          <A><?php
              echo $hoten;
            ?></A>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a <?php echo "href='index.php?taikhoan=".$taikhoan."'"; ?> class="nav-link">
              <i class="fas fa-user-circle"></i>
              <p>
                Quản lý tài khoản
              </p>
            </a>
          </li>
          <li class="nav-item" onclick='chuyentab(1)'>
            <a href="#" class="nav-link">
              <i class="fas fa-torii-gate"></i>
              <p>
                Quản lý TOUR
              </p>
            </a>
          </li>
          <li class="nav-item" onclick="chuyentab(2)">
            <a href="#" class="nav-link">
              <i class="fas fas fa-comments"></i>
              <p>
                Liên hệ
              </p>
            </a>
          </li>
          <li class="nav-item" onclick="chuyentab(3)">
            <a href="#" class="nav-link">
              <i class="fas fas fa-comment"></i>
              <p>
                Bình luận
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                Đăng xuất
              </p>
            </a>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div id="noidung">
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
          <form action="addAccount.php" enctype="multipart/form-data" method="post">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-7">
                  <div class="col-md-6 form-group">
                    <label for="name">Tài khoản</label>
                    <input type="text" id="taikhoan" name="account" class="form-control">
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="phone">Mật khẩu</label>
                    <input type="text" id="matkhau" name="password" class="form-control">
                  </div>

                  <div class="col-md-6 form-group">
                      <label for="phone">Họ tên</label>
                      <input type="text" id="hoten" name="fullname" class="form-control ">
                    </div>

                  <div class="col-md-6 form-group">
                      <label for="phone">Ảnh đại diện</label>
                      <input type="file" id="avatar" name="avatar" class="form-control ">
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
                      <th scope="col"><center>AVATAR</center></th>
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
                                          echo "<td> <img src='uploads/".$row['avatar']."' style='width:200px'></td>";
                                          echo "<td>".$row['taikhoan']."</td>";
                                          echo "<td>".$row['matkhau']."</td>";
                                          echo "<td>".$row['hoten']."</td>";
                                          echo "<td>
                                              <button type='button' onclick=\"xoataikhoan('".$row['taikhoan']."')\" class='btn btn-danger'>Xóa</button>
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

  </div>



  <footer class="main-footer">
    <strong>Copyright &copy; Bản quyền | <a href="#">Thiên thần nhỏ </a>.</strong>
    Công nghệ thông tin 2017
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script type="text/javascript" src="javascript.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
