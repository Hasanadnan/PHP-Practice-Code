<?php

class Car {

    function moveWheels() {

        echo 'wheels move';

    }


}

if(method_exists('car')){

    echo 'the method Exist';
} else {
    echo 'The method does not exist';
}


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
