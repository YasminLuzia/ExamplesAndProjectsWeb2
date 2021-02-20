<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> EMPRESA TAL - Site Modelo Para Integração BD </title>
    <link rel="shortcut icon" href="img/icone.png">
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
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
          event.preventDefault();
          $('html,body').animate({
            scrollTop: $(this.hash).offset().top
          }, 900);
        });
      });
    </script>
  </head>

  <body>
    <main>
      <header id="topo" class="jumbotron text-center" style="margin-bottom:0">
        <h1>EMPRESA CADASTRA</h1>
      </header>

      <nav class="navbar navbar-inverse" style="margin-bottom: 0; border-radius: 0;">
        <ul class="nav navbar-nav">
          <li><a href="../index.php">Home</a></li>
        </ul>
      </nav>

      <section class="home container-fluid" id="home">
        <div class="row">
          <aside class="col-md-4 col-sm-6 col-xs-12">
            <h1 class="text-center"> Contato Cliente </h1>


          </aside>
        </div>
      </section>

    </main>
  </body>
</html>
