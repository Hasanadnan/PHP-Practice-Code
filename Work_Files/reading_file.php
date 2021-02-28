<?php 

$file = 'example.txt';

if($handle = fopen($file, 'r')) {

echo $content = fread($handle, filesize($file)); //file er sob dekhabe
// echo $content = fread($handle, 15); //koto gula work dekhate chi



fclose($handle);
} else {
    echo 'the app was not ablr to write on the file';
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>File Opening</title>
  </head>
  <body></body>
</html>
