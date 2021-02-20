<?php
class Aluno
{
    private $nome;
    private $nota1;
    private $nota2;

    public function Aluno($nome, $nota1, $nota2)
    {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function calcularMedia()
    {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function retornarAprovacao()
    {
        $media = $this->calcularMedia();
        if ($media < 2) {
            return "Reprovado";
        } else if ($media >= 2 && $media <= 6) {
            return "Recuperação";
        } else if ($media >= 6 && $media < 9) {
            return "Aprovado";
        } else {
            return "Aprovado com láurea acadêmica";
        }
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
     * Get the value of nota1
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     *
     * @return  self
     */
    public function setNota1($nota1)
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     *
     * @return  self
     */
    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;

        return $this;
    }

    public function toString()
    {
        return "<p>Nome: " . $this->getNome() . "</p><p>
        Nota 1: " . $this->getNota1() . "</p><p>
        Nota 2: " . $this->getNota2() . "</p>";
    }
}
