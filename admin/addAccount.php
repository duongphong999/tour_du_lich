<?php

require("../ketnoi.php");

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


?>

<?php
}

?>
