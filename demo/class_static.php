<?php
class Car
{
  static $wheels = 4;
  var $hood = 1;

  function MoveWheels()
  {
    Car::$wheels = 10;
  }
}

$bmw = new Car();

// echo $bmw->wheels;

$bmw->MoveWheels();

echo Car::$wheels;
