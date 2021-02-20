<?php

class Cliente {
    private $diarias;
    private $tipo;
    private $crianca;

    public function calcularTotal() {
        $total = 0;

        if ($this->tipo == 1) {
            $total = $this->diarias * 180 + $this->crianca * 50;
        } else {
            $total = $this->diarias * 210 + $this->crianca * 50;
        }

        if ($this->diarias>3 && $this->crianca == 0) {
            $total = $total * 0.92;
        }

        return $total;
    }

    /**
     * Get the value of diarias
     */ 
    public function getDiarias()
    {
        return $this->diarias;
    }

    /**
     * Set the value of diarias
     *
     * @return  self
     */ 
    public function setDiarias($diarias)
    {
        $this->diarias = $diarias;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of crianca
     */ 
    public function getCrianca()
    {
        return $this->crianca;
    }

    /**
     * Set the value of crianca
     *
     * @return  self
     */ 
    public function setCrianca($crianca)
    {
        $this->crianca = $crianca;

        return $this;
    }

    public function toString()
    {
        return "Diárias: ".$this->diarias."<p>
        Tipo de estadia: ".$this->tipo."</p><p>
        Crianças: ".$this->crianca."</p>";
    }
}