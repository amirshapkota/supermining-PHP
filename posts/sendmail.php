<?php

$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$descr = $_POST['description'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->isHTML();
$mail->Username = 'supermining007@gmail.com';
$mail->Password = 'cryptomining';
$mail->SetFrom('supermining007@gmail.com');
$mail->Subject = $name;
$mail->Body = $name."\r\n".$email."\r\n".$topic."\r\n".$descr;
$mail->AddAddress('supermining007@gmail.com');
$mail->Send();
header('location: ../webpages/contact.php')


?>