<?php

class Car {

    static $wheels = 4;
    var $hood = 1;

    function moveWheels() {

        $this->wheels=10;

    }

}

//propertices uses
$honda = new Car();
$bmw = new Car(); 

// echo $honda->wheels;

echo Car::$wheels;





?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body></body>
</html>
