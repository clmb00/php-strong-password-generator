<?php

  include_once './functions.php';

  $characters = [
    '0123456789',
    'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    '!?&%$^+-*/()[]{}@#_='
  ];
  
  $psw_length = $_GET['psw_length'] ?? 0;
  
  if ($psw_length){
    session_start();
    generateRandomString($psw_length, $characters);
    header("Location: ./result.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>PHP Strong Password Generator</title>
</head>
<body>

  <div class="container">
    <h1>PHP Strong Password Generator</h1>
    <form action="./index.php" method="GET">
      <div class="mb-3">
        <label for="rangeLength" class="form-label">Password length:</label>
        <input type="range" class="form-range" min="4" max="32" id="rangeLength" name="psw_length" onchange="document.getElementById('rangeValue').innerText = 'Lenght: ' + document.getElementById('rangeLength').value">
        <p id="rangeValue">Lenght: 18</p>
      <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <button type="submit" class="btn btn-primary">Generate</button>
    </form>
  </div>
  
</body>
</html>