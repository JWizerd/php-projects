<?php
  class Car {
    var $wheels = 4;
    var $color = 'red';
    function move_wheels() {
      echo 'vroom vroom';
    }
    // constructors are methods that are ran immediately after an intance is created ON the new instance. i.e. ford
    function __construct() {
      $this->wheels += 10;
      echo $this->wheels;
    }
  }

  if(class_exists("Car")){
    echo 'class been created';
  }

  $ford = new Car();

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
</body>
</html>
