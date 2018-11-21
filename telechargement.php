<?php
session_start();
$_SESSION['fichier'];



    ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #27b387;">
    <div class="jumbotron" style="background: rgba(0, 0, 0, 0.4) !important; margin-left: 100px !important; margin-right: 100px !important; margin-top: 100px !important; padding: 0rem 2rem !important;">
        <div class="container">
            <header class="page-header">
                <div class="wrapper">
                    <img src="img/logo.png" alt="" style="height: 100px; margin-left: -121px !important; margin-top: 15px !important;"/>
                </div>
            </header>
        </div>
        <h6 class="display-4" style="color: white !important; text-shadow: 0px 0px 2px #131415" >Bonjour cliquez sur le bouton pour le télécharger le fichier</h6><br>
        <p class="lead">
          <!--  <a class="btn btn-primary btn-lg align" href="http://localhost/Wetransfer/files/'.<?$_SESSION['fichier']?>.'" role="button">Telecharger</a>-->
            <?php
            echo '<a  class="btn btn-primary btn-lg" href="http://localhost/Wetransfer/files/'.$_SESSION['fichier'].'">telecharger</a>';
            ?>
        </p>
        <p class="modal-footer" style="color: white !important; text-shadow: 0px 0px 2px #131415; margin-top: 100px !important;">Ce fichier est disponible pour 7 jours </p>

    </div>

</body>
</html>
