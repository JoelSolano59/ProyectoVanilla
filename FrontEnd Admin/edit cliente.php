<?php 
require_once "head.php";
require_once "body.php";
require "../BackEnd Admin/edit cliente.php";
?>
	<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a></a>Inicio</a>
    </li>
	<li class="breadcrumb-item active">CRUD</li>
	<li class="breadcrumb-item active">Cliente</li>
	<li class="breadcrumb-item active">Editar datos</li>
</ol>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">No</label>
					<div class="col-sm-2">
						<input type="text" name="id_cliente" value="<?php echo $row ['id_cliente']; ?>" class="form-control" placeholder="No" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre" value="<?php echo $row ['nombre']; ?>" class="form-control" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de nacimiento</label>
					<div class="col-sm-4">
						<input type="text" name="fecha_nacimiento" value="<?php echo $row ['fecha_nacimiento']; ?>" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="0000-00-00" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-3">
						<input type="text" name="telefono" value="<?php echo $row ['telefono']; ?>" class="form-control" placeholder="Teléfono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Correo</label>
					<div class="col-sm-3">
						
						<input type="text" name="correo" value="<?php echo $row ['correo']; ?>" class="form-control" placeholder="Correo" required>
					</div>        
				</div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>

<?php
require_once "footer.php";
?>