<?php
/**
 *
 */

require_once "conexao.php";

class Noticia
{

  public $id;
  public $titulo;
  public $descricao;
  public $img;
  public $data;
  public $autor;

  public function addNoticia($id, $titulo, $descricao, $imagem, $data, $autor)
  {
    $this->id = $id;
    $this->titulo =  $titulo;
    $this->descricao = $descricao;
    $this->img =  $imagem;
    $this->data =  $data;
    $this->autor = $autor;

    return $this;
  }

  function editNoticia()
  {

  }

  function getNoticia($id)
  {
    define('DB_HOST'        , "localhost");
    define('DB_USER'        , "root");
    define('DB_PASSWORD'    , "");
    define('DB_NAME'        , "comicsnews");
    define('DB_DRIVER'      , "mysql");

    try
    {
      $Conexao  = Conexao::getConnection();
      $query    = $Conexao->prepare("SELECT * FROM noticia WHERE id=:id");
      $query->execute(array(':id' => $id));
      $noticia_list = $query->fetchAll();
      $noticias = "";

      foreach ($noticia_list as $row => $noticia) {
          $noticias .= "teste";
      }

      return $noticias;
    }catch(Exception $e){
      echo $e->getMessage();
      exit;
    }

  }

  public function getAllNoticia()
  {

    try
    {
      $Conexao      = Conexao::getConnection();
      $noticia_list = $Conexao->query("SELECT * FROM noticia")->fetchAll();
      $noticias = '';

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

      return $noticias;
   }catch(Exception $e){
      echo $e->getMessage();
      exit;
   }

  }

}

 ?>
