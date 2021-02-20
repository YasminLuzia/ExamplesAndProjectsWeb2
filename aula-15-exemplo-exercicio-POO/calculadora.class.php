<?php
class Calculadora {
    // numero1 e numero2
    private $numero1;
    private $numero2;

    // somar(), multiplicar(), dividir(), calcularRaiz1()
    public function somar() {
        return $this->numero1 + $this->numero2;
    }

    public function multiplicar() {
        return $this->numero1 * $this->numero2;
    }

    public function dividir() {
        return $this->numero1 / $this->numero2;
    }

    public function calcularRaiz1() {
        return sqrt($this->numero1);
    }

    //getters e setters
    /**
     * Get the value of numero1
     */ 
    public function getNumero1()
    {
        return $this->numero1;
    }

    /**
     * Set the value of numero1
     *
     * @return  self
     */ 
    public function setNumero1($numero1)
    {
        $this->numero1 = $numero1;

        return $this;
    }

    /**
     * Get the value of numero2
     */ 
    public function getNumero2()
    {
        return $this->numero2;
    }

    /**
     * Set the value of numero2
     *
     * @return  self
     */ 
    public function setNumero2($numero2)
    {
        $this->numero2 = $numero2;

        return $this;
    }
}
