<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=".../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <?php
      require_once './vendor/autoload.php>';
    ?>


    <title>ComicsNews</title>
  </head>

  <body>
    <header>
      <div class='d-flex flex-column flex-md-row align-items-center p-2 px-md-4 mb-4 bg-success text-white border-bottom shadow-sm'>
        <h5 class="my-0 mr-md-auto font-weight-normal">ComicsNews</h5>
        <!--
          <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
          </nav>
        -->
          <a class="btn btn-outline-light" href="cadastrar.php">Entrar</a>
      </div>
    </header>
  <?php
    require_once 'php/noticias.php';
    $noticia1 = new Noticia;
    //$noticia1->addNoticia(1,"titulo","descrição","imagem",date('d/m/Y'),1);
    //echo $noticia1->getNoticia(1);
    //style="background-color: #b6c700;">
  ?>
  <main role="main">
    <div class="container">
      <div class="row">
        <?php
          $noticia_list = $noticia1->getAllNoticia();
          $noticias = "";
          if (!empty($noticia_list)) {
              foreach ($noticia_list as $row => $noticia) {
                  $noticias .=
                '<div class="col-md-3">
                  <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="http://127.0.0.1/estagio%20web/ComicsNews/imagens/img_avatar1.png" alt="Card image cap">
                    <div class="card-img-overlay ">
                        <img class="rounded float-left" src=".../../imagens/site/calendar-alt-regular.svg" alt="" width="14" height="14">
                        <p class="card-text"><small class="text-success">'.date("d/F/y", strtotime($noticia['data'])).' publicado por '.$noticia['autor'].'</small></p>
                        <p class="card-title">'.$noticia['titulo'].'</p>
                        <p class="card-text">'.$noticia['noticia'].'...</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>';
              }
          } else {
              $noticias = 'Não temos noticias';
          }
          echo $noticias;
        ?>

      </div>
    </div>
  </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=".../../vendor/components/jquery/jquery.slim.min.js"></script>
    <script src=".../../js/popper/1.14.4/popper.min.js"></script>
    <script src=".../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
