<?php
    //Inicializar la sesion
    session_start();
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: index_cliente.html");
        exit;
    }
    
    require_once "conexion.php";
    $correo = $contra = "";
    $correo_err = $contra_err = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty(trim($_POST["correo"]))) {
            $correo_err = "Por favor, ingrese un correo electronico.";
        } else {
            $correo = trim($_POST["correo"]);
        }

        if (empty(trim($_POST["contra"]))) {
            $contra_err = "Por favor, ingrese una contraseña.";
        } else {
            $contra = trim($_POST["contra"]);
        }

        //Validar credenciales
        if (empty($correo_err) && empty($contra_err)) {
            $sql = "SELECT id_cliente, usuario, correo, contra FROM cliente WHERE correo = ?";
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_correo);
                $param_correo = $correo;
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                }
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id_cliente, $usuario, $correo, $hashed_contra);
                    if (mysqli_stmt_fetch($stmt)) {
                        if(password_verify($contra, $hashed_contra)) {
                            session_start();

                            //Almacenar datos en variables de sesion
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_cliente"] = $id_cliente;
                            $_SESSION["correo"] = $correo;
                            
                            header("location: index_cliente.php");
                        } else {
                            $contra_err = "La contraseña que has ingresado no es valida.";
                        }
                    } 
                } else {
                    $correo_err = "No se ha encontrado ningun cuenta con ese correo electronico.";
                } 
            } else {
                echo " ¡Ups! algo salio mal, intentalo mas tarde.";
            }
        }
        mysqli_close($link);
    }
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
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="correo" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Correo:</label>
              <span class="msg-error"><?php echo $correo_err ?></span>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="contra" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Contraseña:</label>
              <span class="msg-error"><?php echo $contra_err ?></span>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
            </div>
          </div>
          <a class="btn btn-primary btn-block" type="submit">Iniciar Sesion</a>
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
