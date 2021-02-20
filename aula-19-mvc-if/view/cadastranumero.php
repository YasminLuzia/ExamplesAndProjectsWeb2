<!DOCTYPE html>
<html lang="pt-br">

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
            <h2>Cadastrando um número para verificação</h2>

            <form action="../controller/numero.controller.php" method="get" name="cadastranumero">
                <div class="form-group">
                    <label for="numero">Número:</label>
                    <input type="number" name="txtnumero" class="form-control">
                </div>
                <input type="submit" name="verifica" value="Verifica" class="btn btn-info">
            </form>

            <p>
                <a href="../index.php">Voltar</a>
            </p>

        </section>
    </main>

</body>

</html>