<?php include "function.php";?>
<?php include "db.php";?>
<?php
createRows();
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
          <h1 class="text-center">Create</h1>
          <form action="login_create.php" method="post">
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