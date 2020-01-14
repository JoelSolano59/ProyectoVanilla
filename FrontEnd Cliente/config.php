<?php 
require_once "head.php";
require_once "body.php";
?>

 <!-- Breadcrumbs-->
 <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a></a>Cuenta</a>
          </li>
          <li class="breadcrumb-item active">Configuración</li>
      </ol>

<div>
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Datos personales</a></li>
        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Avatares</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel" id="tab-1">
        <div class="form-label-group mb-3">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="text" required="required" autofocus="autofocus">
        <label for="nombre">Nombre:</label>
    </div>
    <div class="form-label-group mb-3">
        <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="text" required="required" autofocus="autofocus">
        <label for="descripcion">Descripcion:</label>
    </div>   
    <div class="form-label-group mb-3">
        <input type="date" id="fecha" name="fecha" class="form-control" placeholder="date" required="required" autofocus="autofocus">
        <label for="fecha">Fecha de nacimiento:</label>
    </div>
    <div class="form-label-group mb-3">
        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="text" required="required" autofocus="autofocus">
        <label for="telefono">Telefono:</label>
    </div>
    <div class="form-label-group mb-3">
        <input type="email" id="correo" name="correo" class="form-control" placeholder="email" required="required" autofocus="autofocus">
        <label for="correo">Correo:</label>
    </div>
    <div class="form-label-group mb-3">
        <input type="text" id="comida" name="comida" class="form-control" placeholder="text" required="required" autofocus="autofocus">
        <label for="comida">Comida favorita:</label>
    </div>
    <hr />
    <button class="btn btn-primary mb-3" type="button">Guardar cambios</button>
    <button class="btn btn-primary mb-3" type="button" href="#" data-toggle="modal" data-target="#changePasswordModal">Cambiar contraseña</button>
    <button class="btn btn-primary mb-3" type="button" href="#" data-toggle="modal" data-target="#deleteAccountModal">Eliminar cuenta</button>
        </div>
        <div class="tab-pane mb-3" role="tabpanel" id="tab-2">
        <div class="media"><img src="images/Vallina_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Vanilla Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/Cafe_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Cafe Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/Yogurth_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Yogurth Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/Cereza_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Cereza Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/Chocochip_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Chocochip Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/Chocolate_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Chocolate Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/Fresa_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Fresa Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/Lemonpie_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Lemon Pie Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        <hr />
        <div class="media"><img src="images/Menta_Ice.png" width="150" class="mr-3"/>
            <div class="media-body">
                <h5>Menta Ice</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Asignar</button><button class="btn btn-primary" type="button">Comprar</button></div>
            </div>
        </div>
        </div>
    </div>
</div>
    
<?php
require_once "footer.php";
?>