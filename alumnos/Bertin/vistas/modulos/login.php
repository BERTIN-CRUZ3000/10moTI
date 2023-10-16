

<div class="login-box">
  <div class="login-box-body">
  <div class="login-logo">
    <img src="vistas/img/plantilla/logo1.png" class="img-responsive" with="50px">
  </div>
    <p class="login-box-msg">Ingresar Usuario</p>
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8 mx-auto gap-2">
          <button type="submit" class="btn btn-primary btn-block ">Entrar</button>
        </div>      
      </div>
      <?php
        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
      ?>
    </form>
  </div>
</div>
