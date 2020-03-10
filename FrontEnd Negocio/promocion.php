<?php 
require_once "head.php";
require_once "body.php";
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a></a>Promociones</a>
    </li>
    <li class="breadcrumb-item active">Promociones</li>
</ol>

<div class="form-label-group mb-3">
    <input type="text" id="nombre ad" name="nombre promo" class="form-control" placeholder="text" required="required" autofocus="autofocus">
    <label for="nombre promo">Nombre de la promocion:</label>
</div>
<div class="form-label-group mb-3">
    <input type="text" id="descripcion ad" name="descripcion ad" class="form-control" placeholder="text" required="required" autofocus="autofocus">
    <label for="descripcion ad">Descripcion de la promocion:</label>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend"><span class="input-group-text">Subir fotos</span></div><input class="form-control" type="file" />
    <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fas fa-file-upload"></i></button></div>
</div>
<hr/>
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
        <div class="media"><img src="images/2079821.png" width="150" class="mr-3 mb-3"/>
            <div class="media-body">
                <h5>Media Heading</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <a href="#">Ver perfil</a>
            </div>
        </div>

<?php
require_once "footer.php";
?>