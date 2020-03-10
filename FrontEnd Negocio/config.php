<?php
require_once "head.php";
require_once "body.php";
require "../BackEnd Negocio/config.php";
?>

 	<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a></a>Cuenta</a>
    </li>
	<li class="breadcrumb-item active">Configuracion</li>
	<li class="breadcrumb-item active">Editar datos</li>
</ol>

<div>
				<ul class="nav nav-tabs mb-3">
					<li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Cuenta</a></li>
					<li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Perfil</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" role="tabpanel" id="tab-1">
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
                                    <input type="text" name="fecha_nacimiento" value="<?php echo $row1 ['fecha_nacimiento']; ?>" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="00-00-0000" required>
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
                                <label class="col-sm-3 control-label">Cambiar contraseña</label>
                                <div class="col-sm-12">
                                    <input type="password" name="contra" class="form-control" placeholder="Nueva contraseña">
                                </div>        
                            </div>			
                            <hr/>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="submit" name="password" class="btn btn-sm btn-primary" value="Cambiar contraseña">
                                    <input type="submit" name="save1" class="btn btn-sm btn-primary" value="Guardar datos">
                                    <input type="submit" name="delete" class="btn btn-sm btn-danger" value="Eliminar cuenta">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane active" role="tabpanel" id="tab-2">
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
                                    <input type="text" name="fecha_nacimiento" value="<?php echo $row1 ['fecha_nacimiento']; ?>" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="00-00-0000" required>
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
                                <label class="col-sm-3 control-label">Cambiar contraseña</label>
                                <div class="col-sm-12">
                                    <input type="password" name="contra" class="form-control" placeholder="Nueva contraseña">
                                </div>        
                            </div>			
                            <hr/>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="submit" name="save2" class="btn btn-sm btn-primary" value="Guardar datos">
                                    <input type="submit" name="delete" class="btn btn-sm btn-danger" value="Eliminar cuenta">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
    
<?php
require_once "footer.php";
?>