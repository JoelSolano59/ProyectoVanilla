<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Vanilla | Negocio</a>

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
  <ul class="navbar-nav ml-auto ml-md-0"></ul>

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
        <a class="dropdown-item" href="perfil negocio.php">Perfil</a>
        <a class="dropdown-item" href="config.php">Configuración</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-percentage"></i>
        <span>Promociones</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Promociones:</h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="publicidad.php">Publicidad</a>
        <a class="dropdown-item" href="promocion.php">Promociones</a>
        <a class="dropdown-item" href="cupon.php">Cupones</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="notificacion.php">
        <i class="fas fa-bell"></i>
        <span>Notificaciones</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="reservacion.php">
        <i class="fas fa-calendar-check"></i>
        <span>Reservaciones</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mapa.php">
        <i class="fas fa-map-marked-alt"></i>
        <span>Mapa</span></a>
    </li>
  </ul>

  <div id="content-wrapper">

    <div class="container-fluid">