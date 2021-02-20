<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Iniciando PHP - Criando Primeiros Exemplos da Linguagem</title>
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
        <h1 class="text-center"> Dados Pessoais </h1>
        <hr>
        <section class="conteudo">
            <?php
            include '../model/cliente.class.php';
            include '../util/util.class.php';

            $util1 = new Util();

            $nome = $_POST['txtnome'];
            $email =  $_POST['txtemail'];
            $telefone =  $_POST['txttelefone'];

            if (empty($nome) || empty($email) || empty($telefone)) {
                echo 'Preencha os dados.';
            } else if (!$util1->validarEmail($email)) {
                echo 'Email fora do padrão.';
            } else if (!$util1->testarExpressaoRegular('/^[a-zA-ZÀ-Úà-ú ]{2,30}$/', $nome)) {
                echo 'Nome fora do padrão.';
            } else if (!$util1->testarExpressaoRegular('/^[0-9]{11}$/', $telefone)) {
                echo 'Telefone fora do padrão';
            } else {
                $cliente1 = new Cliente($nome, $email, $telefone);
                $telefoneMask = "(%s%s)%s%s%s%s%s-%s%s%s%s";

                echo $cliente1 . "
                <br>Telefone: " . $util1->formatar($telefoneMask, $telefone);

                // // The message
                // $message = $cliente1 . "
                // <br>Telefone: " . $util1->formatar($telefoneMask, $telefone);

                // // In case any of our lines are larger than 70 characters, we should use wordwrap()
                // $message = wordwrap($message, 70, "\r\n");
            }

            ?>
            <br>
            <!-- <button class="btn btn-primary" onclick="mail('yasmin.s.luzia@gmail.com', 'Email Trabalho PHP', $message)">Enviar dados</button> -->
        </section>
    </main>
</body>

</html>