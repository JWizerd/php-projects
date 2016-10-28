<?php
  class Car {
    public $wheels = 4;
    protected $color = 'red';
    private $hidden = 'hidden data';
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
