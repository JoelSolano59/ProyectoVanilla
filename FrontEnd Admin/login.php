<?php
require "../BackEnd Admin/login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vanilla | Iniciar Sesion</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
    <div class="container">
        <div class="text-center">
            <div class="h7 mt-5" style="font-size: 1.75rem;">Vanilla | Admin</div>
        </div>
    </div>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Iniciar Sesion</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-label-group">
            <input type="text" id="registro" name="registro" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="registro">Registro:</label>
            <span class="msg-error"><?php echo $registro_err ?> </span>
        </div>
        <div class="form-label-group">
            <input type="password" id="contra" name="contra" class="form-control" placeholder="password" required="required">
            <label for="contra">Contraseña:</label>
            <span class="msg-error"><?php echo $contra_err ?> </span>
        </div>
        <button class="btn btn-primary btn-block mt-3" type="submit">Iniciar Sésion</button>
        </form>
        <div class="text-center">
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