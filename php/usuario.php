<?php

require_once "conexao.php";

class Usuario
{
  private $id;
  private $nameUser;
  private $emailUser;
  private $senhaUser;
  private $loginUse;

/**
 * [login - Respossavel por alterticar o usuario]
 * @param  [string]     $email [email do usuario]
 * @param  [string]     $senha [senha do usuario]
 * @return [bollean]    [true - Usuario altenticado / false - Falha na atenticaçãp]
 * @author Gutemberg Praia
 * @date   2018-08-28
 */
  public function login($email, $senha){
    $Conexao  = Conexao::getConnection();
    $query    = $Conexao->prepare("SELECT * FROM user WHERE emailUser=:email and senhaUser=:senha");
    $query->execute(array(':email' => $email, ':senha' => md5($senha)));
    $loginRetorno = "Não encontrado";
    if ($query->fetchColumn() > 0)
    {
        $loginRetorno = "encontrado";
    }

    return $loginRetorno;

  }

  /**
   * [getLoginUse - Retorna o estado atual do login]
   * @return [bollean]     [true - Usuario logado/ false - Usuario não logado]
   * @author Gutemberg Praia
   * @date   2018-08-29
   */
  public function getLoginUse()
  {
    return $this->loginUse;
  }

  /**
   * [setLoginUse - Altera o valor do ]
   * @param  [bollean]     $loginUse [description]
   * @author
   * @date   2018-08-29
   */
  private function setLoginUse($loginUse)
  {
    $this->loginUse = $loginUse;

    return $this;
  }

}

?>
