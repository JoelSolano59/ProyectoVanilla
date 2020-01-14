<?php 
require_once "head map.php";
require_once "body.php";
?>

<ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a></a>Perfil</a>
                </li>
                <li class="breadcrumb-item active">Restaurant</li>
              </ol>
                <!-- Page Content -->
                <div class="media">
                <img src="images/2079821.png" width="150" class="mr-3"/>
                <div class="media-body">
                    <h1>Heading text</h1>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-primary" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <hr/>
        <div>
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Informacion</a></li>
        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Fotos</a></li>
        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Menu</a></li>
        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4">Comentarios</a></li>
    </ul>
<<<<<<< Updated upstream
    <!--Informacion-->
=======
>>>>>>> Stashed changes
    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" id="tab-1">
        <div role="tablist" id="accordion-1">
          <div class="card">
              <div class="card-header" role="tab">
                  <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">Accordion Item</a></h5>
              </div>
              <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                  <div class="card-body">
                    <div id="map"></div>
                    <script src="js/map.js"></script>
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header" role="tab">
                  <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2">Accordion Item</a></h5>
              </div>
              <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                  <div class="card-body">
                      <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                  </div>
              </div>
          </div>
          <div class="card mb-3">
              <div class="card-header" role="tab">
                  <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="#accordion-1 .item-3">Accordion Item</a></h5>
              </div>
              <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1">
                  <div class="card-body">
                      <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                      <button class="btn btn-primary" type="button" href="#" data-toggle="modal" data-target="#reservationModal">Realizar reservacion</button>
                  </div>
              </div>
          </div>
<<<<<<< Updated upstream
      </div>
      </div>
      <!--Fotos-->
        </div>
        <div class="tab-pane mb-3" role="tabpanel" id="tab-2">
      <!--Menu-->
        </div>
        <div class="tab-pane mb-3" role="tabpanel" id="tab-3">
      <!--Comentarios-->
        </div>
        <div class="tab-pane mb-3" role="tabpanel" id="tab-4">
      
        </div>
    </div>
</div>
=======
        </div>
        </div>
        <div class="tab-pane mb-3" role="tabpanel" id="tab-2">
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
        </div>
        <div class="tab-pane mb-3" role="tabpanel" id="tab-3">
            <div role="tablist" id="accordion-1">
                <div class="card">
                    <div class="card-header" role="tab">
                        <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">Accordion Item</a></h5>
                    </div>
                    <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                        <div class="card-body">
                        <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                            <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <a href="#">Ver perfil</a>
                                </div>
                            </div>
                            <hr />
                            <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                                <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <a href="#">Ver perfil</a>
                                </div>
                            </div>
                            <hr />
                            <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                                <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <a href="#">Ver perfil</a>
                                </div>
                            </div>
                            <hr />
                            <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                                <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <a href="#">Ver perfil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab">
                        <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2">Accordion Item</a></h5>
                    </div>
                    <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                        <div class="card-body">
                        <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                            <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <a href="#">Ver perfil</a>
                                </div>
                            </div>
                            <hr />
                            <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                                <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <a href="#">Ver perfil</a>
                                </div>
                            </div>
                            <hr />
                            <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                                <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <a href="#">Ver perfil</a>
                                </div>
                            </div>
                            <hr />
                            <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
                                <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <a href="#">Ver perfil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane mb-3" role="tabpanel" id="tab-4">
        <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Media Heading</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <a href="#">Ver perfil</a>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Media Heading</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <a href="#">Ver perfil</a>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Media Heading</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <a href="#">Ver perfil</a>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/2079821.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Media Heading</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <a href="#">Ver perfil</a>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>      
>>>>>>> Stashed changes

<?php
require_once "footer.php";
?>