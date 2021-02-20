<?php

/* author: Little Daniezinha
   date: 05/11/2020
   version: 1.0.0 */

  class ConexaoBanco extends PDO {

    private static $instance = null;

    public function __construct($dsn,$user,$pass){

      parent::__construct($dsn,$user,$pass);
    }

    public static function getInstance(){

      if(!isset(self::$instance)){
        try{
          self::$instance = new ConexaoBanco("mysql:dbname=bdprojfinal;host=localhost","root","");
        }catch(PDOException $e){
          echo "Erro ao conectar com o BD." .$e;
        }
      }
      return self::$instance;
    }
  }
 ?>
