<?php include "db.php";?>
<?php

function createRows() {
    if(isset($_POST['submit'])) { 
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
    

        // sql injection insert all (' ) values
    $username = mysqli_real_escape_string($connection, $username);    
    $password = mysqli_real_escape_string($connection, $password);    

    //Password Encrypted
    $hashFormet = "$2y$10$";
    $salt = "iusesomecrazystring22";
    $hash_and_formet = $hashFormet . $salt;
    $password = crypt($password, $hash_and_formet);

    $query = "INSERT INTO users(username,password) VALUES ('$username', '$password')";
     
     $result = mysqli_query($connection, $query);

     if(!$result) {
         die("query failed");
     }
    } 
}


function showAllData() {
    global $connection;

    $query = "SELECT * FROM users";

    $result =  mysqli_query($connection, $query);

    if(!$result) {
        die("query failed");
    }

    //select id

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }

}

function updateTable(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username = '$username',password = '$password' WHERE id = '$id'";
    // $query .= "username = '$username', ";
    // $query .= "password = '$password' ";
    // $query .= "WHERE id = '$id' ";

    $result =  mysqli_query($connection, $query);

    if(!$result) {
        die("query failed" .mysqli_error($connection));
    }

}

function deleteRows(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = '$id'";
    // $query .= "WHERE id = '$id' ";

    $result =  mysqli_query($connection, $query);

    if(!$result) {
        die("query failed" .mysqli_error($connection));
    }

}

?>