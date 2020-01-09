<?php 
require_once "head.php";
require_once "body.php";
?>

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

<?php
require_once "footer.php";
?>