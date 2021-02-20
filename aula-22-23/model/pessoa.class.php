<?php
class Pessoa
{
  //Atributos:
  private $nome;
  private $sobrenome;
  private $email;
  private $login;
  private $senha;
  private $anoNascimento;

  //Métodos Contrutor:
  public function __construct($nome, $sobrenome, $email, $login, $senha, $anoNascimento)
  {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
    $this->login = $login;
    $this->senha = $senha;
    $this->anoNascimento = $anoNascimento;
  }

  public function __set($name, $value)
  {
    $this->$name = $value;
  }

  public function __get($name)
  {
    return $this->$name;
  }

  //Método toString() - retornar os dados:
  public function __toString()
  {
    return "<br>Nome: " . $this->nome .
      "<br>Sobrenome: " . $this->sobrenome .
      "<br>E-mail: " . $this->email .
      "<br>Login: " . $this->login .
      "<br>Senha: " . $this->senha .
      "<br>Ano de nascimento: " . $this->anoNascimento;
  }
  public function calcularIdade()
  {
    return date('Y') - $this->anoNascimento;
  }
  public function acharMaiorOuMenor()
  {
    if ($this->calcularIdade() >= 18) {
      return "Maior de Idade";
    } else {
      return "Menor de Idade";
    }
  }
  public function acharMaiorOuMenor2()
  {
    $maior = ($this->calcularIdade() >= 18) ? 'Maior de Idade bem' : 'Menor de Idade bem';
    return $maior;
  }
}
