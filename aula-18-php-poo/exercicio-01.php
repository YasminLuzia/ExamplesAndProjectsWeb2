<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>
    PHO Orientado a Objetos
  </title>
  <meta name="author" content="Aline Zenker">
  <meta name="description" content="PHP OO">
  <meta name="keywords" content="PHP, CSS, Estilização, HTML, PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
  <main class="geral container-fluid">

    <nav>
      <div class="nav-wrapper blue darken-4">
        <a href="#" class="brand-logo left">PHP OO</a>
        <ul class="nav-mobile right">
          <li><a href="index.php">Exemplo01</a></li>
          <li><a href="exemplo-02.php">Exemplo02</a></li>
          <li><a href="exercicio-01.php">Exercício01</a></li>
          <li><a href="exercicio-02.php">Exercício02</a></li>
          <li><a href="exercicio-03.php">Exercício03</a></li>
        </ul>
      </div>
    </nav>
    <section class="conteudo blue lighten-4" style="height:600px">
      <h2 class="center-align" style="margin-top:0">
        Exercício 1
      </h2>
      <p class="center-align">
        Um funcionário recebe um salário fixo mais 4% de comissão sobre as vendas. Faça um programa que receba o salário fixo de 5400.40, e o valor de suas vendas de 15000.20. Calcule e mostre a comissão e o salário final do funcionário.
      </p>
      <article class="resposta" style="width:50%; margin:auto; background-color:rgba(174, 169, 176, 0.3); border-radius:20px; padding:20px">
        <?php
        include "model/funcionario.class.php";

        $funcionario1 = new Funcionario(5400.40, 15000.20);

        echo $funcionario1->toString() . "</p><p>
        Comissão: R$ " . round($funcionario1->calcularComissao(), 2) . "</p><p>
        Salário Final: R$ " . round($funcionario1->calcularSalarioFinal(), 2) . "</p>"
        ?>
      </article>

    </section>
  </main>
</body>

</html>