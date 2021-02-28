<?php 
 if(isset($_POST['submit'])) {
     $username = $_POST["username"];
     $password = $_POST["password"];


     $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

     if($connection) {
         echo "we are connected";

     } else {
         die("database connection failed");
     }

     
     $query = "SELECT * FROM users";

     $result =  mysqli_query($connection, $query);

     if(!$result) {
         echo "query failed";
     }

     while($row = mysqli_fetch_assoc($result)) {

        print_r($row);
        echo "<br/>"; 
    
    }
 }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="col-sm-4">
          <form action="login_read.php" method="post">
          <h1 class="text-center">Read</h1>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username">
              </div>

              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
              </div>
              <br/>
              <input class="btn btn-primary" type="submit" name="submit" value=Submit>
          </form>  
      </div>
    </div> 
  </body>
</html>
