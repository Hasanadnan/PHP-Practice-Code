<?php

class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $door = 2;

    function showAccess() {
        echo $this->engine=2;

    }


}

//propertices uses
$bmw = new Car(); 

// echo $bmw->showAccess();

class Bus extends Car {

    function ShowProperty() {
        echo $this->door;
    }
}

$honda = new Bus();

echo $honda->ShowProperty();


// uses
// echo $honda->wheels . '<br />';
// echo $honda->door;


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
