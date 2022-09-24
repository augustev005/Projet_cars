<?php

define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBNAME','CarDB');

    // LE DSN DE CONNEXION
    $dsn="mysql:dbname=".DBNAME.";host=".DBHOST;

    try{
        //ON SE CONNECTE À LA BASE DE DONNÉES VIA PDO
        //  ON INSTANCIE LE PDO
        $db=new PDO($dsn,DBUSER,DBPASS);
        //  ON S'ASSURE D'ENVOYER LES DONNÉES EN UTF-8
        $db->exec('SET NAMES utf8');
    }catch (PDOException $e){
        //  SI ON A UNE ERREUR ALORS ON ARRETE PHP
        die($e->getMessage());
    }

    $carId = $_GET['carid'];

    // LA REQUÊTE POUR SUPPRIMER UNE VOITURE
    $sql="DELETE FROM `VOITURE` WHERE id = $carId ;";
    
    try{
        //  ON EXECUTE LA REQÊTE
        $req=$db->query($sql);
    }catch(Exception $e){
        //  SI ON A UNE ERREUR ALORS ON L'AFFICHE
        echo $e->getMessage();
    }

    //  ON RETOURNE À LA LISTE
    header('Location: cargallery.php',true);

?>
