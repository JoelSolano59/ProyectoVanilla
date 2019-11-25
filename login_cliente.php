<?php
    require "login_cliente_code.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vanilla | Cliente | Iniciar Sesion</title>

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
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Iniciar Sesion</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="">Email:</label>
                    <input type="email" name="correo">
                    <span class="msg-error"><?php echo $correo_err ?> </span>

                    <label for="">Contraseña:</label>
                    <input type="password" name="contra">
                    <span class="msg-error"><?php echo $contra_err ?> </span>

                    <input type="submit" value="Iniciar Sesion">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register_cliente.html">Registrar una cuenta</a>
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
