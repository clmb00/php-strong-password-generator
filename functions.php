<?php

function generateRandomString($len, $char, $rep){
  $new_password = '';
  $correct_len = 0;

  if (!$rep && $len > strlen($char)){
    $correct_len = strlen($char);
  } else {
    $correct_len = $len;
  }
  
  for($i = 0 ; $i < $correct_len ; $i++){
    do{
      $index_letter = rand(0, strlen($char) - 1 );
      // trasformarlo in array perchè php è un linguaggio di merda
      $password_array = str_split($new_password);
    } while(!$rep && in_array($char[$index_letter], $password_array));
    $new_password .= $char[$index_letter];
  }

  $_SESSION['password'] = $new_password;
}

?>