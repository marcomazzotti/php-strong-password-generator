<?php
session_start();
include_once __DIR__ . "/data.php";
if (isset($_GET["password-length"])) {
  $length = $_GET['password-length'];
  $user_array = array_merge($lower_array, $upper_array, $number_array, $symbol_array);
  for ($i = 0; $i < $length; $i++) {
    $random_number = rand(0, (count($user_array) - 1));
    $password = $password . $user_array[$random_number];
  }
  $_SESSION['password'] = $password;
  header("Location: password.php");
}
