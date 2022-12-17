
  <div id="noidung">
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"> QUẢN LÝ LIÊN HỆ</h1>
              </div>
            </div>
          </div>
        </div>
        <section class="content">
          
          <div class="content">
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">HỌ TÊN</th>
                      <th scope="col">SỐ ĐIỆN THOẠI</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">NỘI DỤNG</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                          require("../ketnoi.php");
                          $stringRequest = "SELECT * FROM lienhe ORDER BY idlienhe DESC";
                          $request = mysqli_query($ketnoi,$stringRequest);
                          if ($request) {
                              # code...
                              $i = 1;
                              while ($row = mysqli_fetch_array($request)) {
                                  # code...
                                  echo "<tr>";
                                    echo "<th scope='row'>".$i++."</th>";
                                    echo "<td>".$row['hoten']."</td>";
                                    echo "<td>".$row['sdt']."</td>";
                                    echo "<td>".$row['email']."</td>";
                                    echo "<td>".$row['noidung']."</td>";
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
