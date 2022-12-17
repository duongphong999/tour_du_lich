<?php
	
	$ketnoi = mysqli_connect("localhost","root","","tourdulich"); // lệnh kết nối csdl
	if ($ketnoi) {
		# code...
		mysqli_set_charset($ketnoi,"utf8"); // lệnh mã hóa tất cả dữ liệu thành tiếng việt utf8
		
	}else{
		echo "Kết nối máy chủ thất bại!";
		die;
	}

?>