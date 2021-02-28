<?php 

$file = 'example.txt';

if($handle = fopen($file, 'w')) {

  fwrite($handle, 'I Love PHP also i love JS');


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
    <title>File Writing</title>
  </head>
  <body></body>
</html>
