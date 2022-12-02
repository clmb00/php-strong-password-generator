<?php

  include_once './functions.php';

  $charachters = [
    'numbers' => '0123456789',
    'letters' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    'specials' => '!?&%$^+-*/()[]{}@#_='
  ];

  $psw_length = $_GET['psw_length'] ?? 0;
  $repetition = $_GET['repetition'] ?? 0;
  $whichChar = $_GET['whichChar'] ?? 0;
  $tot_char = '';
  
  if ($psw_length){
    foreach($whichChar as $char){
      $tot_char .= $charachters[$char];
    }
    generateRandomString($psw_length, $tot_char, $repetition);
    header("Location: ./result.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <link rel="stylesheet" href="./style.css">

  <title>PHP Strong Password Generator</title>
</head>
<body>

  <div class="container my_container">
    <div class="inside_container">

      <h1>PHP Strong Password Generator</h1>
      <form action="./index.php" method="GET">
  
        <div class="mb-4">
          <label for="rangeLength" class="form-label">Set password length:</label>
          <input type="range" class="form-range" min="4" max="30" id="rangeLength" name="psw_length" onchange="document.getElementById('rangeValue').innerText = 'Password length: ' + document.getElementById('rangeLength').value">
          <p id="rangeValue">Password length: 18</p>
        </div>

        <div class="form_grid mb-4">
          
          <div class="form_column">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="repetition" value="1" id="repetitionRadioYes" checked>
              <label class="form-check-label" for="repetitionRadioYes">Ripetition</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="repetition" value="0" id="repetitionRadioNo">
              <label class="form-check-label" for="repetitionRadioNo">No Ripetition</label>
            </div>
          </div>  
  
          <div class="form_column">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="whichChar[]" value="letters" id="checkLetters" checked>
              <label class="form-check-label" for="checkLetters">Letters</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="whichChar[]" value="numbers" id="checkNumbers" checked>
              <label class="form-check-label" for="checkNumbers">Numbers</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="whichChar[]" value="specials" id="checkSpecial" checked>
              <label class="form-check-label" for="checkSpecial">Special Charachters</label>
            </div>
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Generate</button>
      </form>

    </div>
  </div>
  
</body>
</html>