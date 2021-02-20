<?php
class Util
{
    //Função para verificar se o email esta no formato correto
    public function validarEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    //Função para verificar se a váriavel esta no padrão correto
    public function testarExpressao($expressao, $variavel)
    {
        return preg_match($expressao, $variavel);
    }

    /* public static function validarNome($valor): bool
        {
            $expressao = "/^[a-zA-Z]{2,30}$/";
            return preg_match($expressao, $valor);
        }

        public static function validar($opcao, $valor): bool
        {
            $expressaoNome = "/^[a-zA-Z]{2,30}$/";
            $expressaoSobrenome = "/^[a-zA-Z]{2,30}$/";
            $expressaoSexo = "/^(Masculino|Feminino)$/";
            $expressaoPeso = "/^-?[0-9]{1,3}.?[0-9]{1,3}$/";
            $expressaoCpf = "/^[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}$/";
            switch($opcao) {
            case "nome":
                return preg_match($expressaoNome, $valor);
            case "sobrenome":
                return preg_match($expressaoSobrenome, $valor);
            case "sexo":
                return preg_match($expressaoSexo, $valor);
            case "peso":
                return preg_match($expressaoPeso, $valor);
            case "cpf":
                return preg_match($expressaoCpf, $valor);
            }
        }*/

    //Função para converter letras para maiúsculo
    public function converterMaiusculo($variavel)
    {
        return strtoupper($variavel);
    }

    //Função para converter letras para minusculo
    public function converterMinusculo($variavel)
    {
        return strtolower($variavel);
    }

    //Função para contar os caracteres
    public function contarCaracteres($variavel)
    {
        return strlen($variavel);
    }

    //Função para primeiras letras maiusculas
    public function converterPrimeiraLetra($variavel)
    {
        return ucwords($variavel);
    }

    //Função para retirar espaços do texto
    public function retirarEspacos($variavel)
    {
        return ltrim($variavel);
    }
}
