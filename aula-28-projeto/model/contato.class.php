<?php
class Contato
{
  //Atributos - características:
  private $idcontato;
  private $nome;
  private $telefone;
  private $email;
  private $mensagem;
  //Funções - ações da classe:
  //Função construir o objeto - instanciar
  public function __construct()
  {
    /*$this->nome = $nome;
      $this->telefone = $telefone;
      $this->email = $email;
      $this->mensagem = $mensagem;*/
  }
  //Gets e Sets - mágicos:
  public function __get($atributo)
  {
    return $this->$atributo;
  }
  public function __set($atributo, $valor)
  {
    $this->$atributo = $valor;
  }
  //Função toString:
  public function __toString()
  {
    return "<br>Código: " .      $this->idcontato .
      "<br>Nome: " . $this->nome .
      "<br>Telefone: " . $this->telefone .
      "<br>E-mail: " . $this->email .
      "<br>Mensagem: " . $this->mensagem;
  }
}
