<?php
include_once "head map.php"; 
include_once "body.php";
?>

 <!-- Breadcrumbs-->
 <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a></a>Mapa</a>
          </li>
          <li class="breadcrumb-item active">Google Maps</li>
      </ol>

        <!-- Page Content -->
        <div class="card-body">
          <div id="map"></div>
          <script src="js/map.js"></script>
        </div>

<?php 
include_once "footer.php"
?>