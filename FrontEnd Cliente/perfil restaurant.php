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
    <!--Informacion-->
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

<?php
require_once "footer.php";
?>