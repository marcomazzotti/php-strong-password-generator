<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Password</title>
</head>

<body>
  <h3>La tua password: <?php echo $_SESSION["password"] ?></h3>
</body>

</html>