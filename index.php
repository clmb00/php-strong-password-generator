<?php

  $psw_length = $_GET['psw_length'] ?? 0;
  $new_password = '';
  $characters = [
    '0123456789',
    'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    '!?&%$^+-*/()[]{}@#_='
  ];

  for($i=0; $i<$psw_length; $i++){
    $index_array = rand(0,2);
    $index_letter = rand(0, strlen($characters[$index_array]) -1 );
    $new_password .= $characters[$index_array][$index_letter];
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
    <h2><?php echo $new_password ?> - check length: <?php echo strlen($new_password) ?></h2>
  </div>
  
</body>
</html>