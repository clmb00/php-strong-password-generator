<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>Password Generated</title>
</head>
<body>

  <div class="container">
    <h1>Password Generated: </h1>
    <h2><?php echo $_SESSION['password'] ?></h2>
    <a href="./index.php">Torna indietro</a>
  </div>
  
</body>
</html>