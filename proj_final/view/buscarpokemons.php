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
        <li><a href="buscarpokemons.php"> Visualizar Pokédex </a></li>
      </ul>
    </nav>

      <section class="home container-fluid" id="home">

        <h1 class="text-center"> Lista de Pokémons </h1>

        <?php
          include '../model/pokemon.class.php';
          include '../dao/pokemondao.class.php';

          $pokemonDAO = new PokemonDAO();
          //objeto para pegar o resultado da busca:
          $pokemons = $pokemonDAO->buscarPokemons();

         ?>

         <table class="table table-striped table-hover">
           <thead>
             <tr>
               <th>Código</th>
               <th>Nome</th>
               <th>Tipo</th>
               <th>Ataque-Principal</th>
               <th>Nível</th>
               <th>Editar</th>
               <th>Excluir</th>
             </tr>
           </thead>

           <tbody>
             <?php
                foreach ($pokemons as $p) {
                  echo "<tr>";
                  echo "<td>".$p->idpokemon."</td>";
                  echo "<td>".$p->nome."</td>";
                  echo "<td>".$p->tipo."</td>";
                  echo "<td>".$p->ataquePrincipal. "</td>";
                  echo "<td>".$p->nivel."</td>";
                  echo "<td class='tamanho'>
                  <a class= 'tamanho' href='../controller/pokemon.controller.php?op=alterar&idpokemon=$p->idpokemon'><img src='../img/edita.png' alt='Icone Editar'></a>
                  </td>";
                  echo "<td class='tamanho'>
                  <a class= 'tamanho' href='../controller/pokemon.controller.php?op=deletar&idpokemon=$p->idpokemon'>
                    <img src='../img/exclui.png' alt='Icone Excluir'>
                  </a>
                  </td>";
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
