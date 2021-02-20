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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--Puxando o MEU CSS -->
  <link rel="stylesheet" href="css/estilo.css">
  <!--Puxando os Scripts Bootstrap -->
  <script type="text/javascript" src="js/bootstrap.min.js">
  </script>
  <script type="text/javascript" src="js/jquery-3.1.1.min.js">
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
        <li><a href="#home"> Home </a></li>
        <li><a href="#Funcionamento"> Funcionamento </a></li>
        <li><a href="#galeria"> Galeria </a></li>
        <li><a href="#contato"> Pokédex </a></li>
      </ul>
    </nav>

    <section class="conteudo" id="home">
      <div class="row">
        <aside class="col-md-4 col-sm-12 col-xs-12">
          <h1>Anime</h1>
          <p>O anime mostra Ash Ketchum e seu Pikachu em sua aventura para se tornar um mestre Pokémon. Seus amigos Brock e Misty o acompanham em grande parte dessa jornada. Outros protagonistas incluem Tracey, May e Max, Dawn, Iris e Cilan, Serena, Clemont e Bonnie. Ash vai passando por várias regiões ao longo de sua jornada, como a de Kanto, Jotho, Hoenn, Sinnoh, Unova, Kalos e atualmente Alola. E assim Ash junto aos seus amigos exploram esse maravilhoso mundo Pokémon cheio de aventuras e novas espécies de Pokémon.
          </p>
        </aside>
        <aside class="col-md-4 col-sm-12 col-xs-12">
          <h1>Inicial</h1>
          <p>Os treinadores recebem um Pokémon inicial para começar sua jornada no jogo. A quantidade estabelecida de iniciais Pokémon é três, das quais os treinadores podem escolher apenas um. Eles são sempre do tipo grama, tipo fogo e tipo água, um Pokémon por tipo. Por exemplo, nas versões Pokémon Red e Blue (e seus respectivos remakes, Pokémon FireRed e LeafGreen), o jogador tem a opção de escolha entre Bulbasaur (tipo grama), Charmander (tipo de fogo) e Squirtle (tipo de água).
          </p>
        </aside>
        <aside class="col-md-4 col-sm-12 col-xs-12">
          <h1>Ash</h1>
          <figure>
            <img src="img/AshPikachu.jpg" alt="">
          </figure>
        </aside>
      </div>
    </section>

    <section class="ditto" id="Funcionamento">
      <h1>Funcionamento</h1>
      <p class="espaço">Na maioria dos jogos de Pokémon, um Treinador que encontra um Pokémon selvagem é capaz de capturá-lo através de um objeto esférico chamado Pokébola. Se o Pokémon não escapar da Pokébola, ele é considerado oficialmente do Treinador. Em seguida, o Pokémon irá obedecer todos os comandos do seu mestre, a menos que o Treinador não tenha muita experiência, a ponto dele preferir agir por conta própria. Os Treinadores podem mandar seus Pokémon para batalhas contra outros Pokémon; se o Pokémon adversário é selvagem, é possível capturá-lo com uma Pokébola, aumentando o seu time de Pokémon. No entanto, os Pokémon já pertencentes a outros Treinadores não podem ser capturados, exceto sob circunstâncias especiais em certos jogos. Se um Pokémon derrota o adversário durante uma batalha, então o oponente é nocauteado (ou seja, "desmaia"). O Pokémon vencedor ganha pontos de experiência e, às vezes, pode subir de nível. Quando um Pokémon sobe de nível, as suas estatísticas de batalha são aumentadas. Os Pokémon também podem aprender novos ataques, que são técnicas usadas nas batalhas. Além disso, muitas espécies de Pokémon possuem a capacidade de evoluir e se transformar em uma espécie mais forte.</p>
    </section>

    <section class="galeria" id="galeria">
      <h1>Galeria</h1>
      <div class="row">
        <figure class="zoom col-md-3 col-sm-12 col-xs-12">
          <img src="img/ditto02.png" alt="">
        </figure>

        <figure class="zoom col-md-3 col-sm-12 col-xs-12">
          <img src="img/ditto03.png" alt="">
        </figure>

        <figure class="zoom col-md-3 col-sm-12 col-xs-12">
          <img src="img/ditto04.png" alt="">
        </figure>

        <figure class="zoom col-md-3 col-sm-12 col-xs-12">
          <img src="img/ditto07.png" alt="">
        </figure>

      </div>

      <div class="row">
        <figure class="zoom col-md-3 col-sm-12 col-xs-12">
          <img src="img/ditto05.png" alt="">
        </figure>

        <figure class="zoom col-md-3 col-sm-12 col-xs-12">
          <img src="img/ditto06.png" alt="">
        </figure>

        <figure class="zoom col-md-3 col-sm-12 col-xs-12">
          <img src="img/ditto.png" alt="">
        </figure>

        <figure class="zoom col-md-3 col-sm-12 col-xs-12">
          <img src="img/ditto08.png" alt="">
        </figure>

      </div>

    </section>



    <section class="container-fluid" id="contato">
      <h1>Pokédex</h1>
      <div class="row">
        <aside class="col-md-7 col-sm-8 col-xs-12">
          <form action="controller/pokemon.controller.php?op=cadastrar" method="post" name="form01">
            <div class="form-group">
              <label for="txtnome">
                Nome:
              </label>
              <input type="text" name="txtnome" class="form-control">
            </div>
            <div class="form-group">
              <label for="cargo">Tipo:</label>
              <select name="txttipo" class="form-control">
              <option value="agua">Água</option>
              <option value="fogo">Fogo</option>
              <option value="grama">Grama</option>
              <option value="dragao">Dragão</option>
              <option value="inseto">Inseto</option>
              <option value="fantasma">Fantasma</option>
              </select>
            </div>
            <div class="form-group">
              <label for="txtataquePrincipal">
                Ataque Principal:
              </label>
              <input type="text" name="txtataquePrincipal" class="form-control">
            </div>
            <div class="form-group">
              <label for="txtnivel">
                Nível:
              </label>
              <input type="number" name="txtnivel" class="form-control">
            </div>
            <input type="submit" name="envia" value="Enviar" class="btn btn-info">
            <input type="reset" name="apaga" value="Apagar" class="btn btn-info">
          </form>
        </aside>
        <article class="col-md-5 col-sm-6 col-xs-12">
          <figure class="zoom2">
            <img src="img/pokedex.png" alt="">
          </figure>
        </article>

        <footer class="rodape col-md-12 col-sm-12 col-xs-12">
          <address>
            juju, danie, min
          </address>
        </footer>

      </div>
    </section>
  </main>

</body>

</html>
