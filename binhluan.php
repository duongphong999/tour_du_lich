<?php
    require("ketnoi.php");

    $idtour = $_GET['id'];
    $noidung = $_GET['noidung'];
    $hoten = $_GET['hoten'];

    $string = "INSERT INTO binhluan VALUES(null,'".$hoten."','".$noidung."',".$idtour.")";
    $request = mysqli_query($ketnoi,$string);
    if($request){
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
     }

    

?>