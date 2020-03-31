<?php
include "header.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'C:\xampp\htdocs\sandbox\backend-final-project2\PHPMailer-master\src\Exception.php';

/* The main PHPMailer class. */
require 'C:\xampp\htdocs\sandbox\backend-final-project2\PHPMailer-master\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'C:\xampp\htdocs\sandbox\backend-final-project2\PHPMailer-master\src\SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'mystar.frontendfinalproject@gmail.com';
$mail->Password = 'MyStar123!?';
try {
    $mail->setFrom($_POST['email'], $_POST['name']);
} catch (Exception $e) {
}
try {
    $mail->addAddress('mystar.frontendfinalproject@gmail.com');
} catch (Exception $e) {
}
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['description'];
//send the message, check for errors
try {
    if (!$mail->send()) {
        echo "ERROR: " . $mail->ErrorInfo;
    } else {
        echo "Thanks for reaching out, someone will get back to you shortly!";
    }
} catch (Exception $e) {
}

include "footer.php";
