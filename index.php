<?php
include_once __DIR__ . "/partials/functions.php";
include_once __DIR__ . "/partials/data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Strong Password Generator</title>
</head>

<body>
  <div class="container text-center">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <form action="index.php" method="get">
      <label for="password-length">Lunghezza password</label>
      <input type="number" name="password-length" id="password-length">
      <button type="submit" class="btn btn-success">Genera</button>
    </form>
    <h3>La tua password: <?php echo $password ?></h3>
  </div>
</body>

</html>