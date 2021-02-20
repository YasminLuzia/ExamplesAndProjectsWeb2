<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> EMPRESA TAL - Site Modelo Para Integração BD </title>
    <link rel="shortcut icon" href="../img/icone.png">
    <meta name="author" content="Aline Zenker">
    <meta name="description" content="Integrando FRON x BACK x BD">
    <meta name="keywords" content="PHP, HTML, BD, CSS, JS">
    <!-- Habilitando a leitura do tamanho do dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap - download -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- CSS padrão -->
    <link rel="stylesheet" type="../text/css" href="css/style.css">
    <!-- Scripts do Bootstrap -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>
    <main>
        <header id="topo" class="jumbotron text-center" style="margin-bottom:0">
            <h1>EMPRESA CADASTRA</h1>
        </header>


        <nav class="navbar navbar-inverse" style="margin-bottom: 0; border-radius: 0;">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../view/buscarcontatos.php">Visualizar Contatos</a></li>
            </ul>
        </nav>

        <section class="home container-fluid" id="home">
            <h1 class="text-center"> Lista de Contatos </h1>
            <?php
            include '../model/contato.class.php';
            include '../dao/contatodao.class.php';

            $contatoDAO = new ContatoDAO();

            $contatos = $contatoDAO->buscarContatos();

            // $dados = implode("<br>", $contatos);
            // echo $dados;

            // foreach ($contatos as $c) {
            //     echo "<p><hr>" . $c . "</p>";
            // }
            ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Mensagem</th>
                        <th>Editar/Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contatos as $c) {
                        echo "<tr>";
                        echo "<td>" . $c->idcontato . "</td>";
                        echo "<td>" . $c->nome . "</td>";
                        echo "<td>" . $c->telefone . "</td>";
                        echo "<td>" . $c->email . "</td>";
                        echo "<td>" . $c->mensagem . "</td>";
                        echo "<td>
                            <a href='../controller/contato.controller.php?opcao=alterar&idcontato=$c->idcontato'><img src='../img/edita.png' alt='Icone Edita'></a>
                            <a href='../controller/contato.controller.php?opcao=deletar&idcontato=$c->idcontato'><img src='../img/exclui.png' alt='Icone Exclui'></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </section>

    </main>
</body>

</html>