<!doctype html>
<html lang="en">
  <head>
    <title>Liên Hệ - Preview Du Lịch</title>
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

    <?php
      require("ketnoi.php");
      //$string = "SELECT * FROM tourdulich ORDER BY idtour DESC";
      
      if(isset($_POST['send'])){
        $ten = $_POST['ten'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $noidung = $_POST['message'];

        $string = "INSERT INTO lienhe VALUES(null,'".$ten."','".$sdt."','".$email."','".$noidung."')";
        
        $reqest = mysqli_query($ketnoi,$string);
        if($reqest)
        {
          echo "<script> alert('Thêm thành công') </script>";
        }
        else
        {
          echo "<script> alert('Thêm thất bại) </script>";
        }
      }

    ?>
    
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
                        <li><a href="danhsachdulich.php">DANH SÁCH TOUR</a></li>
                        <li class="active"><a href="lienhe.php">LIÊN HỆ</a></li>
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
            <h1 class="heading" data-aos="fade-up">LIÊN HỆ</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Hãy liên lạc với chúng tôi.</p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    
    <section class="section bg-primary contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            
            <form method="POST" class="bg-white p-md-5 p-4 mb-5" style="margin-top: -150px;">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Tên</label>
                  <input type="text" id="name" name="ten" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Số điện thoại</label>
                  <input type="text" id="phone" name="sdt" class="form-control ">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Tin nhắn</label>
                  <textarea name="message" id="message" name="tinnhan" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name='send' type="submit" value="Gửi Tin Nhắn" class="btn btn-primary">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Địa chỉ:</span> <span> Đại Học SPKT Vĩnh Long</span></p>
                <p><span class="d-block">Số điện thoại:</span> <span> 0999999999</span></p>
                <p><span class="d-block">Email:</span> <span> CNTT2017Student.com</span></p>
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
  </body>
</html>