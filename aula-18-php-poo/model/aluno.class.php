<?php
  class Aluno{
    private $nome;
    private $nota1;
    private $nota2;

    public function Aluno($nome,$nota1,$nota2){
      $this->nome = $nome;
      $this->nota1 = $nota1;
      $this->nota2 = $nota2;
    }
    public function getNome(){
      return $this->nome;
    }

    public function setNome($nome){
      $this->nome = $nome;
    }

    public function getNota1(){
      return $this->nota1;
    }

    public function setNota1($nota1){
      $this->nota1 = $nota1;
    }

    public function getNota2(){
      return $this->nota2;
    }

    public function setNota2($nota2){
      $this->nota2 = $nota2;
    }
    public function toString(){
      return "Nome: ".$this->nome. "</p><p>
              Nota1: ".$this->nota1. "</p><p>
              Nota2: ".$this->nota2;
    }
    public function calcularMedia(){
      return ($this->nota1 + $this->nota2) / 2;
    }
    public function retornarParecer(){
      $media = $this->calcularMedia();
      if($media<6){
        return "Reprovado";
      }else{
        return "Aprovado";
      }
    }
  }
