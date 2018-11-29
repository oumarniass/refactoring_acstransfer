<?php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['name']))
{
$to = $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['name'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <acs_transfer@acs_transfer.com>';
mail($to, $subject, $message, $headers);
}
?>

