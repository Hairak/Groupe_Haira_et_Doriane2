<?php 
/** fichier connexion à la bdd */
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=youtube;charset=utf8", "root", "");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
