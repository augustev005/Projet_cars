<?php

// define('DBHOST','mysql-augustine.alwaysdata.net');
define('DBHOST','localhost');
    // define('DBUSER','augustine');
    define('DBUSER','root');
    // define('DBPASS','tina@@-20');
    define('DBPASS','');
    // define('DBNAME','augustine_client');
    define('DBNAME','carDB');

    $dsn="mysql:dbname=".DBNAME.";host=".DBHOST;

                    try{
                        //ON SE CONNECTE À LA BASE DE DONNÉES
                        $db=new PDO($dsn,DBUSER,DBPASS);
                        //  ON S'ASSURE D'ENVOYER LES DONNÉES EN UTF-8
                        $db->exec('SET NAMES utf8');
                    }catch (PDOException $e){
                        die($e->getMessage());
                    }
    ?>
