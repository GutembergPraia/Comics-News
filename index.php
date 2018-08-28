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
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
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
    $noticia1->addNoticia(1,"titulo","descrição","imagem",date('d/m/Y'),1);
  ?>

  <main role="main">
    <div class="container">
      <div class="row">
        <?php
          $noticiaArray = $noticia1->getAllNoticia();
          echo $noticiaArray;
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
