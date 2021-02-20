<?php

class Pessoa
{
    private $nome;
    private $peso;
    private $altura;

    public function Pessoa($nome, $peso, $altura)
    {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularPesoIdeal()
    {
        $imc = $this->peso / pow($this->altura, 2);

        if ($imc < 18.5) {
            return "Não, está abaixo do peso ideal.";
        } else if ($imc >= 25) {
            return "Não, está acima do peso ideal.";
        } else {
            return "Sim!";
        }
    }

    public function toString()
    {
        return "<p>Nome: " . $this->nome . "</p><p>
                Peso: " . $this->peso . " kg</p><p>
                Altura: " . $this->altura . " m";
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
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }
}
