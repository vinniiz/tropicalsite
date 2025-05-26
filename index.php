<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Home - Tropical Airlines</title>
    <link rel="icon" href="imagens/favicon.png">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
        <div class="container">
          <a href="index.php" class="navbar-brand">
            <img src="imagens/tropical.png" width="142">
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
<ul class="navbar-nav ml-auto">
  <!-- Link para Voos Ativos com ícone -->
  <li class="nav-item">
    <a href="vooagora.php" class="nav-link">
      <i class="fas fa-plane-departure"></i> Voos Ativos
    </a>
  </li>

  <!-- Dropdown para Equipe, Ajuda, Liveries -->
  <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bars"></i> Mais
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menuDropdown">
      <a class="dropdown-item" href="equipe.php"><i class="fas fa-users"></i> Equipe</a>
      <a class="dropdown-item" href="ajuda.php"><i class="fas fa-question-circle"></i> Ajuda</a>
      <a class="dropdown-item" href="liveries.php"><i class="fas fa-paint-brush"></i> Liveries</a>
    </div>
  </li>

  <li class="nav-item divisor"></li>

  <!-- Login/Cadastro ou Nome do Usuário -->
  <?php if (isset($_SESSION['nome'])): ?>
    <li class="nav-item">
      <span class="nav-link">
        <i class="fas fa-user"></i> Bem-vindo, <?php echo $_SESSION['nome']; ?>
      </span>
    </li>
    <li class="nav-item">
      <?php if (!empty($_SESSION['foto'])): ?>
        <img src="uploads/<?php echo $_SESSION['foto']; ?>" alt="Foto de Perfil" width="40" height="40" style="border-radius: 50%; margin-top: 8px;">
      <?php endif; ?>
    </li>
    <li class="nav-item">
      <a href="logout.php" class="nav-link">
        <i class="fas fa-sign-out-alt"></i> Sair
      </a>
    </li>
  <?php else: ?>
    <li class="nav-item">
      <a href="cadastro.html" class="nav-link">
        <i class="fas fa-user-plus"></i> Cadastre-se
      </a>
    </li>
    <li class="nav-item">
      <a href="login.html" class="nav-link">
        <i class="fas fa-sign-in-alt"></i> Entrar
      </a>
    </li>
  <?php endif; ?>
</ul>
          </div>
        </div>
      </nav>
    </header>

    <section id="home" class="d-flex">
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-12 capa">
            <div id="carousel-tropical" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h1>Nossa Frota de Aeronaves</h1>
                  <a href="" class="btn btn-lg btn-custom btn-roxo">Confira</a>
                  <a href="" class="btn btn-lg btn-custom btn-branco">Liveries</a>
                </div>
                <div class="carousel-item">
                  <h1>Rotas da Companhia</h1>
                  <a href="" class="btn btn-lg btn-custom btn-branco">Confira</a>
                </div>
              </div>
              <a href="#carousel-tropical" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>
              <a href="#carousel-tropical" class="carousel-control-next" data-slide="next">
                <i class="fas fa-angle-right fa-3x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="servicos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row albuns">
              <div class="col-md-6">
                <img src="imagens/img1.jpeg" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="imagens/img2.jpeg" class="img-fluid">
              </div>
            </div>
            <div class="row albuns">
              <div class="col-md-6">
                <img src="imagens/img3.jpeg" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="imagens/img4.jpeg" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h2>O que a Tropical Airlines tem?</h2>
            <h3>Aeronaves</h3>
            <p>Nossas aeronaves.</p>
            <h3>Equipe</h3>
            <p>Nossa Equipe</p>
            <h3>Rotas</h3>
            <p>Nossas rotas.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="recursos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Nossas aeronaves</h2>
            <h3>Sobre</h3>
            <p>--</p>
            <h3>Variedade</h3>
            <p>--</p>
            <h3>Quantidade</h3>
            <p>---</p>
          </div>
          <div class="col-md-8">
            <div class="row rotacionar">
              <div class="col-md-6">
                <img src="imagens/araras.png" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="imagens/araras.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="imagens/tropical.png" width="142">
          </div>
          <div class="col-md-2">
            <h4>company</h4>
            <ul class="navbar-nav">
              <li><a href="">Sobre</a></li>
              <li><a href="">Equipe</a></li>
              <li><a href="">Frota</a></li>
              <li><a href="">Rotas</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>comunidades</h4>
            <ul class="navbar-nav">
              <li><a href="">--</a></li>
              <li><a href="">--</a></li>
              <li><a href="">--</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>links úteis</h4>
            <ul class="navbar-nav">
              <li><a href="">--</a></li>
              <li><a href="">--</a></li>
              <li><a href="">--</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li><a href=""><img src="imagens/facebook.png"></a></li>
              <li><a href=""><img src="imagens/twitter.png"></a></li>
              <li><a href=""><img src="imagens/instagram.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
