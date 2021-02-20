<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>
        USO DE MVC - PHP OO
    </title>
    <meta name="author" content="Aline Zenker">
    <meta name="description" content="Página OnePage - onde a estrutura da página fica em um único arquivo e utilizamos link âncora para acessar">
    <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <header class="topo jumbotron">
            <h1 class="text-center">SAÍDA DE DADOS</h1>
        </header>

        <section class="conteudo2" id="conteudo2">
            <?php
            include '../model/pessoa.class.php';

            $nome = $_POST['txtnome'];
            $idade = $_POST['txtidade'];

            $pessoa1 = new Pessoa($nome, $idade);

            echo $pessoa1->toString() .
                "<p>Ano Nascimento: " . $pessoa1->acharAnoNascimento() . "</p>"
            ?>
            <p>
                <a href="../view/cadastrapessoa.php">Voltar</a>
            </p>
        </section>
        
    </main>
</body>

</html>