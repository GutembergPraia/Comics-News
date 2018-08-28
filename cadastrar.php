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
