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
      <div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 mb-4 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">ComicsNews</h5>
        <!--
          <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
          </nav>
        -->
          <a class="btn btn-outline-primary" href="#">Login</a>
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
          if(!empty($noticia_list))
          {
            foreach ($noticia_list as $row => $noticia) {
                $noticias .=
                '<div class="col-md-3">
                  <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="http://127.0.0.1/estagio%20web/ComicsNews/imagens/img_avatar1.png" alt="Card image cap">
                    <div class="card-img-overlay">
                      <p class="card-text"> <svg aria-hidden="true" data-prefix="far" data-icon="calendar-alt" class="svg-inline--fa fa-calendar-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 20px;height: 20px"><path fill="currentColor" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path></svg>'. $noticia['data'] = date("d/F/y").' publicado por '.$noticia['autor'].'</p>
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
          }else{
            $noticias = 'Não temos noticias';
          }
          echo $noticias;
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
