<?php 
require_once "head.php";
require_once "body.php";
?>
            <?php
            require_once "../BackEnd Admin/conexion.php";
			if(isset($_POST['add'])){
                $id_cliente		     = mysqli_real_escape_string($link,(strip_tags($_POST["id_cliente"],ENT_QUOTES)));//Escanpando caracteres
				$nombre		     = mysqli_real_escape_string($link,(strip_tags($_POST["nombre"],ENT_QUOTES)));//Escanpando caracteres 
				$fecha_nacimiento	 = mysqli_real_escape_string($link,(strip_tags($_POST["fecha_nacimiento"],ENT_QUOTES)));//Escanpando caracteres 
				$telefono		 = mysqli_real_escape_string($link,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
                $correo		     = mysqli_real_escape_string($link,(strip_tags($_POST["correo"],ENT_QUOTES)));//Escanpando caracteres 
                $estado		     = mysqli_real_escape_string($link,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres 

                $cek = mysqli_query($link, "SELECT * FROM cliente WHERE id_cliente='$id_cliente'");
                switch ($estado) {
                    case 1:
                        echo "1";
                        if(mysqli_num_rows($cek) == 0){
                            $sql = "INSERT INTO perfil_cliente (id_perfil, descripcion, nivel, avatar, puntos, comida_id_comida) VALUES (?, ?, ?, ?, ?, ?)";
                            if ($stmt = mysqli_prepare($link, $sql)) {
                                mysqli_stmt_bind_param($stmt, "ssssss", $param_perfil, $param_descripcion, $param_nivel, $param_avatar, $param_puntos, $param_comida);
                                //Estableciendo parametro
                                $param_perfil = mt_rand(1, 100);
                                $param_descripcion = null;
                                $param_nivel = null;
                                $param_avatar = null;
                                $param_puntos = null;
                                $param_comida = mt_rand(1, 7);
                                if (mysqli_stmt_execute($stmt)) {
                                    echo " Perfil creado con exito.";
                                    $contra = 12345678;
                                    $param_contra = password_hash($contra, PASSWORD_DEFAULT); //Encriptando contraseña
                                    $insert = mysqli_query($link, "INSERT INTO cliente (id_cliente, nombre, fecha_nacimiento, telefono, correo, contra, perfil_cliente_id_perfil) VALUES ('$id_cliente', '$nombre',' $fecha_nacimiento', '$telefono', '$correo', '$param_contra', '$param_perfil')") or die(mysqli_error());
                                    if($insert){
                                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
                                    }else{
                                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
                                    }
                                } else {
                                    echo " Algo salio mal, intentalo despues (perfil).";
                                }
                            }
                        }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
                        }
                        break;
                    case 2:
                        echo "2";
                        if(mysqli_num_rows($cek) == 0){
                            $sql = "INSERT INTO perfil_negocio (id_perfil, nombre, descripcion, logo, correo, telefono, ubicacion, boton_general, color, calificacion, web, rango_precio, concepto, verificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmt = mysqli_prepare($link, $sql);
                            if ($stmt) {
                                mysqli_stmt_bind_param($stmt, "ssssssssssssss", $param_perfil, $param_nombre, $param_descripcion, $param_logo, $param_correo, $param_telefono, $param_ubicacion, $param_boton, $param_color, $param_calificacion, $param_web, $param_rango, $param_concepto, $param_verificacion);
                                //Estableciendo parametro
                                $param_perfil = mt_rand(1, 100);
                                $param_nombre = null;
                                $param_descripcion = null;
                                $param_logo = null;
                                $param_correo = null;
                                $param_telefono = null;
                                $param_ubicacion = null;
                                $param_boton = null;
                                $param_color = null;
                                $param_calificacion = null;
                                $param_web = null;
                                $param_rango = null;
                                $param_concepto = null;
                                $param_verificacion = null;
                                if (mysqli_stmt_execute($stmt)) {
                                    echo " Perfil creado con exito.";
                                    $contra = 12345678;
                                    $param_contra = password_hash($contra, PASSWORD_DEFAULT); //Encriptando contraseña
                                    $insert = mysqli_query($link, "INSERT INTO negocio (id_negocio, nombre, fecha_nacimiento, telefono, correo, contra, perfil_negocio_id_perfil) VALUES ('$id_cliente', '$nombre',' $fecha_nacimiento', '$telefono', '$correo', '$param_contra', '$param_perfil')") or die(mysqli_error());
                                    if($insert){
                                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
                                    }else{
                                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
                                    }
                                } else {
                                    echo " Algo salio mal, intentalo despues (perfil).";
                                }
                            }
                        }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
                        }
                        break;
                    default:
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
                        break;
                }

			}
			?>
	<!-- Breadcrumbs-->
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a></a>Inicio</a>
    </li>
	<li class="breadcrumb-item active">CRUD</li>
	<li class="breadcrumb-item active">Agregar datos</li>
</ol>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">No</label>
					<div class="col-sm-2">
						<input type="text" name="id_cliente" class="form-control" placeholder="No" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre" class="form-control" placeholder="Fombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de nacimiento</label>
					<div class="col-sm-4">
						<input type="date" name="fecha_nacimiento" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy-" placeholder="00-00-0000" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-3">
						<input type="number" name="telefono" class="form-control" placeholder="Teléfono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Correo</label>
					<div class="col-sm-3">
						<input type="mail" name="correo" class="form-control" placeholder="Correo" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Usuario</label>
					<div class="col-sm-3">
						<select name="estado" class="form-control">
							<option value=""> ----- </option>
                            <option value="1">Cliente</option>
							<option value="2">Negocio</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>

<?php
require_once "footer.php";
?>
