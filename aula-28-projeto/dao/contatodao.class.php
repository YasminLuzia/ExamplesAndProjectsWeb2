<?php
//Requerindo a classe de conexão com o banco
require '../persistence/conexaobanco.class.php';

class ContatoDAO
{
    //Atributo de conexão 
    private $conexao = null;

    //Método construtor
    public function __construct()
    {
        //Quando pedir conexao - iremos acessar a persistencia e pegar a conexao do banco getInstance
        $this->conexao = ConexaoBanco::getInstance();
    }

    //Método destrutor - para sair do banco
    public function __destruct()
    {
    }

    //CRUDS
    //CREATE
    public function cadastrarContato($c)
    {
        try {
            $stat = $this->conexao->prepare("INSERT INTO contato(idcontato,nome,telefone,email,mensagem)VALUES(NULL,?,?,?,?)");
            //Pegando atributos da classe contato e colocando no banco
            $stat->bindValue(1, $c->nome);
            $stat->bindValue(2, $c->telefone);
            $stat->bindValue(3, $c->email);
            $stat->bindValue(4, $c->mensagem);
            //Executando a query do banco
            $stat->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar contato.";
        }
    }

    //READ
    public function buscarContatos()
    {
        try {
            $stat = $this->conexao->query("SELECT * FROM contato");
            $array = array();
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Contato');
            $this->conexao = null;
            return $array;
        } catch (PDOException $e) {
            echo "Erro ao buscar contato" . $e;
        }
    }

    //DELETE
    public function deletarContato($idcontato)
    {
        try {
            $stat = $this->conexao->prepare("DELETE FROM contato WHERE idcontato=?");
            $stat->bindValue(1, $idcontato);
            $stat->execute();
            $stat->conexao = null;
        } catch (PDOException $e) {
            echo "Erro ao deletar contato" . $e;
        }
    }

    //READ - ESPECIFICO
    public function buscar($query)
    {
        try {
            $stat = $this->conexao->query("SELECT * FROM contato " . $query);

            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Contato');

            $this->conexao = null;

            return $array;
        } catch (PDOException $e) {
            echo "Erro ao buscar contato" . $e;
        }
    }

    //UPDATE
    public function alterarContato($c)
    {
        try {
            $stat = $this->conexao->prepare("UPDATE contato SET nome = ?, telefone = ?, email = ?, mensagem = ? WHERE idcontato = ?");

            $stat->bindValue(1, $c->nome);
            $stat->bindValue(2, $c->telefone);
            $stat->bindValue(3, $c->email);
            $stat->bindValue(4, $c->mensagem);
            $stat->bindValue(5, $c->idcontato);

            $stat->execute();

            $this->conexao = null;
        } catch (PDOException $e) {
            echo "Erro ao alterar contato" . $e;
        }
    }
}
