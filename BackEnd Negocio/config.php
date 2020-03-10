<?php
            require_once "conexion.php";
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = mysqli_real_escape_string($link,(strip_tags($_SESSION["id_negocio"],ENT_QUOTES)));
			$sql1 = mysqli_query($link, "SELECT * FROM negocio WHERE id_negocio='$nik'");
			if(mysqli_num_rows($sql1) == 0){
				header("Location: index.php");
			}else{
				$row1 = mysqli_fetch_assoc($sql1);
			}
			$perfil = mysqli_real_escape_string($link,(strip_tags($_SESSION["id_perfil"],ENT_QUOTES)));
			$sql2 = mysqli_query($link, "SELECT * FROM perfil_negocio WHERE id_perfil='$perfil'");
			if(mysqli_num_rows($sql2) == 0){
				header("Location: index.php");
			}else{
				$row2 = mysqli_fetch_assoc($sql2);
            }
            
			if(isset($_POST['save1'])){		
				$nombre		     = mysqli_real_escape_string($link,(strip_tags($_POST["nombre"],ENT_QUOTES)));//Escanpando caracteres 
				$fecha_nacimiento	 = mysqli_real_escape_string($link,(strip_tags($_POST["fecha_nacimiento"],ENT_QUOTES)));//Escanpando caracteres 
				$telefono		 = mysqli_real_escape_string($link,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
                $correo		 = mysqli_real_escape_string($link,(strip_tags($_POST["correo"],ENT_QUOTES)));//Escanpando caracteres
				
				$update = mysqli_query($link, "UPDATE negocio SET nombre='$nombre', fecha_nacimiento='$fecha_nacimiento', telefono='$telefono', correo='$correo' WHERE id_negocio='$nik'") or die(mysqli_error());
				if($update){
                    header("Location: config.php?nik=".$nik."&pesan=sukses");
				}else{
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
            }
            
            if(isset($_POST['save2'])){		
                $nombre_negocio     = mysqli_real_escape_string($link,(strip_tags($_POST["nombre"],ENT_QUOTES)));//Escanpando caracteres 
				$descripcion	 = mysqli_real_escape_string($link,(strip_tags($_POST["descripcion"],ENT_QUOTES)));//Escanpando caracteres 
				$logo     = mysqli_real_escape_string($link,(strip_tags($_POST["logo"],ENT_QUOTES)));//Escanpando caracteres 
                $correo_negocio     = mysqli_real_escape_string($link,(strip_tags($_POST["correo"],ENT_QUOTES)));//Escanpando caracteres
                $telefono_negocio     = mysqli_real_escape_string($link,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres
                $ubicacion     = mysqli_real_escape_string($link,(strip_tags($_POST["ubicacion"],ENT_QUOTES)));//Escanpando caracteres
                $boton_general     = mysqli_real_escape_string($link,(strip_tags($_POST["boton_general"],ENT_QUOTES)));//Escanpando caracteres
                $tamanio     = mysqli_real_escape_string($link,(strip_tags($_POST["tamanio"],ENT_QUOTES)));//Escanpando caracteres
                $color     = mysqli_real_escape_string($link,(strip_tags($_POST["color"],ENT_QUOTES)));//Escanpando caracteres
                $web     = mysqli_real_escape_string($link,(strip_tags($_POST["web"],ENT_QUOTES)));//Escanpando caracteres
                $rango_precio     = mysqli_real_escape_string($link,(strip_tags($_POST["rango_precio"],ENT_QUOTES)));//Escanpando caracteres
                $concepto     = mysqli_real_escape_string($link,(strip_tags($_POST["concepto"],ENT_QUOTES)));//Escanpando caracteres
				
                $update = mysqli_query($link, "UPDATE perfil_negocio SET nombre='$nombre_negocio', descripcion='$descripcion', logo='$logo', correo='$correo_negocio', telefono='$telefono_negocio', ubicacion='$ubicacion', boton_general='$boton_general', tamanio='$tamanio', color='$color', web='$web', rango_precio='$rango_precio', concepto='$concepto' WHERE id_perfil='$perfil'") or die(mysqli_error());
				if($update){
                    header("Location: config.php?nik=".$nik."&pesan=sukses");
				}else{
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
            }
            
			if(isset($_POST['delete'])){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$cek = mysqli_query($link, "SELECT * FROM negocio WHERE id_negocio='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete1 = mysqli_query($link, "DELETE FROM negocio WHERE id_negocio='$nik'");
					if($delete1){
						$delete2 = mysqli_query($link, "DELETE FROM perfil_negocio WHERE id_perfil='$perfil'");
						if($delete2){
						header("Location: ../BackEnd Negocio/logout.php");
					}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar el perfil.</div>';
						}
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar la cuenta.</div>';
					}
				}
			}
			
			if(isset($_POST['password'])){
				$contra = mysqli_real_escape_string($link,(strip_tags($_POST["contra"],ENT_QUOTES)));//Escanpando caracteres
				$param_contra = password_hash($contra, PASSWORD_DEFAULT); //Encriptando contraseña
				$update = mysqli_query($link, "UPDATE negocio SET contra='$param_contra' WHERE id_negocio='$nik'") or die(mysqli_error());
				if($update){
					header("Location: config.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
            
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>