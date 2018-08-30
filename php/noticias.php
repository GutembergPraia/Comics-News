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
/**
 * [getNoticia - resposavel por retorna uma determina noticia pelo id]
 * @param  [int]     $id  [id da noticia que sera retornada]
 * @return [obj noticia]  [retorna a noticia do $id espeficado]
 * @author Gutemberg Praia
 * @date   2018-08-28
 */
  function getNoticia($id)
  {
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

  /**
   * [getAllNoticia - retorna um array com todas as noticias atuais]
   * @return [array]     [array de noticias]
   * @author Gutemberg Praia
   * @date   2018-08-28
   */
  public function getAllNoticia()
  {
    try
    {
      $Conexao = Conexao::getConnection();
      $sql = 'SELECT
                notic.titulo,
                SUBSTRING(notic.descricao,1,80) as noticia,
                notic.img,
                notic.data,
                user.nameUser as autor
              FROM
                noticia as notic
              INNER JOIN user ON notic.autor=user.ID';
      $noticia_list = $Conexao->query($sql)->fetchAll();
      return $noticia_list;

   }catch(Exception $e){
      echo $e->getMessage();
      exit;
   }

  }

}

 ?>
