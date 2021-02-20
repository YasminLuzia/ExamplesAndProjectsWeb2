<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas de PHP - Programando em linguagem de script</title>
    <meta name="author" content="Yasmin L">
    <meta name="description" content="Primeira aula de prática PHP - 
    Linguagem de programação web">
    <meta name="keywords" content="PHP, programação, variáveis, html, css">
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

<body>
    <main class="container-fluid">
        <header class="jumbotron">
            <h1 class="display-3 text-center text-primary">Exemplos PHP</h1>
        </header>
        <section>
            <h2>Trabalhando com algoritmos de cálculos: </h2>
            <?php
            $produto;
            $valor;
            $quantidade;
            $valorPagar;

            $produto = "Bis";
            $valor = 4.50;
            $quantidade = 10;

            $valorPagar = $valor * $quantidade;

            echo "Maria comprou " . $quantidade . " " . $produto . ". <br>
            Cada " . $produto . " custa R$ " . $valor . ". <br>
            Maria precisa pagar R$ " . $valorPagar . ".";
            ?>
        </section>
        <nav>
            <ul>
                <li><a href="index.php">Home</a> </li>
                <li><a href="exemplo2.php">Exemplo 2</a></li>
                <li><a href="exemplo3.php">Exemplo 3</a></li>
                <li><a href="exemplo4.php">Exemplo 4</a></li>
                <li><a href="exemplo5.php">Exemplo 5</a></li>
                <li><a href="exemplo6.php">Exemplo 6</a></li>
                <li><a href="exemplo7.php">Exemplo 7</a></li>
                <li><a href="exemplo8.php">Exemplo 8</a></li>
                <li><a href="exemplo9.php">Exemplo 9</a></li>
                <li><a href="exemplo10.php">Exemplo 10</a></li>
            </ul>
        </nav>
    </main>

</body>

</html>