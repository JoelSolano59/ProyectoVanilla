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
        <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
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

<?php
require_once "footer.php";
?>