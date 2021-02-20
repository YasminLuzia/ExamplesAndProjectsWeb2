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
            <p>Faça um programa que controle a emissão de Xérox da escola. O programa receberá a quantidade de cópias tiradas, e o tipo de cliente, e com base na tabela abaixo, o programa deverá mostrar como resposta o valor a pagar.</p>
            <pre>
                Aluno       0,15
                Professor   0,07
                Direção     0
                Não Aluno   0,20
            </pre>
            <?php
            include "model/xerox.class.php";

            $xerox1 = new Xerox(2, 100);

            echo $xerox1->toString() . "</p><p>
            Total: " . $xerox1->calcularTotal() . "</p>"
            ?>
            <p>
                <a href="view/cadastranumero.php">Exemplo 2 Número</a>

            </p>
        </section>
    </main>

</body>

</html>