<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <title>Projeto folha de pagamento - MVC e Formulário</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yasmin L">
    <meta name="description" content="Projeto folha de pagamento - MVC e Formulário no PHP">
    <meta name="keyword" content="PHP, MVC, HTML, Formulario, Projeto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <header class="jumbotron">
            <h1 class="text-center">Folha de Pagamento</h1>
        </header>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../view/cadastrafuncionario.php">Cadastro</a></li>
                <li class="breadcrumb-item active" aria-current="page">Folha de pagamento</li>
            </ol>
        </nav>
        <div class="mx-auto row mb-4">

            <?php
            include '../model/funcionario.class.php';
            include '../util/util.class.php';

            $util1 = new Util();

            /*if (!$util1->validar('dependentes', $dependentes)) {
                $dependentes = 0;
            } else if (!$util1->validar('quantidadeHoras', $quantidadeHoras)) {
                $quantidadeHoras = 220;
            } else*/

            $nome = $_POST['textnome'];
            $cpf = $_POST['textcpf'];
            $cargo = $_POST['textcargo'];
            $valorHora = $_POST['textvalorhora'];
            $quantidadeHoras = (!$util1->validar('quantidadeHoras', $_POST['textquantidadehoras'])) ? '220': $_POST['textquantidadehoras'];
            $horasExtras50 = $_POST['texthorasextras50'];
            $horasExtras100 = $_POST['texthorasextras100'];
            $dependentes = (!$util1->validar('dependentes', $_POST['textdependentes'])) ? '0' : $_POST['textdependentes'];
            $insalubridade = $_POST['selectinsalubridade'];
            $valeTransporte = $_POST['textvaletransporte'];
            $refeicaoDiaria = $_POST['textrefeicaodiaria'];
            $email = $_POST['textemail'];

            if (empty($nome) || empty($cpf) || empty($cargo) || empty($valorHora) || empty($quantidadeHoras) || empty($horasExtras50) || empty($horasExtras100) || $insalubridade == 0 || empty($valeTransporte) || empty($refeicaoDiaria) || empty($email)) {
                echo '<div class="alert alert-danger mx-auto" role="alert">
                        Por favor, preencha <strong>todos</strong> os campos do formulário corretamente.
                    </div>';
            } else {

                $funcionario1 = new Funcionario($nome, $cpf, $cargo, $valorHora, $quantidadeHoras, $horasExtras50, $horasExtras100, $dependentes, $insalubridade, $valeTransporte, $refeicaoDiaria, $email);

                echo '<div class="card col-md-6">
                        <div class="card-body">
                            <p>Dados informados: </p> ' . $funcionario1 . '
                        </div>
                    </div>
                    <div class="card col-md-6">
                        <div class="card-body">
                            <p>Cálculos: </p>
                            <p>
                            Salário bruto: R$ ' . $funcionario1->calcularSalarioBruto() . '<br>
                            Vale transporte: R$ ' . $funcionario1->calcularValeTransporte() . '<br>
                            Salário familia:  R$ ' . $funcionario1->calcularSalarioFamilia() . '<br>
                            Insalubridade: R$ ' . $funcionario1->calcularInsalubridade() . '<br>
                            INSS: R$ ' . $funcionario1->calcularInss() . '<br>
                            Vale refeição: R$ ' . $funcionario1->calcularValeRefeicao() . '<br>
                            Horas extras de 50%: R$ ' . $funcionario1->calcularValorExtra50() . '<br>
                            Horas extras de 100%: R$ ' . $funcionario1->calcularValorExtra100() . '<br>
                            Total de horas extras: R$ ' . $funcionario1->calcularTotalHorasExtras() . '<br>
                            Salário liquido: R$ ' . $funcionario1->calcularSalarioLiquido() . '
                            </p>
                        </div>
                    </div>';
            }

            ?>
        </div>
    </main>
</body>

</html>