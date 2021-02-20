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
      include '../model/pessoa.class.php';
      include '../util/util.class.php';

      $util = new Util();

      $nome = $_POST['txtnome'];
      $sobrenome = $_POST['txtsobrenome'];
      $email = $_POST['txtemail'];
      $login = $_POST['txtlogin'];
      $senha = $_POST['passsenha'];
      $anoNascimento = $_POST['numano'];

      if (empty($nome) || empty($sobrenome) || empty($email) || empty($login) || empty($senha) || empty($anoNascimento)) {
        echo "Preencha todos os dados.";
      } else if (!$util->validarEmail($email)) {
        echo "Email fora do padrão.";
      } else if (!$util->testarExpressao('/^[a-zA-Z ]{2, 30}$/', $nome)) {
        echo "Nome fora do padrão.";
      } else if (!$util->testarExpressao('/^[a-zA-Z ]{2, 30}$/', $sobrenome)) {
        echo "Sobrenome fora do padrão.";
      } else {

        $nomeCorreto = $util->converterMaiusculo($nome);
        $loginCorreto = $util->converterMinusculo($login);

        $p1 = new Pessoa($nomeCorreto, $sobrenome, $email, $loginCorreto, $senha, $anoNascimento);

        echo "<p>Dados: " . $p1 .
          "<br>Idade: " . $p1->calcularIdade() .
          "<br>Maior ou Menor? " . $p1->acharMaiorOuMenor2() .
          "</p>";
      }

      ?>
    </section>

  </main>
</body>

</html>