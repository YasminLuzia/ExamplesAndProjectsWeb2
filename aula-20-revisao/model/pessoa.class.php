<?php

class Pessoa {
    private $nome;
    private $idade;

    public function Pessoa($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function acharAnoNascimento() {
        return 2020 - $this->idade;
    }

    public function toString() {
        return "<p>Nome: " . $this->nome . 
        "</p><p>Idade: " . $this->idade . "</p>";
    }

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
