<?php
    //Inicializar la sesion
    session_start();
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: index_cliente.html");
        exit;
    }
    
    require_once "conexion.php";
    $correo = $contra = "";
    $correo_err = $contra_err = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty(trim($_POST["correo"]))) {
            $correo_err = "Por favor, ingrese un correo electronico.";
        } else {
            $correo = trim($_POST["correo"]);
        }

        if (empty(trim($_POST["contra"]))) {
            $contra_err = "Por favor, ingrese una contraseña.";
        } else {
            $contra = trim($_POST["contra"]);
        }

        //Validar credenciales
        if (empty($correo_err) && empty($contra_err)) {
            $sql = "SELECT id_cliente, usuario, correo, contra FROM cliente WHERE correo = ?";
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_correo);
                $param_correo = $correo;
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                }
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id_cliente, $usuario, $correo, $hashed_contra);
                    if (mysqli_stmt_fetch($stmt)) {
                        if(password_verify($contra, $hashed_contra)) {
                            session_start();

                            //Almacenar datos en variables de sesion
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_cliente"] = $id_cliente;
                            $_SESSION["correo"] = $correo;
                            
                            header("location: index_cliente.php");
                        } else {
                            $contra_err = "La contraseña que has ingresado no es valida.";
                        }
                    } 
                } else {
                    $correo_err = "No se ha encontrado ningun cuenta con ese correo electronico.";
                } 
            } else {
                echo " ¡Ups! algo salio mal, intentalo mas tarde.";
            }
        }
        mysqli_close($link);
    }
?>