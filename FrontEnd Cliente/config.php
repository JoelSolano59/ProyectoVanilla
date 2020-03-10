<?php 
require_once "head.php";
require_once "body.php";
<<<<<<< HEAD
require "../BackEnd Cliente/config.php";
?>

	<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a></a>Cuenta</a>
    </li>
	<li class="breadcrumb-item active">Configuracion</li>
	<li class="breadcrumb-item active">Editar datos</li>
</ol>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-12">
						<input type="text" name="nombre" value="<?php echo $row1 ['nombre']; ?>" class="form-control" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de nacimiento</label>
					<div class="col-sm-12">
						<input type="text" name="fecha_nacimiento" value="<?php echo $row1 ['fecha_nacimiento']; ?>" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="0000-00-00" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-12">
						<input type="text" name="telefono" value="<?php echo $row1 ['telefono']; ?>" class="form-control" placeholder="Teléfono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Correo</label>
					<div class="col-sm-12">
						<input type="text" name="correo" value="<?php echo $row1 ['correo']; ?>" class="form-control" placeholder="Correo" required>
					</div>        
                </div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Descripcion</label>
					<div class="col-sm-12">
						<input type="text" name="descripcion" value="<?php echo $row2 ['descripcion']; ?>" class="form-control" placeholder="Descripcion" required>
					</div>        
                </div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Avatar</label>
					<div class="col-sm-12">
						<select name="avatar" class="form-control">
							<option value="">- Selecciona Avatar -</option>
                            <option value="1" <?php if ($row2 ['avatar']==1){echo "selected";} ?>>Vanilla Ice</option>
							<option value="2" <?php if ($row2 ['avatar']==2){echo "selected";} ?>>Cafe</option>
                            <option value="3" <?php if ($row2 ['avatar']==3){echo "selected";} ?>>Yogurth Ice</option>
                            <option value="4" <?php if ($row2 ['avatar']==4){echo "selected";} ?>>Cereza Ice</option>
							<option value="5" <?php if ($row2 ['avatar']==5){echo "selected";} ?>>Chocochip Ice</option>
                            <option value="6" <?php if ($row2 ['avatar']==6){echo "selected";} ?>>Chocolate Ice</option>
                            <option value="7" <?php if ($row2 ['avatar']==7){echo "selected";} ?>>Fresa Ice</option>
							<option value="8" <?php if ($row2 ['avatar']==8){echo "selected";} ?>>Lemon Pie Ice</option>
							<option value="9" <?php if ($row2 ['avatar']==9){echo "selected";} ?>>Menta Ice</option>
						</select> 
					</div>   
                </div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Comida favorita</label>
					<div class="col-sm-12">
						<select name="comida" class="form-control">
							<option value="">- Selecciona tu comida favorita -</option>
                            <option value="1" <?php if ($row2 ['comida_id_comida']==1){echo "selected";} ?>>Comida China</option>
                            <option value="2" <?php if ($row2 ['comida_id_comida']==2){echo "selected";} ?>>Comida Japonesa</option>
                            <option value="3" <?php if ($row2 ['comida_id_comida']==3){echo "selected";} ?>>Comida Italiana</option>
                            <option value="4" <?php if ($row2 ['comida_id_comida']==4){echo "selected";} ?>>Comida Mexicana</option>
                            <option value="5" <?php if ($row2 ['comida_id_comida']==5){echo "selected";} ?>>Comida Española</option>
                            <option value="6" <?php if ($row2 ['comida_id_comida']==6){echo "selected";} ?>>Comida Peruana</option>
                            <option value="7" <?php if ($row2 ['comida_id_comida']==7){echo "selected";} ?>>Comida Arabe</option>		
						</select> 
					</div>   
                </div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cambiar contraseña</label>
					<div class="col-sm-12">
						<input type="password" name="contra" class="form-control" placeholder="Nueva contraseña">
					</div>        
                </div>			
			
				<div class="form-group">
					<div class="col-sm-6">
						<input type="submit" name="password" class="btn btn-sm btn-primary" value="Cambiar contraseña">
                        <input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
                        <input type="submit" name="delete" class="btn btn-sm btn-danger" value="Eliminar cuenta">
					</div>
				</div>
			</form>

=======
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
    
>>>>>>> master
<?php
require_once "footer.php";
?>