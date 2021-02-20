<?php

class Funcionario
{
    private $salarioFixo;
    private $valorVendas;

    public function Funcionario($salarioFixo, $valorVendas)
    {
        $this->salarioFixo = $salarioFixo;
        $this->valorVendas = $valorVendas;
    }

    public function calcularComissao()
    {
        return $this->valorVendas * 0.04;
    }

    public function calcularSalarioFinal()
    {
        $comissao = $this->calcularComissao();
        return $this->salarioFixo + $comissao;
    }

    public function toString()
    {
        return "Salário Fixo: R$ " . $this->salarioFixo . " </p><p>
            Valor Vendas: R$ " . $this->valorVendas;
    }
}
