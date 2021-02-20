<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP - Primeiros passos</title>
    <meta name="description" content="Exercicio PHP - Primeiros passos no mundo do PHP">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<!-- 4. Desenvolva um algoritmo que receba o nome de um produto, seu valor e quantidade de compras. Sendo:
 $produto = "Bis"
 $valor = 4.50
 $quantidade = 10
Seu programa deve calcular o valor a pagar. -->


<body>
    <main class="container-fluid">
        <header class="jumbotron bg-dark text-white mb-0">
            <h1 class="">Operações no PHP</h1>
        </header>

        <section class="container-fluid">
        <section  class="row">
            <div class="col-md-6 text-center mt-4">
                <h3>Soma de três números:</h3>
                <?php
                $numero1;
                $numero2;
                $numero3;
                $soma;

                $numero1 = 10;
                $numero2 = 20;
                $numero3 = 20;

                $soma = $numero1 + $numero2 + $numero3;

                echo $numero1 . " + " . $numero2 . " + " . $numero3 . "<br>
                    Resultado: <br> "
                    . $soma;
                ?>
            </div>
            <div class="col-md-6 text-center mt-4">
                <h3>Diferença entre dois números:</h3>
                <?php
                    $valor1;
                    $valor2;
                    $diferenca;

                    $valor1 = 10;
                    $valor2 = 2;

                    $diferenca = $valor1 - $valor2;

                    echo $valor1. " - " .$valor2. "<br>
                    Resultado: <br> "
                    .$diferenca;
                ?>
            </div>
        </section>
        <section class="row">
            <div class="col-md-6 text-center mt-4">
                <h3>Cálculo da idade:</h3>
                <?php
                    $nome;
                    $nascimento;
                    $atual;
                    $idade;

                    $nome = "Borigodolfa";
                    $nascimento = 2000;
                    $atual = 2020;

                    $idade = $atual - $nascimento;

                    echo $nome. " nasceu em " .$nascimento. ".<br>
                        O ano atual é " .$atual. ".<br>
                    ".$nome. " tem " .$idade. " anos.";
                ?>
            </div>
            <div class="col-md-6 text-center mt-4">
                <h3>Cálculo do total a pagar:</h3>
                <?php
                    $produto;
                    $valor;
                    $quantidade;
                    $total;

                    $produto = "Bis";
                    $valor = 4.50;
                    $quantidade = 10;

                    $total = $valor * $quantidade;

                    echo $nome. " comprou " .$quantidade. " " .$produto. ". <br>
                    Cada " .$produto. " custa R$ " .$valor. ". <br>
                    " .$nome. " precisa pagar R$ " .$total. ".";
                ?>
            </div>
        </section>
        </section>
    </main>
</body>

</html>