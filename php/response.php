
<?php
 $username = $_POST["uname"];
 $password =  $_POST["psw"];
session_start();
$_SESSION['LoggedIn'] = false;

$usernameAndPassword = array("Jacob96" => "securepass123", "grabinow2" => "JoshBlockisthebest", "sgorlin" => "password", "Cherry" => "corona");
if (array_key_exists($username,$usernameAndPassword))
{
    if($usernameAndPassword[$username]==$password){
        $_SESSION['LoggedIn'] = true;
        setcookie('username', $username);

    }
    else{
        //wrong password
    }
}

//redirect to content.php
header('Location: content.php');

?>