<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "portfolio.contact.query@gmail.com";
$mail->Password = "znjkkowissujcfvs";

$mail->setFrom($email, $name);
$mail->addAddress("hrishitdas2000@gmail.com", "Debapriya");

$mail->Subject = $subject;
$mail->Body = $message;

if ($mail->send() == 1){
    echo "OK";
}
else{
    echo "Something went wrong!";
}
?>
