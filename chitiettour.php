<!doctype html>
<html lang="en">
  <head>
    <title>DANH SÁCH TOUR DU LỊCH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="index.php"><em>Preview Tour Du Lịch</em></a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li class="active"><a href="danhsachdulich.php">DANH SÁCH TOUR</a></li>
                        <li><a href="lienhe.php">LIÊN HỆ</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>THÔNG TIN LIÊN LẠC</h3>
                          <p>Địa chỉ: Đại Học SPKT Vĩnh Long</p>
                          <p>Email: CNTT2017Student.com</p>
                          <p>Liên hệ: 09999999999</p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
        </div>
      </div>
    </header>

    <section class="site-hero overlay page-inside" style="background-image: url(img/hero_2.jpg)">

      <div class="container">

        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">DANH SÁCH<br>TOUR DU LỊCH</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Khám phá khu du lịch &amp; dịch vụ đẳng cắp</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-light post">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <!-- ------------ -->

            <?php
                require("ketnoi.php");
                if(isset($_GET['id']))
                {
                  $idtour = $_GET['id'];
                  $string = "UPDATE tourdulich SET luotxem = luotxem + 1 WHERE idtour = ".$idtour;

                  $request = mysqli_query($ketnoi,$string);
                  if($request){

                        $string = "SELECT * FROM tourdulich WHERE idtour = '".$idtour."'";
                        $request = mysqli_query($ketnoi,$string);
                        if($request){
                           while ($row = mysqli_fetch_array($request)) {
                              $idtour = $row['idtour'];
                              $tieude = $row["tentour"];
                              $ngaydang = $row["thoigian"];
                              $tacgia = "Tiêu Thần";
                              $noidung = $row["mota"];
                              $luotxem = $row["luotxem"];
                              $hinhanh = $row['hinhanh'];
                           }

                        }
                  }

                }
               

              ?>

            <div id="wp-content" class="wp-inner clearfix">
              <h1 class="post-title"><?php echo $tieude; ?></h1>
              <div id="content" class="fl-left">
                <div class="post-thumb" style="margin-top: 2px;">
                  <p><?php echo $ngaydang; ?></p>
                </div>
                <div class="post-detail">
                  <?php
                     echo "<img src='".$hinhanh."' /> <br><br>";
                     echo $noidung;
                   ?>
                  
                  <p class="admin text-right"><?php echo $luotxem." lượt xem"; ?></p>
                </div>
                
              </div>

            </div>
            <div id="comment">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email">Họ tên</label>
                    <input type="txt" id="hoten" class="form-control ">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="message">Bình luận</label>
                    <textarea name="message" id="noidung" name="tinnhan" class="form-control " cols="30" rows="8"></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <input <?php echo "onclick='thembinhluan(".$idtour.")'"; ?> type="submit" value="Gửi bình luận" class="btn btn-primary">
                  </div>
                </div>

                <hr>
              <div id='noidungbl'>
                  <?php
                    $string = "SELECT * FROM binhluan WHERE binhluan.idtour = ".$idtour;
                    $request = mysqli_query($ketnoi,$string);
                    if($request){
                       while ($row = mysqli_fetch_array($request)) 
                       {
                          echo "<div class='row'>";
                            echo "<div class='col-md-12 form-group'>";
                              echo "<label><b style='color: blue'>".$row['hoten'].":</b> ".$row['noidung']."</label>";
                            echo "</div>";
                          echo "</div>";
                       }
                     }
                  ?>
              </div>
            </div>

            <!-- ------------ -->
            
          </div>
          <div class="col-md-4">
            <div class="row">

              <div class="col-md-11 ml-auto">
                <form method="POST" action="danhsachdulich.php" class="sidebar-search">
                  <div class="form-group">
                    <span class="fa fa-search icon-search"></span>
                    <input name="timkiem" type="text" class="form-control search-input"  placeholder="Tên tour du lịch...">
                  </div>
                  <CENTER>
                      <button type="submit" style="margin: 10px">Tìm Kiếm</button>
                  </CENTER>
                </form>  

                <div class="side-box">
                  <h2 class="heading">TOUR HÀNG ĐẦU</h2>
                  <ul class="post-list list-unstyled">
                    
                    <?php

                      $string = "SELECT * FROM tourdulich ORDER BY luotxem DESC LIMIT 5";

                      $request = mysqli_query($ketnoi,$string);
                      if($request){
                         while ($row = mysqli_fetch_array($request)) {
                            echo "<li>";
                                echo "<a href='chitiettour.php?id=".$row['idtour']."' class='d-flex'>";
                                  echo "<span class='mr-3 image'><img src='".$row['hinhanh']."' alt='Image placeholder' class='img-fluid' style='height:100px; width:133px;'></span>";
                                  echo "<div>";
                                    echo "<span class='meta'>".$row["thoigian"]."</span>";
                                    echo "<h3>".$row['tentour']."</h3>";
                                  echo "</div>";
                                echo "</a>";
                            echo "</li>";
                         }
                       }
                    ?>
                     
                  </ul> 
                </div>

              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="danhsachdulich.php">Danh sách tour du lịch</a></li>
              <li><a href="index.php">Trang chủ</a></li>
              <li><a href="lienhe.php">Liên hệ</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block">Địa chỉ:</span> <span> Đại Học SPKT Vĩnh Long</span></p>
            <p><span class="d-block">Số điện thoại:</span> <span> 0999999999</span></p>
            <p><span class="d-block">Email:</span> <span> CNTT2017Student.com</span></p>
          </div>

        </div>
        <div class="row bordertop pt-5">
          <p class="col-md-6 text-left"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> Bản quyền | thiết kế <i class="fa fa-heart-o" aria-hidden="true"></i> bởi nhóm Thiên Thần <br> CÔNG NGHỆ THÔNG TIN 2017</p>
 
        </div>
      </div>
    </footer>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        function thembinhluan(id){

          var hoten = document.getElementById("hoten").value;
          var noidung = document.getElementById("noidung").value;
          var trangweb = "binhluan.php?hoten=" + hoten + "&id=" + id + "&noidung=" + noidung;
          var xhttp = new XMLHttpRequest() || ActiveXObject();
                //Bat su kien thay doi trang thai cuar request
            xhttp.onreadystatechange = function() {
                        //Kiem tra neu nhu da gui request thanh cong
            if (this.readyState == 4 && this.status == 200) {
                            //In ra data nhan duoc
                  GiaoDien(this.responseText)
              }
            }
                    //cau hinh request
          xhttp.open('GET', trangweb, true);
                //cau hinh header cho request
            xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                //gui request
            xhttp.send('data=true');
        }

        function GiaoDien(data) {
            document.getElementById('noidungbl').innerHTML = data;
        }

    </script>
  </body>
</html>