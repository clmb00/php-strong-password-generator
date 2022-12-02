<?php

function generateRandomString($len, $char){
  $new_password = '';

  for($i = 0 ; $i < $len ; $i++){
    $index_array = rand( 0 , count($char) - 1);
    $index_letter = rand(0, strlen($char[$index_array]) -1 );
    $new_password .= $char[$index_array][$index_letter];
  }

  $_SESSION['password'] = $new_password; 
}

?>