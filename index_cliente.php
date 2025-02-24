<?php
  require "session_cliente.php";
?>

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
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
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
          <a class="dropdown-item" href="index.html">Publicidad</a>          <a class="dropdown-item" href="index.html">Promociones</a>
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
          <a class="dropdown-item" href="restaurantes_favoritos.html">Restaurantes favoritos</a>
          <a class="dropdown-item" href="lista_amistades.html">Lista de amistades</a> 
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
          <a class="dropdown-item" href="perfil_usuario_config.html">Configuración</a>
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
              <a></a>Inicio</a>
            </li>
            <li class="breadcrumb-item active">¡Bienvenido!</li>
          </ol>

        <!-- Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/pexels-photo-511763.jpeg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Conoce nuevos lugares</h5>
                    <p>y descubre grandes experiencias con Vanilla.</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/pexels-photo-2170317.jpeg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dejate llevar por los sabores</h5>
                    <p>que esta gran comunidad tiene para ti.</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="images/adult-alcoholic-beverages-bar-12676942.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Descubre con tus amigos</h5>
                    <p>los momentos unicos en los que te puedes sumergir.</p>
                  </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <hr />

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a></a>Publicidad</a>
          </li>
          <li class="breadcrumb-item">Promociones</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-percentage"></i>
                </div>
                <div class="mr-5">Negocio promo 1</div>
                <h4>Titulo promo 1</h4>
                <h6>Descripcion promo 1</h6>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver detalles</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-percentage"></i>
                </div>
                <div class="mr-5">Negocio promo 2</div>
                <h4>Titulo promo 2</h4>
                <h6>Descripcion promo 2</h6>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver detalles</span>

                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-ad"></i>
                </div>
                <div class="mr-5">Negocio ads 1</div>
                <h4>Titulo ads 1</h4>
                <h6>Descripcion ads 1</h6>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver detalles</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-ad"></i>
                </div>
                <div class="mr-5">Negocio ads 2</div>
                <h4>Titulo ads 2</h4>
                <h6>Descripcion ads 2</h6>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver detalles</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
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
          <h5 class="modal-title" id="exampleModalLabel">¡No te vayas aún! D:</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">¿Estás seguro que deseas cerrar sesión?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="logout_cliente.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
