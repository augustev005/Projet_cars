<?php

define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','CarDB');
    class Connector{

        protected $dsn="mysql:dbname".DBNAME.";host=".DBHOST;

        

        public function getConnection(){
            try{
                //ON SE CONNECTE À LA BASE DE DONNÉES
                $db=new PDO($this->dsn,DBUSER,DBPASS);
                //  ON S'ASSURE D'ENVOYER LES DONNÉES EN UTF-8
                $db->exec('SET NAMES UTF-8');
                echo"connected!";
            }catch (PDOException $e){
                die($e->getMessage());
            }
            return $db;
        }
    }
?>
