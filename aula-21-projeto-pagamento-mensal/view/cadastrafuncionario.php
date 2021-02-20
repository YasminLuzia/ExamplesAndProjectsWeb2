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
            <h1 class="text-center">Cadastro para Folha de Pagamento</h1>
        </header>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
            </ol>
        </nav>
        <form method="post" action="../controller/folhapagamento.controller.php" name="cadastraFuncionario" class="container-flex mb-4">
            <div class="form-group">
                <label for="textnome">Nome</label>
                <input type="text" class="form-control" name="textnome">
            </div>

            <div class="row">
                <div class="form-group col-md-5">
                    <label for="textcpf">CPF</label>
                    <input type="text" class="form-control" name="textcpf">
                </div>
                <div class="form-group col-md-7">
                    <label for="textcargo">Cargo</label>
                    <input type="text" class="form-control" name="textcargo">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-7">
                    <label for="textvalorhora">Valor hora</label>
                    <input type="text" class="form-control" name="textvalorhora">
                </div>
                <div class="form-group col-md-5">
                    <label for="textquantidadehoras">Quantidade de horas de trabalho</label>
                    <input type="text" class="form-control" name="textquantidadehoras">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-5">
                    <label for="texthorasextras50">Horas extras durante a semana</label>
                    <input type="text" class="form-control" name="texthorasextras50">
                </div>
                <div class="form-group col-md-7">
                    <label for="texthorasextras100">Horas extras durante finais de semana e feriados</label>
                    <input type="text" class="form-control" name="texthorasextras100">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-7">
                    <label for="textdependentes">Quantidade de dependentes</label>
                    <input type="text" class="form-control" name="textdependentes">
                </div>
                <div class="form-group col-md-5">
                    <label for="selectinsalubridade">Tipo de insalubridade</label>
                    <select name="selectinsalubridade" class="form-control">
                        <option value="0">Selecione</option>
                        <option value="1">Sem Insalubridade</option>
                        <option value="2">Mínimo</option>
                        <option value="3">Médio</option>
                        <option value="4">Máximo</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-5">
                    <label for="textvaletransporte">Valor de transporte mensal</label>
                    <input type="text" class="form-control" name="textvaletransporte">
                </div>
                <div class="form-group col-md-7">
                    <label for="textrefeicaodiaria">Valor da refeição diária</label>
                    <input type="text" class="form-control" name="textrefeicaodiaria">
                </div>
            </div>
            <div class="form-group">
                <label for="textemail">Email</label>
                <input type="email" class="form-control" name="textemail">
            </div>

            <input type="submit" class="btn btn-primary" name="cadastrarFuncionario" value="Cadastrar Funcionário">
        </form>
    </main>
</body>

</html>