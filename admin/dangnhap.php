<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="easion.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="quantri/js/chart-js-config.js"></script>
    <title>ĐĂNG NHẬP NGƯỜI DÙNG</title>
</head>

<body>
    <div class="form-screen">
        <a href="dangnhap.php" class="easion-logo"><i class="fas fa-sun"></i> <span>NGƯỜI DÙNG</span></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white">Đăng Nhập</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <input name="taikhoan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tài khoản">
                    </div>
                    <div class="form-group">
                        <input name="matkhau" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                    </div>
                    <div class="account-dialog-actions">
                        <button type="submit" class="btn btn-primary">ĐĂNG NHẬP</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php
        if (isset($_POST["taikhoan"]) && isset($_POST["matkhau"])) {
            # code...
            require("../ketnoi.php");
            $taikhoan = $_POST["taikhoan"];
            $matkhau = $_POST["matkhau"];
            $stringRequire = "SELECT * FROM taikhoan WHERE taikhoan = '".$taikhoan."' AND matkhau = '".$matkhau."'";
            $require = mysqli_query($ketnoi,$stringRequire);
            if ($require) {
                # code...
                if (mysqli_num_rows($require)>0) {
                    # code...
                    header("Location: index.php?taikhoan=".$taikhoan);
                    die();
                }else{
                    echo "<script>alert('Đăng nhập thất bại')</script>";
                }
            }else{

            }
        }

    ?>

    
</body>

</html>