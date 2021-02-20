<?php

class Funcionario
{
    private $nome;
    private $cpf;
    private $cargo;
    private $valorHora;
    private $quantidadeHoras;
    private $horasExtras50;
    private $horasExtras100;
    private $dependente;
    private $tipoInsalubridade;
    private $valorTransporteMensal;
    private $valorRefeicaoDiaria;
    private $email;

    /**
     * Constructor
     * 
     * @param Funcionario 's data
     */
    public function __construct($nome, $cpf, $cargo, $valorHora, $quantidadeHoras, $horasExtras50, $horasExtras100, $dependente, $tipoInsalubridade, $valorTransporteMensal, $valorRefeicaoDiaria, $email)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
        $this->valorHora = $valorHora;
        $this->quantidadeHoras = $quantidadeHoras;
        $this->horasExtras50 = $horasExtras50;
        $this->horasExtras100 = $horasExtras100;
        $this->dependente = $dependente;
        $this->tipoInsalubridade = $tipoInsalubridade;
        $this->valorTransporteMensal = $valorTransporteMensal;
        $this->valorRefeicaoDiaria = $valorRefeicaoDiaria;
        $this->email = $email;
    }

    public function __toString()
    {
        return "<p>Nome: " . $this->nome . "<br>
        CPF: " . $this->cpf . "<br>
        Cargo: " . $this->cargo . "<br>
        Valor hora: R$ " . $this->valorHora . "<br>
        Quantidade de horas: " . $this->quantidadeHoras . " h<br>
        Horas extras 50: " . $this->horasExtras50 . " h<br>
        Horas extras 100: " . $this->horasExtras100 . " h<br>
        Dependentes: " . $this->dependente . "<br>
        Tipo de insalubridade: " . $this->tipoInsalubridade . "<br>
        Valor de transporte mensal: R$ " . $this->valorTransporteMensal . "<br>
        Valor da refeição diária: R$ " . $this->valorRefeicaoDiaria . "<br>
        Email: " . $this->email . "</p>";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function calcularSalarioBruto()
    {
        return $this->valorHora * $this->quantidadeHoras;
    }

    public function calcularValeTransporte()
    {
        $salarioBruto6porcento = $this->calcularSalarioBruto() * 0.06;
        if ($salarioBruto6porcento > $this->valorTransporteMensal) {
            return 0;
        } else {
            return $salarioBruto6porcento;
        }
    }

    public function calcularSalarioFamilia()
    {
        if ($this->calcularSalarioBruto() <= 1425.56) {
            return $this->dependente * 48.62;
        } else {
            return 0;
        }
    }

    public function calcularInsalubridade()
    {
        switch ($this->tipoInsalubridade) {
            case 1:
                return 0;
                break;
            case 2:
                return 1045.00 * 0.10;
                break;
            case 3:
                return 1045.00 * 0.20;
                break;
            case 4:
                return 1045.00 * 0.40;
                break;
        }
    }

    public function calcularInss()
    {
        $salarioBruto = $this->calcularSalarioBruto();
        if ($salarioBruto <= 1751.81) {
            return $salarioBruto * 0.08;
        } else if ($salarioBruto < 1751.81 && $salarioBruto <= 2919.72) {
            return $salarioBruto * 0.09;
        } else if ($salarioBruto < 2919.72 && $salarioBruto <= 5839.45) {
            return $salarioBruto * 0.11;
        } else {
            return $salarioBruto * 0.27;
        }
    }

    public function calcularValeRefeicao()
    {
        return (25 * $this->valorRefeicaoDiaria) * 0.2;
    }

    public function calcularValorExtra50()
    {
        return ($this->valorHora * $this->horasExtras50) * 1.50;
    }

    public function calcularValorExtra100()
    {
        return ($this->valorHora * $this->horasExtras50) * 2;
    }

    public function calcularTotalHorasExtras()
    {
        return $this->calcularValorExtra50() + $this->calcularValorExtra100();
    }

    public function calcularSalarioLiquido()
    {
        return $this->calcularSalarioBruto() + $this->calcularSalarioFamilia() + $this->calcularInsalubridade() + $this->calcularValeRefeicao() + $this->calcularTotalHorasExtras() - $this->calcularValeTransporte() - $this->calcularInss();
    }
}
