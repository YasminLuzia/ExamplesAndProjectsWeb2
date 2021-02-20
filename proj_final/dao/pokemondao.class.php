<?php

/* author: Little Daniezinha
   date: 05/11/2020
   version: 1.0.0 */

  require '../persistence/conexaobanco.class.php';

  class PokemonDAO {

    private $conexao = null;

    public function __construct(){

      $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct(){

    }

    //Função para cadastrar:
    public function cadastrarPokemon($p){
      try{

        $stat = $this->conexao->prepare("INSERT INTO pokemon (idpokemon,nome,tipo,ataquePrincipal,nivel)VALUES(NULL,?,?,?,?)");

        $stat->bindValue(1,$p->nome);
				$stat->bindValue(2,$p->tipo);
				$stat->bindValue(3,$p->ataquePrincipal);
				$stat->bindValue(4,$p->nivel);

        $stat->execute();
      }catch(PDOException $e){
        echo "Erro ao cadastrar pokemon." .$e;
      }
    }

    //Função para listar:
    public function buscarPokemons(){
      try{
        $stat = $this->conexao->query("SELECT * FROM pokemon");
        $array = array();
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Pokemon');
        $this->conexao = null;
        return $array;
      }catch(PDOException $e){
        echo "Erro ao buscar pokemons." .$e;
      }
    }

    //Função para deletar:
    public function deletarPokemon($idpokemon){

      try {

        $stat = $this->conexao->prepare("DELETE FROM pokemon WHERE idpokemon=?");
        $stat->bindValue(1,$idpokemon);
        $stat->execute();

        $stat->conexao = null;
      } catch (PDOException $e) {
        echo "Erro ao deletar pokemon." .$e;
      }
    }

    //Função para pesquisa:
    public function buscar($query){

      try {

        $stat = $this->conexao->query("SELECT * FROM pokemon ".$query);
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Pokemon');
        $this->conexao = null;

        return $array;
      } catch (PDOException $e) {
        echo "Erro ao buscar pokemon." .$e;
      }
    }

    //Função para editar:
    public function alterarPokemon($p){
      try {
        $stat = $this->conexao->prepare("UPDATE pokemon SET nome = ?, tipo = ?, ataquePrincipal = ?, nivel = ? WHERE idpokemon = ? ");

        $stat->bindValue(1,$p->nome);
        $stat->bindValue(2,$p->tipo);
        $stat->bindValue(3,$p->ataquePrincipal);
        $stat->bindValue(4,$p->nivel);
        $stat->bindValue(5,$p->idpokemon);

        $stat->execute();

        $this->conexao = null;
      } catch (PDOException $e) {
        echo "Erro ao alterar pokemon." .$e;
      }
    }

  }

 ?>
