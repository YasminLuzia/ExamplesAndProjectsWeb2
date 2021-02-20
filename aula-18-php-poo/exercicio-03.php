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
        Exercício 3
      </h2>
      <p class="center-align">
        Pense em um hotel onde podemos fazer reservas. A diária durante a semana custa 180,00 - aos finais de semana essa diária vai à 210,00.
        A diária é para quarto de casal, caso tenha crianças até 10 anos - o valor da diária aumenta em R$50,00 por criança.
        <br>
        Faça um programa que receba o número de diárias desejada, se a mesma é dia de semana (1) ou final de semana(2), receba o número de crianças até 10 anos, e ao final calcule o total da diária. OBS.: Caso seja apenas o casal sem crianças e fique mais de 3 dias - conceder 8% de desconto no total das diárias.
      </p>
      <article class="resposta" style="width:50%; margin:auto; background-color:rgba(174, 169, 176, 0.3); border-radius:20px; padding:20px">
        <?php
        include "model/cliente.class.php";

        $cliente1 = new Cliente();

        $cliente1->setDiarias(4);
        $cliente1->setTipo(2);
        $cliente1->setCrianca(0);

        echo $cliente1->toString() . "<p>
        Total a pagar: R$ " . $cliente1->calcularTotal() . "</p>"
        ?>
      </article>

    </section>
  </main>
</body>

</html>