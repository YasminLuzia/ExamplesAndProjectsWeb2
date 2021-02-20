<?php
//Integrando PHP com banco utilizando PDO - PHP acesso a dados do objeto:
//Estendendo a classe utilizando herança
class ConexaoBanco extends PDO {
    //Pegando instância do banco através do PDO
    private static $instance = null;
    //Método contrutor
    public function __construct($dsn, $user, $pass)
    {
        //Puxamos contrutor da classe Super
        parent::__construct($dsn, $user, $pass);
    }

    //Função para pegar a conexão do banco
    public static function getInstance()
    {
        //Testando se conexão existe
        if(!isset(self::$instance))
        {
            try{
                self::$instance = new ConexaoBanco("mysql:dbname=bd_aula_28;host=localhost","root","");
            }catch(PDOException $e)
            {
                echo "Erro ao conectar com o banco." . $e;
            }
        }
        return self::$instance;
    }
}
?>