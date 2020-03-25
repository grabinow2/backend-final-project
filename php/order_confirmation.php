<?php
include "header.php";

$conn = mysqli_connect('localhost', 'root', '', 'MyStar');

$splitNames = explode(" ", $_POST['Full_Name']);

$email = $_POST['Email'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['Receive_Emails']) && $_POST['Receive_Emails'] == 'Receive') {
    $sql = "INSERT INTO customer (F_NAME, L_NAME, email, Email_list)
VALUES ( '$splitNames[0]' ,  '$splitNames[1]' , '$email' , true)";
} else {
    $sql = "INSERT INTO customer (F_NAME, L_NAME, email, Email_list)
VALUES ( '$splitNames[0]' ,  '$splitNames[1]' , '$email' , false)";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
you for placing your order!
<br>
<br>
You will receive an email shortly with more information.
<br>
<br>
<br>
Keep On Shinning!!!
<?php
include "footer.php";
?>
