<?php

if(isset($_POST['submit'])){

    $name = array("Edwin", "Student", "peter","Samid","Mohad","Maria","Jane","tom");
    $minimum = 5;
    $maximum = 10;

$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username) < $minimum) {

    echo "Username has to be longer than five";

}

if(strlen($username) > $maximum) {

    echo "Username cannnot to be longer than 10";

}

if(!in_array($username,$name)){

    echo "Sorry You are not allowed";

}else{
    echo "Welcome";
}

// echo "Hello" . $username;
// echo "Your Password is" . $password;

}



?>
