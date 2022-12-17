<?php
    
    require("../ketnoi.php");
    $idtour = $_GET['idtour'];
    $hinhanh = $_GET['hinhanh'];
    $string = "INSERT INTO tourdexuat VALUES(".$idtour.",'".$hinhanh."')";
    $request = mysqli_query($ketnoi,$string);
    if ($request) {

    }

?>

<div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"> QUẢN LÝ TOUR DU LỊCH</h1>
              </div>
            </div>
          </div>
        </div>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="col-md-6 form-group">
                  <label for="name">Tên TOUR</label>
                  <input type="text" id="tentour" class="form-control place" placeholder="Tên của Tour">
                </div>

                <div class="col-md-6 form-group">
                  <label for="phone">Hình ảnh</label>
                  <input type="text" id="hinhanh" class="form-control" placeholder='Url hình ảnh'>
                </div>

                <div class="col-md-6 form-group">
                    <label for="phone">Mô tả</label>
                    <br>
                    <textarea id="mota" style="width: 800px; height: 300px" placeholder="Nội dung mô tả"></textarea>
                  </div>

                <div class="col-md-6 form-group">
                  <button onclick='themtourdulich()' class="btn btn-primary">Thêm Tour Du Lịch</button>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col"><center>HÌNH ẢNH</center></th>
                      <th scope="col">TÊN TOUR</th>
                      <th scope="col">LƯỢT XEM</th>
                      <th scope="col">THỜI GIAN</th>
                      <th scope="col">MÔ TẢ</th>
                      <th scope="col">THAO TÁC</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                          function check($idtour){
                              require("../ketnoi.php");
                              $stringRequest = "SELECT * FROM tourdexuat WHERE idtour = ".$idtour;
                              $request = mysqli_query($ketnoi,$stringRequest);
                              if ($request) {
                                  if(mysqli_num_rows($request)>0){
                                    return true;
                                  }else{
                                    return false;
                                  }
                              }
                          }
                          $stringRequest = "SELECT * FROM tourdulich ORDER BY idtour DESC";
                          $request = mysqli_query($ketnoi,$stringRequest);
                          if ($request) {
                              # code...
                              $i = 1;
                              while ($row = mysqli_fetch_array($request)) {
                                  # code...
                                  echo "<tr>";
                                    echo "<th scope='row'>".$i++."</th>";
                                    echo "<td> <img src='".$row['hinhanh']."' style='width:200px'></td>";
                                    echo "<td>".$row['tentour']."</td>";
                                    echo "<td>".$row['luotxem']."</td>";
                                    echo "<td>".$row['thoigian']."</td>";
                                    echo "<td>".$row['mota']."</td>";
                                    if(check($row['idtour'])){
                                        echo "<td>
                                        <button type='button' onclick='xoadexuat(".$row['idtour'].")' class='btn btn-danger'>Xóa Đề Xuất</button>
                                        </td>";
                                    }
                                    else{
                                      echo "<td>
                                        <button type='button' onclick='themdexuat(".$row['idtour'].")' class='btn btn-warning'>Đề Xuất</button>
                                        </td>";
                                    }
                                  echo "</tr>";
                              }
                          }

                      ?>
                  </tbody>
              </table>
            </div>
        </section>
      </div>