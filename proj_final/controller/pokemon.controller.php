<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pokemundo</title>
  <meta name="author" content="Juliano Oliveira, Daniezinha pijamas, Little Yasmina">
  <meta name="description" content="Página WEB sobre pokemon">
  <meta name="keywords" content="Pokemón, pokemundo, pokemons, cadastro de pokemons, Ditto">
  <link rel="shortcut icon" href="img/icon.png">
  <!-- Habilitando leitura do tamanho do dispositivo -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Incorporar o Framework Bootstrap CSS - versão 3.3 -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!--Puxando o MEU CSS -->
  <link rel="stylesheet" href="../css/estilo.css">
  <!--Puxando os Scripts Bootstrap -->
  <script type="text/javascript" src="../js/bootstrap.min.js">
  </script>
  <script type="text/javascript" src="../js/jquery-3.1.1.min.js">
  </script>
  <!--Puxando o MEU JS-->
  <script type="text/javascript" src="js/js.js">
  </script>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
  <main class="geral container-fluid">
    <header class="topo">
      <!--o conteúdo ficará apenas no css-->
    </header>
    <nav class="navbar navbar-light justify-content-center">
      <ul class="nav navbar-nav justify-content-center">
        <li><a href="../index.php"> Home </a></li>
        <li><a href="../view/buscarpokemons.php"> Buscar Pokémons </a></li>
      </ul>
    </nav>

    <section class="conteudo" id="home">
      <h1 class="text-center"> Cadastro Pokemón </h1>

      <?php
      session_start();

      include '../model/pokemon.class.php';
      include '../util/util.class.php';
      include '../dao/pokemondao.class.php';

      //classe de validação:
      $u1 = new Util();

      $pokemonDAO = new PokemonDAO();

      //criando switch case para organizar as chamadas de funções no controller:
      switch ($_GET['op']) {

        case 'cadastrar':

          $nome =  $_POST['txtnome'];
          $tipo = $_POST['txttipo'];
          $ataquePrincipal = $_POST['txtataquePrincipal'];
          $nivel = $_POST['txtnivel'];
          
          $emaildestinatario = 'daniokgamers@gmail.com';


          //Mensagem - na real assunto do e-mail:
          $mensagemHTML = '
          Novo Pokemón adicionado a Pokedéx - 
          Nome: '.$nome.' -
          Tipo: '.$tipo ;

          $headers = "Novo Pokemón adicionado a Pokedéx -
Nome: $nome -
Tipo: $tipo -
Ataque Principal: $ataquePrincipal -
Nível: $nivel";
          
          // return-path - envio
          $envio = mail($emaildestinatario, $mensagemHTML, $headers);

          if (empty($nome) || empty($tipo) || empty($ataquePrincipal) || empty($nivel)) {
            echo 'Preencha os dados.';
          } else if (!$u1->testarExpressaoRegular('/^[A-Za-zÙ-Áù-á ]{2,30}$/', $nome)) {
            echo 'Nome fora do padrão';
          } else if (!$u1->testarExpressaoRegular('/^[A-Za-zÙ-Áù-á ]{2,30}$/', $ataquePrincipal)) {
            echo 'Ataque principal fora de padrão';
          } else if (!$u1->testarExpressaoRegular('/^[1-50]$/', $nivel)) {
            echo 'Nível fora de padrão';
          } else {
            $p1 = new Pokemon();

            $p1->nome = $nome;
            $p1->tipo = $tipo;
            $p1->ataquePrincipal = $ataquePrincipal;
            $p1->nivel = $nivel;

            echo $p1;

            //echo "<hr><p>Testando o objeto no array </p>";
            //var_dump($c1);

            //CONEXAO BANCO:
            $pokemonDAO->cadastrarPokemon($p1);

            header('location:../view/confirmacadastro.html');
          }
          break;
        case 'deletar':
          //função que deleta:
          $pokemonDAO->deletarPokemon($_REQUEST['idpokemon']);
          //direcionar:
          header('location:../view/buscarpokemons.php');
          break;

        case 'alterar':
          //id:
          $idpokemon = $_REQUEST['idpokemon'];
          //query de busca:
          $query = 'WHERE idpokemon = ' . $idpokemon;
          //guardar o resultado da busca:
          $pokemons = array();
          //armazenar a resposta:
          $pokemons = $pokemonDAO->buscar($query);

          $_SESSION['pokemons'] = serialize($pokemons);
          //página que permite a alteração:
          header('location:../view/alterarpokemon.php');
          break;

          //alteração:
        case 'confirmaralteracao':

          $p = new Pokemon();

          $p->idpokemon =  $_POST['txtidpokemon'];
          $p->nome =  $_POST['txtnome'];
          $p->tipo = $_POST['txttipo'];
          $p->ataquePrincipal = $_POST['txtataquePrincipal'];
          $p->nivel = $_POST['txtnivel'];
          
          $pokemonDAO->alterarPokemon($p);
          //Direciona para o buscar:
          header('location:../view/buscarpokemons.php');
          break;
        default:
          echo "AFF! BURRO!";
      }
      ?>
    </section>

  </main>
</body>

</html>