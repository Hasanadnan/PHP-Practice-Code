<?php include "db.php";?>
<?php include "function.php";?> 

<?php

if(isset($_POST['submit']))  {
   updateTable();
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
          <form action="login_update.php" method="post">
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username">
              </div>

              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
              </div>

              <div class="form-group">
              <select name="id" id="">

                <?php

                showAllData();


                ?>
                  <!-- <option value="">1</option> -->
              </select>
              </div>
              <br/>
              <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">    
          </form>  
      </div>
    </div>
  </body>
</html>




 <!-- <?php


while($row = mysqli_fetch_row($result)) {

    print_r($row);
    echo "<br/>"; 

}








?> -->