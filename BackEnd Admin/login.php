<?php
    require_once "conexion.php";
    
    $registro = $contra = "";
    $registro_err = $contra_err = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty(trim($_POST["registro"]))) {
            $registro_err = "Por favor, ingrese su registro.";
        } else {
            $registro = trim($_POST["registro"]);
        }

        if (empty(trim($_POST["contra"]))) {
            $contra_err = "Por favor, ingrese una contraseña.";
        } else {
            $contra = trim($_POST["contra"]);
        }

        //Validar credenciales
        if (empty($registro_err) && empty($contra_err)) {
            $sql = "SELECT id_admin, registro, contra FROM `admin` WHERE registro = ?";
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_registro);
                $param_registro = $registro;
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                }
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id_admin, $registro, $hashed_contra);
                    if (mysqli_stmt_fetch($stmt)) {
                        if(password_verify($contra, $hashed_contra)) {          
                            session_start();

                            //Almacenar datos en varia bles de sesion
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_admin"] = $id_admin;
                            $_SESSION["registro"] = $registro;
                            
                            header("location: ../FrontEnd Admin/index.php");
                        } else {
                            $contra_err = "La contraseña que has ingresado no es valida.";
                        }
                    } 
                } else {
                    $registro_err = "No se ha encontrado ningun cuenta con este registro.";
                } 
            } else {
                echo " ¡Ups! algo salio mal, intentalo mas tarde.";
            }
        }
        mysqli_close($link);
    }
?>