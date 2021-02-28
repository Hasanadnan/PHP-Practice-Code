<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $door = 2;
   

    //create constructor
    function __construct() {

        echo $this->wheels = 10;

    }

}

//propertices uses
$honda = new Car();

$bus = new Car();

  


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
