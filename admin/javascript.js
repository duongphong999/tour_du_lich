function themtaikhoan(){

  var taikhoan = document.getElementById("taikhoan").value;
  var matkhau = document.getElementById("matkhau").value;
  var hoten = document.getElementById("hoten").value;
  var avatar = document.getElementById("avatar").value;
  var trangweb = "themtaikhoan.php?taikhoan=" + taikhoan + "&matkhau=" + matkhau + "&hoten=" + hoten + "&avatar=" + avatar;
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

function xoataikhoan(taikhoan){

  var trangweb = "xoataikhoan.php?taikhoan=" + taikhoan;
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
    window.location="http://localhost/dulich/admin/index.php?taikhoan="+taikhoan;

}

function timkiemtour(){

  var timkiem = document.getElementById("timkiem").value;
  var trangweb = "timkiemtour.php?timkiem=" + timkiem;
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

function themtourdulich(){

  var tentour = document.getElementById("tentour").value;
  var hinhanh = document.getElementById("hinhanh").value;
  var mota = document.getElementById("mota").value;
  var trangweb = "themtourdulich.php?tentour=" + tentour + "&hinhanh=" + hinhanh + "&mota=" + mota;
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

function themdexuat(idtour,hinhanh){

  var trangweb = "themdexuat.php?idtour=" + idtour + "&hinhanh=" + hinhanh;
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

function xoadexuat(idtour){

  var trangweb = "xoadexuat.php?idtour=" + idtour;
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

function chuyentab(tab){
  var trangweb = "binhluan.php";
  switch(tab){
    case 1:
      trangweb = "quanlytour.php";
      break;
    case 2:
      trangweb = "lienhe.php";
      break;
  }

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
    document.getElementById('noidung').innerHTML = data;
}
