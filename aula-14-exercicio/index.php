<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <title>Exercicios da aula 14 - PHP</title>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yasmin L">
    <meta name="description" content="Exercicios da aula 14 - Trabalhando com porcentagem PHP">
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
        <header class="jumbotron">
            <h1 class="text-center text-primary display-3">Algoritmos com PHP</h1>
        </header>

        <section class="row">
            <aside class="col-md-3">
                <div class="card ">
                    <div class="p-2">
                        <h2>Exercício 1</h2>
                        <p>Faça um programa que receba o preço por litro de um combustível (4.69), a quantidade de quilômetros por litro de um determinado carro (14), e a distância a percorrer desejada (600). Seu programa deverá exibir quantos litros serão necessários para percorrer esta distância e quanto será gasto.</p>
                    </div>
                    <div class="bg-secondary text-light p-2">
                        <?php
                        $precoLitro;
                        $quilometrosLitro;
                        $distanciaDesejada;

                        $litrosDistancia;
                        $gasto;

                        $precoLitro = 4.69;
                        $quilometrosLitro = 14;
                        $distanciaDesejada = 600;

                        $litrosDistancia = $distanciaDesejada / $quilometrosLitro;
                        $gasto = $litrosDistancia * $precoLitro;

                        echo "Para percorrer " . $distanciaDesejada . " km, com um carro de autonomia " . $quilometrosLitro . "km/litro. Você precisa de " . round($litrosDistancia, 2) . " Litros de combustível e pagará " . $gasto . " reais."

                        ?>
                    </div>
                </div>
            </aside>


            <aside class="col-md-3">
                <div class="card ">
                    <div class="p-2">
                        <h2>Exercício 2</h2>
                        <p>Um funcionário recebe um salário fixo mais 4% de comissão sobre as vendas. Faça um programa que receba o salário fixo de 5400.40, e o valor de suas vendas de 15000.20. Calcule e mostre a comissão e o salário final do funcionário. </p>
                    </div>
                    <div class="bg-secondary text-light p-2">
                        <?php
                        $salarioFixo;
                        $valorVendas;
                        $valorComissao;
                        $salarioFinal;

                        $salarioFixo = 5400.40;
                        $valorVendas = 15000.20;

                        $valorComissao = $valorVendas * 0.04;
                        $salarioFinal = $valorComissao + $salarioFixo;

                        echo "Salário Fixo: R$ " . $salarioFixo . " <br>
                        Valor Vendas: R$ " . $valorVendas . " <br>
                        Comissão: R$ " . round($valorComissao, 2) . " <br>
                        Salário Final: R$ " . round($salarioFinal, 2) . ".";

                        ?>
                    </div>
                </div>
            </aside>

            <aside class="col-md-3">
                <div class="card ">
                    <div class="p-2">
                        <h2>Exercício 3</h2>
                        <p>Faça um programa que receba o preço de um produto= 260.50, e o n° de parcelas desejado = 3. O programa deverá seguir a tabela abaixo e informar o valor total a pagar, e o valor de cada parcela. Até 3 parcelas = Terá 12% de juros sobre o valor do produto. Acima de 3 parcelas = Terá 25% de juros sobre o valor do produto.</p>
                    </div>
                    <div class="bg-secondary text-light p-2">
                        <?php
                        $precoProduto;
                        $parcelas;
                        $juros;
                        $valorParcela;

                        $precoProduto = 260.50;
                        $parcelas = 3;

                        if ($parcelas <= 3)
                            $juros = $precoProduto * 1.12;
                        else
                            $juros = $precoProduto * 1.25;

                        $valorParcela = $juros / $parcelas;

                        echo "Produto custa: R$ " . $precoProduto . " <br>
                        Número de Parcelas: " . $parcelas . " <br>
                        Valor à Pagar: R$ " . $juros . " <br>
                        Valor de Cada Parcela: R$ " . round($valorParcela, 2) . "</p>"

                        ?>
                    </div>
                </div>
            </aside>

            <aside class="col-md-3">
                <div class="card ">
                    <div class="p-2">
                        <h2>Exercício 4 - EXTRA</h2>
                        <p>Faça um algoritmo que receba três notas (10 - 9 - 7) , calcule e mostre a média aritmética, após retorne se o aluno foi aprovado ou reprovado. OBS.: Para ser aprovado a média deve ser 6 ou mais.</p>
                    </div>
                    <div class="bg-secondary text-light p-2">
                        <?php
                        $nota1;
                        $nota2;
                        $nota3;
                        $media;
                        $aprovadoReprovado;

                        $nota1 = 10;
                        $nota2 = 9;
                        $nota3 = 7;

                        $media = ($nota1 + $nota2 + $nota3) / 3;

                        if ($media >= 6)
                            $aprovadoReprovado = "Aprovado";
                        else
                            $aprovadoReprovado = "Reprovado";

                        echo "O aluno tirou as respectivas notas " . $nota1 .", " . $nota2 . ", " . $nota3 . ". <br>
                        Resultado final: " . $aprovadoReprovado . "</p>"

                        ?>
                    </div>
                </div>
            </aside>

        </section>

    </main>

</body>

</html>