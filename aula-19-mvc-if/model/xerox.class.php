<?php
class Xerox
{
    private $tipoCliente;
    private $copias;

    public function Xerox($tipoCliente, $copias)
    {
        $this->tipoCliente = $tipoCliente;
        $this->copias = $copias;
    }

    /**
     * Get the value of tipoCliente
     */
    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    /**
     * Set the value of tipoCliente
     *
     * @return  self
     */
    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;

        return $this;
    }

    /**
     * Get the value of copias
     */
    public function getCopias()
    {
        return $this->copias;
    }

    /**
     * Set the value of copias
     *
     * @return  self
     */
    public function setCopias($copias)
    {
        $this->copias = $copias;

        return $this;
    }

    public function toString()
    {
        return "<p>Tipo cliente: " . $this->tipoCliente . " </p><p>
        Cópias: " . $this->copias . " </p>";
    }

    public function calcularTotal()
    {
        switch ($this->tipoCliente) {
            case 1:
                return $this->copias * 0.15;
            case 2:
                return $this->copias * 0.07;
            case 3:
                return 0;
            default:
                return $this->copias * 0.20;
        }
    }
}
