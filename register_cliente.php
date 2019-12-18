<?php
  require "register_cliente_code.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vanilla | Cliente | Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
    <div class="container">
        <div class="text-center">
            <div class="h7 mt-5" style="font-size: 1.75rem;">Vanilla | Cliente</div>
        </div>
    </div>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registra una cuenta</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nombre" required="required" autofocus="autofocus">
                  <label for="usuario">Nombre</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="f_nacimiento" name="f_nacimiento" class="form-control" placeholder="Fecha de nacimiento" required="required">
                  <label for="f_nacimiento">Fecha de nacimiento</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Telefono" required="required">
                    <label for="telefono">Telefono</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo" required="required">
                    <label for="correo">Correo</label>
                  </div>
                </div>
              </div>
            </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="contra1" name="contra1" class="form-control" placeholder="Contraseña" required="required">
                  <label for="contra1">Contraseña</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="contra2" name="contra2" class="form-control" placeholder="Confirmar contraseña" required="required">
                  <label for="contra2">Confirmar contraseña</label>
                </div>
              </div>
            </div>
          </div>
          <span class="msg-error"><?php echo $usuario_err ?> </span>
          <span class="msg-error"><?php echo $f_nacimiento_err ?> </span>
          <span class="msg-error"><?php echo $telefono_err ?> </span>
          <span class="msg-error"><?php echo $correo_err ?> </span>
          <span class="msg-error"><?php echo $contra1_err ?> </span>
          <span class="msg-error"><?php echo $contra2_err ?> </span>
          <button class="btn btn-primary btn-block mt-3" href="login_cliente.php" type="submit">Registrate</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login_cliente.php">Iniciar Sesion</a>
          <a class="d-block small" href="contra_cliente.html">¿Olvidaste tu contraseña?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>