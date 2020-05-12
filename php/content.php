<?php include "header.php"; ?>
<?php
session_start();
$loggedIn = $_SESSION['LoggedIn'];

if(!$loggedIn){
    //display error and link to login page
    echo 'Wrong username or password:   Try again     <a href="login.php">Login Page</a>';

}
else{
    echo "Hello " . $_COOKIE['username'];
}