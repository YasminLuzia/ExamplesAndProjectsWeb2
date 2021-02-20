<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <title>Exercício 19 - Modelo MVC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yasmin L">
    <meta name="description" content="Exercício 19 - Modelo MVC - Se adaptando ao modelo.">
    <meta name="keywords" content="PHP, HTML, Model, View, Controller">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <main class="container-fluid">
        <div class="container">
            <div class="row p-1">
                <nav class="mx-auto" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Exercícios</a></li>
                        <li class="breadcrumb-item"><a href="../view/cadastrafuncionario.php">Cadastro Pessoa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Resposta</li>
                    </ol>
                </nav>
            </div>
            <div class="row p-5 card">
                <div class="mx-auto">
                    <h2>Exercício 2</h2>
                    <p>Uma pessoa possui nome, peso e altura. Desenvolva um programa que diga se a pessoa está no seu peso ideal, pense que para saber isso precisamos saber antes o índice de massa corporal de uma pessoa, calcule primeiro e depois analise se esse índice der um valor Entre 18,5 e 24,9 a pessoa está no peso ideal, caso contrário, não está no peso ideal.</p>
                    <div class="card">
                        <div class="card-body">
                            <?php
                            include "../model/pessoa.model.php";

                            $pessoa1 = new Pessoa($_GET['txtnome'], $_GET['txtpeso'], $_GET['txtaltura']);

                            echo $pessoa1->toString() . "</p><p>
                            Está no peso ideal? " . $pessoa1->calcularPesoIdeal() . "</p>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>