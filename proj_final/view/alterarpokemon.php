<?php
session_start();
?>
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
        <li><a href="../view/buscarpokemons.php"> Visualizar Pokédex </a></li>
      </ul>
    </nav>

    <section class="conteudo" id="home">

      <h1 class="text-center"> Alterar Pokemon </h1>

      <?php
      if (isset($_SESSION['pokemons'])) {
        include_once '../model/pokemon.class.php';
        $p = array();
        $p = unserialize($_SESSION['pokemons']);
      }
      ?>
      <form action="../controller/pokemon.controller.php?op=confirmaralteracao" method="post" name="form01">
        <div class="form-group">
          <label for="txtidpokemon">
            Código:
          </label>
          <input type="text" name="txtidpokemon" class="form-control" value="<?php echo $p[0]->idpokemon ?>" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="txtnome">
            Nome:
          </label>
          <input type="text" name="txtnome" class="form-control" value="<?php echo $p[0]->nome ?>">
        </div>
        <div class="form-group">
          <label for="txttipo">
            Tipo:
          </label>
          <input type="text" name="txttipo" class="form-control" value="<?php echo $p[0]->tipo ?>">
        </div>
        <div class="form-group">
          <label for="txtataquePrincipal">
            Ataque Principal:
          </label>
          <input type="text" name="txtataquePrincipal" class="form-control" value="<?php echo $p[0]->ataquePrincipal ?>">
        </div>
        <div class="form-group">
          <label for="txtnivel">
            Nivel:
          </label>
          <input type="number" name="txtnivel" class="form-control" value="<?php echo $p[0]->nivel ?>">
        </div>
        <?php

        unset($_SESSION['pokemons']);
        ?>
        <a href="buscarpokemons.php"><input type="button" name="cancela" value="Cancelar" class="btn btn-primary"></a>
        <input type="submit" name="altera" value="Alterar" class="btn btn-primary">
      </form>

    </section>
  </main>
</body>

</html>