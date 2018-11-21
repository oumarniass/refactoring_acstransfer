<?php
//Connexion a la base de donnees
try
{
    $bdd=new PDO('mysql:host=localhost;dbname=project_file','root','oumarsow');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
