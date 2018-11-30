<?php
//Connexion a la base de donnees
try
{
     //$bdd=new PDO('mysql:host=localhost;dbname=oumars_upload','oumars','R2YODZr6We');
   $bdd=new PDO('mysql:host=localhost;dbname=files_project','root','oumarsow');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
