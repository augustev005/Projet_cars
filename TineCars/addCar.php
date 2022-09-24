<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //require('connexion');

    //  ON INSTANCIE LE CONNECTEUR
    // $db= new Connector();
    // $con=$db->getConnection();

    //  DECLARATION DES INFORMATIONS DE CONNEXION COMME CONSTANTES
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

    //  ON RÉCUPÈRE LES DONNÉES ENVOIYÉES DANS LE POST
    $immat=$_POST['immat'];
    $nom=$_POST['nom'];
    $model=$_POST['model'];
    $prix=$_POST['prix'];
    $img=$_FILES['img'];
    // var_dump($_SERVER['DOCUMENT_ROOT']);
    // exit();
    
    //ON SAUVEGARDE L'IMAGE
    $destemp=$_SERVER['DOCUMENT_ROOT'].'/cars/TineCars/'.'uploads/';
    $dest='uploads/';
    $fic=$dest.basename($_FILES['img']['name']);    // NOM DE L'IMAGE
    $fictemp=$dest.basename($_FILES['img']['name']);    // NOM DE L'IMAGE
    $ext=strtolower(pathinfo($fictemp,PATHINFO_EXTENSION));     // EXTENSSION DE L'IMAGE

    // ON VERIFIE SI LE FICHIER EST UNE IMAGE
    if($ext!='png' && $ext!='jpg' && $ext!='jpeg' && $ext!='gif'){
        echo "Format de fichier non autorisée!";
        exit();
    }

    // ON DEPLACE L'IMAGE DANS LE DOSSIER DE SAUVEGARDE
    try{
        if(move_uploaded_file($_FILES['img']['tmp_name'],$fictemp)){
            echo' reussi!';
        }else{
            echo "error!";
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }

    // LA REQUÊTE POUR ENREGISTRER OU INSERRER UNE vOITURE DANS LA BASE DE DONNEES
    $sql="INSERT INTO `VOITURE` (`immat`,`nom`,`model`,`prix`,`image`) VALUES('".$immat."','".$nom."','".$model."',".$prix.",'".$fic."')";
    
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
</body>
</html>
