<?php
  $name = "name";
  $value = "jeremiah";
  $expiration = time() + (60*60*24*7);
  setcookie($name, $value, $expiration);

  session_start();

  $_SESSION['hobby'] = 'photography';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php

  if(isset($_COOKIE['name'])) {
    $user_name = $_COOKIE['name'];
    echo $user_name;
  } else {
    $user_name = '';
  }


  ?>
</body>
</html>
