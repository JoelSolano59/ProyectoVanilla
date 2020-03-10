<?php
            require_once "../BackEnd Admin/conexion.php";
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = mysqli_real_escape_string($link,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($link, "SELECT * FROM cliente WHERE id_cliente='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$id_cliente		     = mysqli_real_escape_string($link,(strip_tags($_POST["id_cliente"],ENT_QUOTES)));//Escanpando caracteres 
				$nombre		     = mysqli_real_escape_string($link,(strip_tags($_POST["nombre"],ENT_QUOTES)));//Escanpando caracteres 
				$fecha_nacimiento	 = mysqli_real_escape_string($link,(strip_tags($_POST["fecha_nacimiento"],ENT_QUOTES)));//Escanpando caracteres 
				$telefono		 = mysqli_real_escape_string($link,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$correo		 = mysqli_real_escape_string($link,(strip_tags($_POST["correo"],ENT_QUOTES)));//Escanpando caracteres   
				
				$update = mysqli_query($link, "UPDATE cliente SET nombre='$nombre', fecha_nacimiento='$fecha_nacimiento', telefono='$telefono', correo='$correo' WHERE id_cliente='$nik'") or die(mysqli_error());
				if($update){
					header("Location: edit cliente.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>