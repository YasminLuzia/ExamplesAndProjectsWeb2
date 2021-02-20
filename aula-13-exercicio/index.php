<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <title>Exercicios da aula 13 - PHP</title>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yasmin L">
    <meta name="description" content="Exercicios da aula 13 - Primeiros passos com PHP">
    <meta name="keywords" content="PHP, programação, algoritmos, HTML, CSS">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body>
    <main class="container-fluid">
        <header class="jumbotron bg-dark">
            <h1 class="text-center text-light display-3">Algoritmos com PHP</h1>
        </header>

        <section class="container-fluid">
            <aside class="row">
                <div class="container col-md-4 col-ms-4 col-xs-12">
                    <aside class="card bg-dark text-light text-center p-3">
                        <h2>Exercício 1</h2>
                        <p>Desenvolva um programa que leia um valor em dólar ($10), e a cotação atual do dólar(5.66). Seu programa deve mostrar a conversão para Reais.</p>

                        <div class="programa text-dark p-2">
                            <?php
                            $valorDolar;
                            $cotacaoAtual;
                            $conversaoReal;

                            $valorDolar = 10;
                            $cotacaoAtual = 5.66;

                            $conversaoReal = $cotacaoAtual * $valorDolar;

                            echo "<p>Atualmente o dólar custa R$ " . $cotacaoAtual . "<br>
                            Convertendo " . $valorDolar . " dólares para real, temos: <br>
                            R$ " . $conversaoReal . " reais.</p>"

                            ?>
                        </div>

                    </aside>
                </div>
                <div class="container col-md-4 col-ms-4 col-xs-12">
                    <aside class="card bg-dark text-light text-center p-3 container-fluid">
                        <h2>Exercício 2</h2>
                        <p>Desenvolva um algoritmo CONVERSOR, este deve ler número de anos (10), e deverá converter este ano para meses, converter ano para semana, converter ano para dias.</p>

                        <div class="programa text-dark p-2">
                            <?php
                            $anos;
                            $meses;
                            $semanas;
                            $dias;

                            $anos = 10;

                            $meses = $anos * 12;
                            $semanas = (365 / 7) * $anos;
                            $dias = $anos * 365;

                            echo "<p>Em " . $anos . " anos temos " . $meses . " meses, " . round($semanas) . " semanas e " . $dias . " dias. </p>"

                            ?>
                        </div>

                    </aside>
                </div>
                <div class="container col-md-4 col-ms-4 col-xs-12">
                    <aside class="card bg-dark text-light text-center p-3 container-fluid">
                        <h2>Exercício 3</h2>
                        <p>Desenvolva um programa que leia a altura (2) e base (3) de um retângulo. Seu programa deve calcular a área do retângulo.</p>

                        <div class="programa text-dark p-2">
                            <?php
                            $altura;
                            $base;
                            $area;

                            $altura = 2;
                            $base = 3;

                            $area = $altura * $base;

                            echo "<p>Um retângulo com altura de " . $altura . "cm de altura e " . $base . "cm de base, tem como área total " . $area . "cm<sup>2</sup> quadrados. </p>"

                            ?>
                        </div>

                    </aside>
                </div>
            </aside>

            <aside class="row">
                <div class="container col-md-4 col-ms-4 col-xs-12">
                    <aside class="card bg-dark text-light text-center p-3">
                        <h2>Exercício 4</h2>
                        <p>Desenhe um programa que leia o raio de um círculo (3). Seu programa dever calcular a área e calcular o perímetro do círculo.</p>

                        <div class="programa text-dark p-2">
                            <?php
                            $raio;
                            $areaCirculo;
                            $perimetroCirculo;

                            $raio = 3;

                            $areaCirculo = pi() * pow($raio, 2);
                            $perimetroCirculo = 2 * pi() * $raio;

                            echo "<p>Um círculo com o raio de " . $raio . "cm tem como área " . round($areaCirculo, 2) . "cm<sup>2</sup> e como perímetro " . round($perimetroCirculo, 2) . "cm. </p>"

                            ?>
                        </div>

                    </aside>
                </div>
                <div class="container col-md-4 col-ms-4 col-xs-12">
                    <aside class="card bg-dark text-light text-center p-3">
                        <h2>Exercício 5</h2>
                        <p>Desenvolva um programa que leia nome (Arroz) , valor de custo de um produto (2.30). Seu programa deve o valor com juros de 200% de um valor com desconto de 8%.</p>

                        <div class="programa text-dark p-2">
                            <?php
                            $nomeProduto;
                            $valorProduto;
                            $juros;
                            $desconto;

                            $nomeProduto = "Arroz";
                            $valorProduto = 2.30;

                            $juros = $valorProduto + ($valorProduto * 2);
                            $desconto = $valorProduto - ($valorProduto * 0.08);

                            echo "<p>Um produto com o nome de " . $nomeProduto . " custa R$ " . $valorProduto . ". <br>O valor total do produto com 200% de juros é R$ " . $juros . ". Já com desconto de 8%, o valor final do produto é R$ " . round($desconto, 2) . ". </p>"

                            ?>
                        </div>

                    </aside>
                </div>
                <div class="container col-md-4 col-ms-4 col-xs-12">
                    <aside class="card bg-dark text-light text-center p-3">
                        <h2>Exercício 6 - EXTRA</h2>
                        <p>Desenvolva um programa que leia o nome, três notas e seus respectivos pesos. Seu programa deve calcular a média ponderada. Faça com que os valores sejam recebidos pela barra de endereço.</p>

                        <div class="programa text-dark p-2">
                            <?php
                            $nome;
                            $nota1;
                            $nota2;
                            $nota3;
                            $peso1;
                            $peso2;
                            $peso3;
                            $mediaPonderada;

                            $nome = $_GET["nome"];
                            $nota1 = $_GET["nota1"];
                            $nota2 = $_GET["nota2"];
                            $nota3 = $_GET["nota3"];
                            $peso1 = $_GET["peso1"];
                            $peso2 = $_GET["peso2"];
                            $peso3 = $_GET["peso3"];

                            $mediaPonderada = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);

                            echo "<p>" . $nome . " fez três provas com os respectivos pesos: " . $peso1 . ", " . $peso2 . " e " . $peso3 . ". Na primeira tirou " . $nota1 . ", na segunda tirou " . $nota2 . " e na terceira tirou " . $nota3 . ".<br>Sua média ponderada é " . $mediaPonderada . ".</p>"

                            ?>
                        </div>

                    </aside>
                </div>
            </aside>
        </section>

    </main>

</body>

</html>