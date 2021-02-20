<?php

/* author: Little Daniezinha
   date: 05/11/2020
   version: 1.0.0 */

  class Pokemon{

    private $idpokemon;
    private $nome;
    private $tipo;
    private $ataquePrincipal;
    private $nivel;

    public function __construct(){
      // $this->nome = $nome;
      // $this->tipo = $tipo;
      // $this->ataquePrincipal = $ataquePrincipal;
      // $this->nivel = $nivel;
    }

    public function __get($atributo){
      return $this->$atributo;
    }
    public function __set($atributo,$valor){
      $this->$atributo = $valor;
    }

    public function __toString(){
      return "<br>Código: ".$this->idpokemon.
             "<br>Nome: ".$this->nome.
             "<br>Tipo: ".$this->tipo.
             "<br>Ataque Principal: ".$this->ataquePrincipal.
             "<br>Nível: ".$this->nivel;
    }
}

?>
