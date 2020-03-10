<?php 
require_once "head.php";
require_once "body.php";
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a></a>Inicio</a>
    </li>
    <li class="breadcrumb-item active">CRUD</li>
</ol>

<?php
			require_once "../BackEnd Admin/conexion.php";
			
			if(isset($_GET['dc']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($link,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($link, "SELECT * FROM cliente WHERE id_cliente='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($link, "DELETE FROM cliente WHERE id_cliente='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}

			if(isset($_GET['dn']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($link,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($link, "SELECT * FROM negocio WHERE id_negocio='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($link, "DELETE FROM negocio WHERE id_negocio='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}

			if(isset($_GET['dpc']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($link,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($link, "SELECT * FROM perfil_cliente WHERE id_perfil='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($link, "DELETE FROM perfil_cliente WHERE id_cliente='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}

			if(isset($_GET['dpn']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($link,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($link, "SELECT * FROM perfil_negocio WHERE id_perfil='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($link, "DELETE FROM perfil_negocio WHERE id_perfil='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>

			<div>
				<ul class="nav nav-tabs mb-3">
					<li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Cuenta Clientes</a></li>
					<li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Cuenta Negocios</a></li>
					<li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Perfil Clientes</a></li>
					<li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4">Perfil Negocios</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" role="tabpanel" id="tab-1">
					<br />
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<tr>
									<th>No</th>
									<th>Nombre</th>
									<th>Fecha de nacimiento</th>
									<th>Telefono</th>
									<th>Correo</th>
									<th>Acciones</th>
								</tr>
								<?php
				
								$sql = mysqli_query($link, "SELECT * FROM cliente ORDER BY id_cliente ASC");
									
								if(mysqli_num_rows($sql) == 0){
									echo '<tr><td colspan="8">No hay datos.</td></tr>';
								}else{
									$no = 1;
									while($row = mysqli_fetch_assoc($sql)){
										echo '
										<tr>
											<td>'.$no.'</td>
												
											<td><a href="profile.php?nik='.$row['id_cliente'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['nombre'].'</a></td>
											<td>'.$row['fecha_nacimiento'].'</td>
											<td>'.$row['telefono'].'</td>
											<td>'.$row['correo'].'</td>
											<td>
												<a href="add.php?nik='.$row['id_cliente'].'" title="Agregar datos" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i></a>
												<a href="edit cliente.php?nik='.$row['id_cliente'].'" title="Editar datos" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
												<a href="index.php?dc=delete&nik='.$row['id_cliente'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										';
										$no++;
									}
								}
								?>
							</table>
						</div>
					</div>
					<div class="tab-pane" role="tabpanel" id="tab-2">
					<br />
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<tr>
									<th>No</th>
									<th>Nombre</th>
									<th>Fecha de nacimiento</th>
									<th>Telefono</th>
									<th>Correo</th>
									<th>Acciones</th>
								</tr>
								<?php
				
								$sql = mysqli_query($link, "SELECT * FROM negocio ORDER BY id_negocio ASC");
									
								if(mysqli_num_rows($sql) == 0){
									echo '<tr><td colspan="8">No hay datos.</td></tr>';
								}else{
									$no = 1;
									while($row = mysqli_fetch_assoc($sql)){
										echo '
										<tr>
											<td>'.$no.'</td>
											<td><a href="profile.php?nik='.$row['id_negocio'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['nombre'].'</a></td>
											<td>'.$row['fecha_nacimiento'].'</td>
											<td>'.$row['telefono'].'</td>
											<td>'.$row['correo'].'</td>
											<td>
												<a href="add.php?nik='.$row['id_negocio'].'" title="Agregar datos" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i></a>
												<a href="edit negocio.php?nik='.$row['id_negocio'].'" title="Editar datos" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
												<a href="index.php?dn=delete&nik='.$row['id_negocio'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										';
										$no++;
									}
								}
								?>
							</table>
						</div>
					</div>
					<div class="tab-pane" role="tabpanel" id="tab-3">
					<br />
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<tr>
									<th>No</th>
									<th>Descripcion</th>
									<th>Nivel</th>
									<th>Avatar</th>
									<th>Puntos</th>
									<th>Comida fav.</th>
									<th>Acciones</th>
								</tr>
								<?php
				
								$sql = mysqli_query($link, "SELECT * FROM perfil_cliente ORDER BY id_perfil ASC");
									
								if(mysqli_num_rows($sql) == 0){
									echo '<tr><td colspan="8">No hay datos.</td></tr>';
								}else{
									$no = 1;
									while($row = mysqli_fetch_assoc($sql)){
										echo '
										<tr>
											<td>'.$no.'</td>		
											<td><a href="profile.php?nik='.$row['id_perfil'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['descripcion'].'</a></td>
											<td>'.$row['nivel'].'</td>
											<td>'.$row['avatar'].'</td>
											<td>'.$row['puntos'].'</td>
											<td>'.$row['comida_id_comida'].'</td>
											<td>
												<a href="add.php?nik='.$row['id_perfil'].'" title="Agregar datos" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i></a>
												<a href="edit negocio.php?nik='.$row['id_perfil'].'" title="Editar datos" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
												<a href="index.php?dpc=delete&nik='.$row['id_perfil'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos?\')" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										';
										$no++;
									}
								}
								?>
							</table>
						</div>
					</div>
					<div class="tab-pane" role="tabpanel" id="tab-4">
					<br />
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<tr>
									<th>No</th>
									<th>Nombre</th>
									<th>Descripcion</th>
									<th>Logo</th>
									<th>Correo</th>
									<th>Telefono</th>
									<th>Ubicacion</th>
									<th>Boton general</th>
									<th>Tamaño</th>
									<th>Color</th>
									<th>Calificacion</th>
									<th>URL Sitio web</th>
									<th>Rango de precio</th>
									<th>Concepto</th>
									<th>Verificacion</th>
									<th>Acciones</th>
								</tr>
								<?php
				
								$sql = mysqli_query($link, "SELECT * FROM perfil_negocio ORDER BY id_perfil ASC");
									
								if(mysqli_num_rows($sql) == 0){
									echo '<tr><td colspan="8">No hay datos.</td></tr>';
								}else{
									$no = 1;
									while($row = mysqli_fetch_assoc($sql)){
										echo '
										<tr>
											<td>'.$no.'</td>	
											<td><a href="profile.php?nik='.$row['id_perfil'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['nombre'].'</a></td>
											<td>'.$row['descripcion'].'</td>
											<td>'.$row['logo'].'</td>
											<td>'.$row['correo'].'</td>
											<td>'.$row['telefono'].'</td>
											<td>'.$row['ubicacion'].'</td>
											<td>'.$row['boton_general'].'</td>
											<td>'.$row['tamanio'].'</td>
											<td>'.$row['color'].'</td>
											<td>'.$row['calificacion'].'</td>
											<td>'.$row['web'].'</td>
											<td>'.$row['rango_precio'].'</td>
											<td>'.$row['concepto'].'</td>
											<td>'.$row['verificacion'].'</td>
											<td>
												<a href="add.php?nik='.$row['id_perfil'].'" title="Agregar datos" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i></a>
												<a href="edit negocio.php?nik='.$row['id_perfil'].'" title="Editar datos" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
												<a href="index.php?dpn=delete&nik='.$row['id_perfil'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										';
										$no++;
									}
								}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>


<?php
require_once "footer.php";
?>