<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aula com conceitos de MVC e dados de formulários">
    <meta name="author" content="Yasmin L">
    <meta name="keywords" content="PHP, forms, MVC, Model, View, Controller">
    <title>Retomada - MVC e Forms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <header class="jumbotron">
            <h1 class="text-center">Estrutura Condicional</h1>
        </header>
        <section>
            <h2>Exemplo Condicional</h2>
            <p>Para podermos conferir se o algoritmo está executando corretamente, retornando as respostas certas, temos que entender como funciona o programa. Utilizamos a tabela verdade para testar as condicionais do nosso programa. Testar quando será exibida uma resposta ou outra.</p>
            <?php
            include "../model/numero.class.php";

            $numero1 = new Numero($_GET['txtnumero']);

            echo $numero1->toString() . "<p>
                O nº é: " . $numero1->classificarNumero() . "
                </p>";
            ?>

            <p>
                <a href="../index.php">Voltar</a>
            </p>
        </section>
    </main>

</body>

</html>