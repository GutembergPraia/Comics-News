<?php

require_once "conexao.php";

class Usuario
{
  private $id;
  private $nameUser;
  private $emailUser;
  private $senhaUser;

  public function login($email, $senha){
    $Conexao  = Conexao::getConnection();
    $query    = $Conexao->prepare("SELECT * FROM user WHERE emailUser=:email and senhaUser=:senha");
    $query->execute(array(':id' => $email, ':senha' => md5($senha)));
    $usuario_list = $query->fetchAll();

    foreach ($usuario_list as $row => $usuario) {
        $userName = $noticia['$userName'];
    }

    session_start();
    
    echo $userName;

  }

}

?>
