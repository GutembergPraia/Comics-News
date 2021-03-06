<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title>Login ComicsNews</title>

    <!-- Bootstrap core CSS -->
    <link href=".../../css/bootstrap/4.1.3/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=".../../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post">
      <!--<img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
      <h1 class="h3 mb-3 font-weight-normal">Informe os dados: </h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-login">Entrar</button>
      <button class="btn btn-lg btn-primary btn-block" onClick="window.history.back();">Voltar</button>
      <!--<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>-->
    </form>

    <?php

      require_once 'php/usuario.php';

      if(isset($_POST['inputEmail']) and isset($_POST['inputSenha'])){
        $usuario = new Usuario;
        $teste = $usuario->login($_POST['inputEmail'], $_POST['inputSenha']);
        echo $teste;
      }
    ?>
  </body>
</html>
