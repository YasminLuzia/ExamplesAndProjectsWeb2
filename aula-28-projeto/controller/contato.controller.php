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
            <h1 class="text-center"> Contato Cliente </h1>
            <?php
            session_start();

            include '../model/contato.class.php';
            include '../util/util.class.php';

            include '../dao/contatodao.class.php';

            $util1 = new Util();
            $contatoDAO = new ContatoDAO();

            switch ($_GET['opcao']) {
                case 'enviar':
                    $nome = $_POST['txtnome'];
                    $telefone = $_POST['txttelefone'];
                    $email = $_POST['txtemail'];
                    $mensagem = $_POST['txtmensagem'];

                    if (empty($nome) || empty($telefone) || empty($email) || empty($mensagem)) {
                        echo 'Preencha os dados';
                    } else if (!$util1->testarExpressaoRegular('/^[A-Za-zÙ-Áù-á ]{2,30}$/', $nome)) {
                        echo 'Nome fora do padrão';
                    } else if (!$util1->testarExpressaoRegular('/^[0-9]{10,20}$/', $telefone)) {
                        echo 'Telefone fora do padrão';
                    } else if (!$util1->validarEmail($email)) {
                        echo 'Email fora do padrão';
                    } else {
                        $c1 = new Contato();
                        //Mandando os dados para o objeto
                        $c1->nome = $nome;
                        $c1->telefone = $telefone;
                        $c1->email = $email;
                        $c1->mensagem = $mensagem;

                        echo $c1;
                        /*echo "<hr><p>Testando objeto no Array:</p>";
                        var_dump($c1);*/

                        $contatoDAO->cadastrarContato($c1);

                        //Após cadastrar no banco informarei o sucesso para o usuário
                        header('location:../view/confirmacadastro.html');
                    }
                    break;
                case 'deletar':
                    $contatoDAO->deletarContato($_REQUEST['idcontato']);

                    header('location:../view/buscarcontatos.php');
                    break;
                case 'alterar':
                    $idcontato = $_REQUEST['idcontato'];

                    $query = 'WHERE idcontato = ' . $idcontato;

                    $contatoDAO = new ContatoDAO();

                    $contatos = array();

                    $contatos = $contatoDAO->buscar($query);

                    //Transporta resultado de buscarcontatos para alterarcontato
                    $_SESSION['contatos'] = serialize($contatos);

                    header('location:../view/alterarcontato.php');
                    break;
                case 'confirmaralteracao':
                    $c = new Contato();

                    $c->$idcontato = $_POST['txtidcontato'];
                    $c->$nome = $_POST['txtnome'];
                    $c->$telefone = $_POST['txttelefone'];
                    $c->$email = $_POST['txtemail'];
                    $c->$mensagem = $_POST['txtmensagem'];

                    $contatoDAO->alterarContato($c);

                    header('location:../view/buscarcontatos.php');
                    break;
                default:
                    echo "DEU RUIM";
            }

            ?>
        </section>

    </main>
</body>

</html>