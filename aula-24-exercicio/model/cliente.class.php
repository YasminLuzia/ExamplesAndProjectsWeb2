<?php
class Cliente
{
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone)
    {
        $this->nome = $nome;
        $this->email =  $email;
        $this->telefone = $telefone;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function __toString()
    {
        $telefoneMask = "(%s%s)%s%s%s%s%s-%s%s%s%s";

        return "Nome: " . $this->nome . "
        <br>Email: " . $this->email;
    }
}
