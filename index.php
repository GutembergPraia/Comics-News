<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=".../../css/bootstrap/4.1.3/bootstrap.min.css">

    <title>ComicsNews</title>
  </head>

  <body>
    <header>
    <div class="collapse bg-info" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha">
              </div>
              <button type="submit" class="btn btn-primary" name="btn-login">Login</button>
            </form>
            <?php
              require_once 'php/usuario.php';
              
              if(isset($_POST['btn-login'])){
                $usuario1 = new Usuairo;
                $usuario1->login($_POST['email'], $_POST['senha']);
              }

            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark shadow-sm" style="background-color: #b6c700;">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>ComicsNews</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>
  <?php
    require_once 'php/noticias.php';
    $noticia1 = new Noticia;
    //$noticia1->addNoticia(1,"titulo","descrição","imagem",date('d/m/Y'),1);
    echo $noticia1->getNoticia(1);
  ?>

  <main role="main">
    <div class="container">
      <div class="row">
        <?php
          echo $noticia1->getAllNoticia();
        ?>
      </div>
    </div>
  </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=".../../js/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src=".../../js/popper/1.14.4/popper.min.js"></script>
    <script src=".../../js/bootstrap/4.1.3/bootstrap.min.js"></script>
  </body>
</html>
