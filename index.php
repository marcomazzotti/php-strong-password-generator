<?php
$password = "";
$lower_array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$upper_array = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$number_array = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$symbol_array = ['@', '#', '/', '*', '?', '&', '$', '!', '^', '+', ':', ';', '<', '>', '%'];

if (isset($_GET["password-length"])) {
  $length = $_GET['password-length'];
  $user_array = array_merge($lower_array, $upper_array, $number_array, $symbol_array);
  for ($i = 0; $i < $length; $i++) {
    $random_number = rand(0, (count($user_array) - 1));
    $password = $password . $user_array[$random_number];
  }
}
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