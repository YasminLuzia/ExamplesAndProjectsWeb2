<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Trabalhando com Laços de Repetição</title>
    <meta charset="utf-8">
    <meta name="author" content="Aline Zenker">
    <meta name="description" content="Exemplos desenvolvidos nas
		aulas de PHP para exemplificar seu uso, os mesmos serão mais básicos,
		com uso de echo, operadores...">
    <meta name="keywords" content="HTML, CSS, PHP, echo, programação">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <main class="container-fluid">
        <h1 class="text-center"> Trabalhando com Laços de repetição / While / Do While / For</h1>
        <hr>
        <h2>Exemplo While</h2>
        <p>Mostra de 1 até 5 na tela</p>
        <?php
        $count = 1;
        while ($count <= 5) {
            echo $count . "<br>";
            $count++;
        }
        ?>
        <h2>Exemplo Enquete - 5 frutas que gosta</h2>
        <?php
        $cont = 1;
        while ($count <= 5) {
            echo "<input type='text' name='fruta$cont' placeholder='Fruta $cont'> <br>";
            $cont++;
        }
        ?>
        <h2>Exemplo Do While</h2>
        <p>Mostra de 1 até 5 na tela</p>
        <?php
        $count = 1;
        do {
            echo $count . "<br>";
            $count++;
        } while ($count <= 5);
        ?>
        <h2>Exemplo For</h2>
        <p>Mostra de 1 até 5 na tela</p>
        <?php
        for ($count = 1; $count <= 5; $count++) {
            echo $count . "<br>";
        };
        ?>
    </main>
</body>

</html>