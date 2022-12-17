<?
	require("ketnoi.php");

	function danhgia($id){
		$stringstar = "SELECT sosao FROM danhgia WHERE idtour = ".$id;
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
           if(mysqli_num_rows($requeststar) > 0){
             while ($rowstar = mysqli_fetch_array($requeststar)) {
                $tongdiem+= (int)$rowstar["sosao"];
                $sodangia++;
             }
           }
           $sao = $tongdiem / $sodangia;
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
	}


?>