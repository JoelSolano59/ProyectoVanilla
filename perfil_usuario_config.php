<<<<<<< HEAD

=======
<?php
  require_once "session_cliente.php";
  require "perfil_usuario_config_code.php";
  $datos_usuario = obtener_datos();
?>
>>>>>>> master

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vanilla | Cliente</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Vanilla | Cliente</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 ml-mx-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-home"></i>
      <span class="badge badge-danger">9+</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
      <h6 class="dropdown-header">Inicio:</h6>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="index.html">Publicidad</a>
      <a class="dropdown-item" href="index.html">Promociones</a>
    </div>
  </li>

  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-heart"></i>
      <span class="badge badge-danger">9+</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
      <h6 class="dropdown-header">Lista de favoritos:</h6>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Restaurantes favoritos</a>
      <a class="dropdown-item" href="#">Lista de amistades</a> 
    </div>
  </li>

  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell"></i>
      <span class="badge badge-danger">7</span>
    </a>
    <!--
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  -->
  </li>

  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search"></i>
    </a>
    <!--
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <h6 class="dropdown-header">Cuenta:</h6>
      <a class="dropdown-item" href="#">Perfil</a>
      <a class="dropdown-item" href="#">Configuración</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a>
    </div>
  -->
  </li>
</ul>

</nav>

<div id="wrapper">

   <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
        <span>Cuenta</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Cuenta:</h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="perfil_usuario.html">Perfil</a>
        <a class="dropdown-item" href="perfil_usuario_config.html2">Configuración</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="lista_cupones.html">
        <i class="fas fa-ticket-alt"></i>
        <span>Cupones</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mapa.html">
        <i class="fas fa-map-marked-alt"></i>
        <span>Mapa</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="buscar.html">
        <i class="fas fa-search"></i>
        <span>Buscar</span></a>
    </li>
  </ul>

  <div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a></a>Cuenta</a>
          </li>
          <li class="breadcrumb-item active">Configuración</li>
      </ol>

<<<<<<< HEAD
    
      
      <form class="ml-auto mr-0 mr-md-0 my-0 my-md-0">
          <div class="form-label-group mb-2">
              <input type="text" id="usuario" name="usuario" class="form-control" value="" required="required">
=======
      <?php 
        foreach ($datos_usuario as $datos_usuario) {
      ?>
      
      <form class="ml-auto mr-0 mr-md-0 my-0 my-md-0">
          <div class="form-label-group mb-2">
              <input type="text" id="usuario" name="usuario" class="form-control" value="<?php $datos_usuario['usuario'] ?>" required="required">
>>>>>>> master
              <label for="usuario">Nombre:</label>
          </div>
          <div class="form-label-group mb-2">
              <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="descripcion" required="required">
              <label for="descripcion">Descripción:</label>
          </div>
          <div class="form-label-group mb-2">
<<<<<<< HEAD
              <input type="date" id="f_nacimiento" name="f_nacimiento" class="form-control" value="" required="required">
              <label for="f_nacimiento">Fecha de nacimiento:</label>
          </div>
          <div class="form-label-group mb-2">
              <input type="tel" id="telefono" name="telefono" class="form-control" value="" required="required">
              <label for="telefono">Teléfono:</label>
          </div>
          <div class="form-label-group mb-2">
              <input type="email" id="correo" name="correo" class="form-control" value="" required="required">
=======
              <input type="date" id="f_nacimiento" name="f_nacimiento" class="form-control" value="<?php $datos_usuario['f_nacimiento'] ?>" required="required">
              <label for="f_nacimiento">Fecha de nacimiento:</label>
          </div>
          <div class="form-label-group mb-2">
              <input type="tel" id="telefono" name="telefono" class="form-control" value="<?php $datos_usuario['telefono'] ?>" required="required">
              <label for="telefono">Teléfono:</label>
          </div>
          <div class="form-label-group mb-2">
              <input type="email" id="correo" name="correo" class="form-control" value="<?php $datos_usuario['correo'] ?>" required="required">
>>>>>>> master
              <label for="correo">Correo:</label>
          </div>
          <div class="form-label-group mb-2">
              <input type="password" id="contra" name="contra" class="form-control" placeholder="contra" required="required">
              <label for="contra">Actualizar contraseña:</label>
          </div>
<<<<<<< HEAD
          
=======
          <?php } ?>
>>>>>>> master
      </form>
        <hr />
        <div class="btn-group mb-3" role="group">
          <button class="btn btn-primary" type="button">Cambiar Avatar</button>
          <button class="btn btn-primary" type="button">Guardar Cambios</button>
          <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#deleteAccountModal">Eliminar Cuenta</button>
        </div>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Vanilla 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Account Modal-->
  <div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Estas a punto de eliminar tu cuenta para siempre.</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">¿Estás seguro que deseas eliminarla?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html" data-toggle="modal" data-target="#deleteAccountModal2">Eliminar Cuenta</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
