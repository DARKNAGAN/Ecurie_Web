<?php

// Connexion � la base de donn�es
try
{
    $bdd = new PDO('mysql:host=nasccb:PORT;dbname=Ecurie', 'USER', 'PASS',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
