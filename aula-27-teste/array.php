<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Trabalhando com Laços de Repetição</title>
    <meta charset="utf-8">
    <meta name="author" content="Aline Zenker">
    <meta name="description" content="Exemplos desenvolvidos nas
		aulas de PHP para exemplificar seu uso, os mesmos serão mais básicos,
		com uso de echo, operadores...">
    <meta name="keywords" content="HTML, CSS, PHP, echo, programação">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <main class="container-fluid">
        <h1 class="text-center"> Trabalhando com Array </h1>
        <hr>
        <h2>Exemplo de Array simples:</h2>
        <?php
        $frutas = array('Banana', 'Pêssego', 'Maçã', 'Abacaxi', 'Melancia');
        print_r($frutas);
        
        echo "<hr><h3>Imprimindo tamanho e posição do Array:</h3>";
        var_dump($frutas);

        echo "<hr><h3>Imprimindo o total de dados do Array:</h3>";
        echo count($frutas);

        echo "<hr><h3>Array de Objeto:</h3>";
        $alunos = array();
        $alunos["nome"] = 'Yasmin';
        $alunos["idade"] = '18';
        $alunos["telefone"] = '989898988';
        $alunos["email"] = 'yasmin.s.luzia@gmail.com';
        print_r($alunos);

        echo "<hr><h3>Unindo dados de um Array através da função implode()</h3>";
        $dados = implode("<br>", $alunos);
        echo $dados;

        echo "<hr><h3>Exemplo de Array com data:</h3>";
        $dia = 22;
        $mes = 3;
        $ano = 1983;
        $nascimento = array($dia, $mes, $ano);
        $dataNascimento = implode("/", $nascimento);
        echo $dataNascimento;
        ?>

    </main>
</body>

</html>