<?php
class Numero
{
    private $numero;

    public function Numero($numero)
    {
        $this->numero = $numero;
    }

    public function classificarNumero()
    {
        if ($this->numero % 2 == 0 && $this->numero > 0) {
            return "Par positivo";
        } else if ($this->numero % 2 == 0 && $this->numero < 0) {
            return "Par negativo";
        } else if ($this->numero % 2 != 0 && $this->numero > 0) {
            return "Impar positivo";
        } else if ($this->numero % 2 != 0 && $this->numero < 0) {
            return "Impar negativo";
        } else {
            return "Nulo";
        }
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function toString()
    {
        return "<p>Numero: " . $this->numero . "</p>";
    }
}
