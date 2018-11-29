<?php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['name']))
{
$to = $_POST['email'];
$subject = $_POST['subject'];
$message ="<br>".$_POST['name']."<br>";
$message .= "

<html lang=\"fr\">
<head>
 <meta charset=\"UTF-8\">
 <meta name=\"viewport\"
       content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
 <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
 <title>Document</title>
</head>
<body>
<h1>http://oumars.promo-21.codeur.online/acs_transfer/telechargement.php</h1>
</body>
</html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <acs_transfer@acs_transfer.com>';
mail($to, $subject, $message, $headers);
}
?>


