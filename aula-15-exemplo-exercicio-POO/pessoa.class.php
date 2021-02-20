<?php
class Pessoa
{
    //Atributos
    private $nome;
    private $idade;

    //Métodos

    public function acharAnoNascimento()
    {
        return 2020 - $this->idade;
    }

    public function retornarMaiorOuMenor()
    {
        if ($this->idade >= 18)
            return "Maior de idade";
        else
            return "Menor de idade";
    }

    //Getters e Setters
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }
}
