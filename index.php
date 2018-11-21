<?php
session_start();
require 'connexion.php';
if (!empty($_FILES)) {
    $file_name = $_FILES['fichier']['name'];
    $file_extension = strrchr($file_name, ".");
    $file_tmp_name = $_FILES['fichier']['tmp_name'];
    $file_dest = 'files/'.$file_name;
    $_SESSION['fichier'] = $file_name;


    if(move_uploaded_file($file_tmp_name, $file_dest)) {
        $requete = $bdd->prepare('INSERT INTO file(name, file_url) VALUES(?,?)');
        $requete->execute(array($file_name, $file_dest));

    }

}


$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

if($error == '')
{
    require 'traitement/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->Port = '465';
    $mail->SMTPAuth = true;
    $mail->Username = 'oo2sow@gmail.com';
    $mail->Password = 'oumarsow83bbsy';
    $mail->SMTPSecure = '';
    $mail->From = $_POST["email"];
    $mail->FromName = $_POST["name"];
    //  $mail->AddAddress('abc@xyz.com', 'Name');
    $mail->AddCC($_POST["email"], $_POST["name"]);
    //  $mail->addAttachment($_FILES['fichier']['tmp_name']);
    $mail->WordWrap = 50;
    $mail->IsHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body ="<div class='card-img-top'><h1>http://localhost/Wetransfer/telechargement.php</h1></div>";
    if($mail->Send())
    {
        $error = '<label class="text-success">Votre message a été délivrer avec succés</label>';




    }
    else
    {
        $error = '<label class="text-danger">There is an Error</label>';

    }
    $name = '';
    $email = '';
    $subject = '';
    $message = '';

}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>ACS Transfer</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- mes ajout -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- mes ajout FIN-->
</head>
<body>
<div id="particles-js"></div>
<div class="text">
    <div class="container">
        <header class="page-header">
            <div class="wrapper">
                <img src="img/logo.png" alt=""/>
            </div>
        </header>
    </div>
    <div class="container">
        <div class="row">

            <div class="formulaire col-sm-12 col-md-6 col-lg-6">
                <span><?php
                    if($mail->Send())
                    {
                        $error = '<label class="text-default" style="">Votre message a été délivrer avec succés</label>';
                        echo $error;
                    }
                    ?></span>
                <form class="form-group text-center" method="post" enctype="multipart/form-data">
                    <div class="custom-file">
                        <input type="file" name="fichier" class="custom-file-input" style="background-color: #1c7430">
                        <label class="custom-file-label" for="customFile">Choisissez votre fichier</label>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <input type="text" name="subject" id="" class="form-control" placeholder="object">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" id="" class="form-control" placeholder="votre nom">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="" class=" form-control" placeholder="à">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" id="" class=" btn btn-success" value="envoyer">
                    </div>



                </form>


            </div>
        </div>
    </div>
    <h6 class="text-center">Tous droits Réservés : El Hadji Ibahima SAGNA - Oumar Ousmane SOW - Aissatou NDAO - Aminita DIOP</h6>
</div>

<script src='https://cldup.com/S6Ptkwu_qA.js'></script>
<script  src="js/index.js"></script>
</body>

</html>



