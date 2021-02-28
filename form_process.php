
<?php



if(isset($_POST['submit'])){ 

    $name = ["admin", "hasan", "kamal", "Rahim", "karim"];


    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < 5 ) {
        echo "Username too sort minmun need 5";
    }else if(strlen($username) > 10) {
        echo "userName too long maximun access 10";
    } else if(!in_array($username, $name)) {
        echo "Sorry, you can not allow";
    } else {
        echo "welcome you are allow";
    }
    

}


?>