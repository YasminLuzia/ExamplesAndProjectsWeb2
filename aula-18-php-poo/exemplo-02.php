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
        Exemplo 2
      </h2>
      <p class="center-align">
        Programa que leia nome da mercadoria, valor e forma de pagamento. Seu programa deve calcular o valor total a pagar de acordo com as regras: Pagamento à vista = conceder 5% de desconto e pagamento à prazo = acresentar 18% de juros.
      </p>
      <article class="resposta" style="width:50%; margin:auto; background-color:rgba(174, 169, 176, 0.3); border-radius:20px; padding:20px">
        <?php
        include "model/mercadoria.class.php";

        $mercadoria1 = new Mercadoria();

        $mercadoria1->setNome("TV60\"");
        $mercadoria1->setValor(1000);
        $mercadoria1->setTipoPagamento(1);

        echo $mercadoria1->toString() . "
        Total a pagar: R$ " . $mercadoria1->calcularTotal() . "</p>"
        ?>
      </article>

    </section>
  </main>
</body>

</html>