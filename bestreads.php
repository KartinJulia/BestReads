<?php
  // File name: bestreads.css
  $bookArray = glob ( './books/*' );

  echo json_encode ( $bookArray );
  
  if (isset ( $_GET ['folder'] ) ) {
      $path = './books/' . $_GET ['folder'] . '/info.txt';
      $info = file_get_contents($path);
      echo ( $info );
  }
  
?>