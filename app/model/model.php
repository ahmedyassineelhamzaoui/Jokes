<?php
 require_once('../config/config.php');
    class Connnexion{

      private $host=DB_HOST;
      private $name=DB_NAME;
      private $user=DB_USER;
      private $pass=DB_PASSWORD;
      
      protected $dbs;

      public function __construct()
      {
        try{
          $this->dbs =new PDO('mysql:host='.$this->host.';dbname='.$this->name,$this->user,$this->pass);
        }catch(PDOException $e){
           echo "Connexion error ".$e->getMessage();
        }
      }
    }

?>