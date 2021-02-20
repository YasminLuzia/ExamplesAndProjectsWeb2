<?php
session_start();
?>
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
            <h1 class="text-center"> Alterar Contato </h1>

            <?php
            if (isset($_SESSION['contatos'])) {
                include_once '../model/contato.class.php';

                $c = array();

                $c = unserialize($_SESSION['contatos']);
            }
            ?>

            <form action="../controller/contato.controller.php?opcao=confirmaralteracao" method="post" name="form01">
                <div class="form-group">
                    <label for="txtidcontato">
                        Código:
                    </label>
                    <input type="text" name="txtidcontato" class="form-control" value="<?php echo $c[0]->idcontato ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="txtnome">
                        Nome:
                    </label>
                    <input type="text" name="txtnome" class="form-control" value="<?php echo $c[0]->nome ?>">
                </div>
                <div class="form-group">
                    <label for="txttelefone">
                        Telefone:
                    </label>
                    <input type="text" name="txttelefone" class="form-control" value="<?php echo $c[0]->telefone ?>">
                </div>
                <div class="form-group">
                    <label for="txtemail">
                        E-mail:
                    </label>
                    <input type="email" name="txtemail" class="form-control" value="<?php echo $c[0]->email ?>">
                </div>
                <div class="form-group">
                    <label for="txtmensagem">
                        Mensagem:
                    </label>
                    <textarea name="txtmensagem" rows="6" cols="30" class="form-control"><?php echo $c[0]->mensagem ?></textarea>
                </div>
                <a href="buscarcontatos.php"><input type="button" name="cancela" value="Cancelar" class="btn btn-primary"></a>
                <input type="submit" name="envia" value="Enviar" class="btn btn-primary">
            </form>
            <?php
            unset($_SESSION['contatos']);
            ?>

        </section>
    </main>
</body>

</html>