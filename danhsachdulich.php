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
            <div class="row mb-5">
              <?php
                require("ketnoi.php");
                $string = "SELECT * FROM tourdulich ORDER BY idtour DESC";
                if(isset($_POST['timkiem'])){
                  $string = "SELECT * FROM tourdulich WHERE tentour LIKE '%".$_POST['timkiem']."%' ORDER BY idtour DESC";
                }
                $request = mysqli_query($ketnoi,$string);
                if($request){
                   while ($row = mysqli_fetch_array($request)) {
                      echo "<div class='col-md-6'>";
                        echo "<div class='media media-custom d-block mb-4'>";
                          echo "<a href='chitiettour.php?id=".$row['idtour']."' class='mb-4 d-block'><img src='".$row['hinhanh']."' alt='Image placeholder' class='img-fluid' style='height:290px'></a>";
                          echo "<div class='media-body'>";
                            echo "<span class='meta-post'>".$row['thoigian']."</span>";
                            echo "<span class='reviews-count float-right'>";
                              echo $row["luotxem"]." lượt xem";
                            echo "</span>";
                            echo "<h5 class='mt-0 mb-3'><a href='chitiettour.php?id=".$row['idtour']."'>".$row['tentour']."</a>";
                            echo "<div class='reviews-star float-right'>";
                              $stringstar = "SELECT sosao FROM danhgia WHERE idtour = ".$row['idtour'];
                              $requeststar = mysqli_query($ketnoi,$stringstar);
                              if($requeststar){
                                 $sodangia = 0;
                                 $tongdiem = 0;
                                 $sao = 5;
                                 $sao1 = "ion-android-star";
                                 $sao2 = "ion-android-star";
                                 $sao3 = "ion-android-star";
                                 $sao4 = "ion-android-star";
                                 $sao5 = "ion-android-star";
                                 if(mysqli_num_rows($requeststar)>0){
                                   while ($rowstar = mysqli_fetch_array($requeststar)) {
                                      $tongdiem+= (int)$rowstar["sosao"];
                                      $sodangia++;
                                   }
                                 }
                                 if ($sodangia>0) {
                                   $sao = $tongdiem / $sodangia;
                                 }else{
                                  $sao = $tongdiem;
                                 }
                                 if($sao>=4){
                                    if($sao==4){
                                        $sao5 = "ion-android-star-outline";
                                    }
                                    else{
                                      $sao5 = "ion-android-star-half";
                                    }
                                 }else if($sao>=3){
                                    if($sao==3){
                                        $sao4 = "ion-android-star-outline";
                                        $sao5 = "ion-android-star-outline";
                                    }
                                    else{
                                      $sao4 = "ion-android-star-half";
                                      $sao5 = "ion-android-star-outline";
                                    }
                                 }else if($sao>=2){
                                    if($sao==2){
                                        $sao3 = "ion-android-star-outline";
                                        $sao4 = "ion-android-star-outline";
                                        $sao5 = "ion-android-star-outline";
                                    }
                                    else{
                                      $sao3 = "ion-android-star-half";
                                      $sao4 = "ion-android-star-outline";
                                      $sao5 = "ion-android-star-outline";
                                    }
                                 }else if ($sao>=1) {
                                    if($sao==1){
                                        $sao2 = "ion-android-star-outline";
                                        $sao3 = "ion-android-star-outline";
                                        $sao4 = "ion-android-star-outline";
                                        $sao5 = "ion-android-star-outline";
                                    }
                                    else{
                                      $sao2 = "ion-android-star-half";
                                      $sao3 = "ion-android-star-outline";
                                      $sao4 = "ion-android-star-outline";
                                      $sao5 = "ion-android-star-outline";
                                    }
                                 }
                                echo "<span class='".$sao1."'></span>";
                                echo "<span class='".$sao2."'></span>";
                                echo "<span class='".$sao3."'></span>";
                                echo "<span class='".$sao4."'></span>";
                                echo "<span class='".$sao5."'></span>";
                              }


                            echo "</h5>";
                          echo "</div>";
                        echo "</div>";
                      echo "</div>";
                   }
                }


              ?>

            </div>

          </div>
          <div class="col-md-4">
            <div class="row">

              <div class="col-md-11 ml-auto">


                <form method="POST" class="sidebar-search">
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
  </body>
</html>