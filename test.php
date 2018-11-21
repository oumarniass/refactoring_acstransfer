<?php
//require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
//require '/usr/share/php/libphp-phpmailer/class.smtp.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress('oumarsow92bbsy@gmail.com');
$mail->Subject = 'Message sent by PHPMailer';
$mail->Body = 'Hello! use PHPMailer to send email using PHP';
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = 'oumarsow92bbsy@gmail.com';


//Set the password of your gmail address here
$mail->Password = 'oumarsow83bbsy';
if(!$mail->send()) {
    echo 'Email is not sent.';
    echo 'Email error: ' . $mail->ErrorInfo;
} else {
    echo 'Email has been sent.';
}
?>
<a href=""></a>
