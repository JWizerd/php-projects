<?php
include('class_car.php');
class Plane extends Car {
}

$bird = new Plane();

echo '<p>the plane extends in such that is has <strong>' . $bird->wheels . '</strong> wheels also.</p>';
