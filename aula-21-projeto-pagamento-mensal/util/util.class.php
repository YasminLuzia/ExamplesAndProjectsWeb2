<?php

class Util
{

    public static function validar($opcao, $valor): bool
    {
        $expressaoNome = "/^[a-zA-Z ]{2,40}$/";
        $expressaoCpf = "/^[0-9]{11}$/";
        $expressaoCargo = "/^[A-Z ]{4,30}$/";
        $expressaoValorHora = "/^[0-9]{1,20}$/";
        $expressaoQuantidadeHoras = "/^[0-9]{1,20}$/";
        $expressaoHorasExtras50 = "/^[0-9]{1,20}$/";
        $expressaoHorasExtras100 = "/^[0-9]{1,20}$/";
        $expressaoDependente = "/^[0-9]{1,3}$/";
        $expressaoTipoInsalubridade = "/^[0-4]{1}$/";
        $expressaoValorTransporteMensal = "/^[0-9]{1,20}$/";
        $expressaoValorRefeicaoDiaria = "/^[0-9]{1,20}$/";


        switch ($opcao) {
            case "nome":
                return preg_match($expressaoNome, $valor);
            case "cpf":
                return preg_match($expressaoCpf, $valor);
            case "cargo":
                return preg_match($expressaoCargo, $valor);
            case "valorHora":
                return preg_match($expressaoValorHora, $valor);
            case "quantidadeHoras":
                return preg_match($expressaoQuantidadeHoras, $valor);
            case "horasExtras50":
                return preg_match($expressaoHorasExtras50, $valor);
            case "horasExtras100":
                return preg_match($expressaoHorasExtras100, $valor);
            case "dependentes":
                return preg_match($expressaoDependente, $valor);
            case "tipoInsalubridade":
                return preg_match($expressaoTipoInsalubridade, $valor);
            case "valorTransporteMensal":
                return preg_match($expressaoValorTransporteMensal, $valor);
            case "valorRefeicaoDiaria":
                return preg_match($expressaoValorRefeicaoDiaria, $valor);
            case "email":
                return filter_var($valor, FILTER_VALIDATE_EMAIL);
        }
    }
}
