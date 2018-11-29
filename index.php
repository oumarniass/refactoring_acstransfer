<?php
require 'mail.php';
require 'connexion.php';
require 'mail.php';


if (!empty($_FILES)) {
    $file_name = $_FILES['fichier']['name'];
    $file_extension = strrchr($file_name, ".");
    $file_tmp_name = $_FILES['fichier']['tmp_name'];
    $file_dest = 'files/'.$file_name;
    //$extension_autorisees = array('.png', '.PNG',); //Seul ces formats sont autorisés
    /*if (in_array($file_extension, $extension_autorisees)) {*/
    if(move_uploaded_file($file_tmp_name, $file_dest)) {
        $requete = $bdd->prepare('INSERT INTO files(name, file_url) VALUES(?,?)');
        $requete->execute(array($file_name, $file_dest));

    }
}

?>
<!DOCTYPE html>
<html lang="fr" >
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

                <form class="form-group text-center" method="post" action="telechargement.php" enctype="multipart/form-data">
                    <div class="custom-file">
                        <input type="file" name="fichier" class="custom-file-input" style="background-color: #1c7430">
                        <label class="custom-file-label" for="customFile">Choisissez votre fichier</label>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <input type="text" name="subject" id="" class="form-control" placeholder="object">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" id="" class="form-control" placeholder="votre email">
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



