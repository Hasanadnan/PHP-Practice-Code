<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $door = 2;

    function moveWheels() {

        // echo 'wheels move';
        $this->wheels=10;

    }

    function createDoor() {
        $this->door=6;
    }

    function engine() {
        $this->engine=2;
    }


}

//propertices uses
$honda = new Car();
$bmw = new Car(); 
$bus = new Car();

// uses propertices
echo $bus->engine . '<br />';
echo $honda->wheels . '<br />';

//method call 
$honda->moveWheels();
$bmw->createDoor();
$bus->engine();

// uses method 
echo $bmw->door . '<br />';
echo $bus->engine . '<br />';



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
