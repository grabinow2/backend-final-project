
<?php
 $username = $_POST["uname"];
 $password =  $_POST["psw"];
session_start();
$_SESSION['LoggedIn'] = false;

$conn = mysqli_connect('localhost', 'root', '', 'mystar');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="SELECT * FROM authorizedusers Where username= '".$username. "' and password= '".$password."' ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["userName"]==$username && $row["password"]== $password){
            $_SESSION['LoggedIn'] = true;
            setcookie('username', $username);
        }


    }
} else {
    echo "0 results";
}


mysqli_close($conn);

//redirect to content.php
header('Location: content.php');

?>