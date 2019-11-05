<?php
  // File name: bestreads.css

  if (isset ( $_GET ['folder'] ) ) {

      $info_path = './books/' . $_GET ['folder'] . '/info.txt';
      $info = file ( $info_path);
      $img_path = './books/' . $_GET ['folder'] . '/cover.jpg';
      $des_path = './books/' . $_GET ['folder'] . '/description.txt';
      $des = file_get_contents ( $des_path );
      $review_path = './books/' . $_GET ['folder'] . '/review.txt';
      $review = file ( $review_path );

      $result = "<img src='" . $img_path .  "'><div class='thedetails'><b>" . $info[0] . "</b><br>"
       . $info[1] . "<br><br>" . $des . "<br><br><b>" . $review[0] . "</b>  " .
       str_repeat ( "*", intval ($review[1]) ) . "<br>" . $review[2] . "</div>";

      echo ( $result );
  }else{
  $bookArray = glob ( './books/*' );
  echo json_encode ( $bookArray );
}
?>
