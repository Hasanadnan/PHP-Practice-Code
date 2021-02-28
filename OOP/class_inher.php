<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $door = 2;

    function moveWheels() {

        $this->wheels=10;

    }

}

//propertices uses
$honda = new Car();
$bmw = new Car(); 


// class inheritance
class Plane extends Car {


} 

//propertices call
$jet = new Plane();


// uses
echo $jet->wheels .'<br />';

// method call 
$jet->moveWheels();

//uses
echo $jet->wheels;






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
