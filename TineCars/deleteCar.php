<?php
 require('db.php');
    
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
