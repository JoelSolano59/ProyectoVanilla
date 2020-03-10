<?php 
require_once "head.php";
require_once "body.php";
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

<?php
require_once "footer.php";
?>