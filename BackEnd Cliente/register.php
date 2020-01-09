<?php

    require_once "conexion.php";

    //Definir variable a inicializar con valores vacio
    $usuario = $f_nacimiento = $telefono = $correo = $contra1 = $contra2 = "";
    $usuario_err = $f_nacimiento_err = $telefono_err = $correo_err = $contra1_err = $contra2_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Validando Input del nombre de usuario
        if (empty(trim($_POST["usuario"]))) {
            $usuario_err = "Por favor, ingrese un nombre de usuario.";
        } else {
            //Prepara una declaracion de seleccion
            $sql = "SELECT id_cliente FROM cliente WHERE usuario = ?";
            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_usuario);
                $param_usuario = trim($_POST["usuario"]);
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $usuario_err = "Este nombre de usuario ya está en uso.";
                    } else {
                        $usuario = trim($_POST["usuario"]);
                    }
                } else {
                    echo " ¡Ups! Algo salió mal, inténatlo más tarde.";
                }
            }
        }

        //Validando Input de la fecha de nacimiento
        if (empty(trim($_POST["f_nacimiento"]))) {
            $f_nacimiento_err = "Por favor, ingrese una fecha de nacimiento.";
        } else {
            //Prepara una declaracion de seleccion
            $sql = "SELECT id_cliente FROM cliente WHERE f_nacimiento = ?";
            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_usuario);
                $param_f_nacimiento = trim($_POST["f_nacimiento"]);
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    $f_nacimiento = trim($_POST["f_nacimiento"]);
                } else {
                    echo " ¡Ups! Algo salió mal, inténatlo más tarde.";
                }
            }
        }

        //Validando Input del telefono
        if (empty(trim($_POST["telefono"]))) {
            $telefono_err = "Por favor, ingrese un numero de telefono.";
        } 
        else if (strlen(trim($_POST["telefono"])) != 10) {
            $telefono_err = "El telefono debe tener no más ni menos de 10 dígitos.";
        } else {
            //Prepara una declaracion de seleccion
            $sql = "SELECT id_cliente FROM cliente WHERE telefono = ?";
            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_telefono);
                $param_telefono = trim($_POST["telefono"]);
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $telefono_err = "Este telefono ya está en uso.";
                    } else {
                        $telefono = trim($_POST["telefono"]);
                    }
                } else {
                    echo " ¡Ups! Algo salió mal, inténatlo más tarde.";
                }
            }
        }

        //Validando Input del correo
        if (empty(trim($_POST["correo"]))) {
            $correo_err = "Por favor, ingrese un correo electrónico.";
        } else {
            //Prepara una declaracion de seleccion
            $sql = "SELECT id_cliente FROM cliente WHERE correo = ?";
            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_correo);
                $param_correo = trim($_POST["correo"]);
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $correo_err = "Este correo ya está en uso.";
                    } else {
                        $correo = trim($_POST["correo"]);
                    }
                } else {
                    echo " ¡Ups! Algo salió mal, inténatlo más tarde.";
                }
            }
        }

        //Validando Input de la contraseña 1
        if (empty(trim($_POST["contra1"]))) {
            $contra1_err = "Por favor, confirme su contraseña.";
        } 
        else if (strlen(trim($_POST["contra1"])) < 8) {
            $contra1_err = "La contraseña debe de tener al menos 8 caracteres.";
        } else {
            $contra1 = trim($_POST["contra1"]);
        }

        //Validando Input de la contraseña 2
        if (empty(trim($_POST["contra2"]))) {
            $contra2_err = "Por favor, confirme su contraseña.";
        }
        else if (strlen(trim($_POST["contra2"])) == strlen(trim($_POST["contra1"]))) {
            $contra2_err = "La contraseñas ingresadas no coinciden.";
        } else {
            $contra2 = trim($_POST["contra2"]);
        }

        //Comprobando los errores de entrada antes de insertar los datos en la base de datos
        if (empty($usuario_err) && empty($f_nacimiento_err) && empty($telefono_err) && empty($correo_err) && empty($contra1_err) && empty($contra2_err)) {
            $sql = "INSERT INTO cliente (usuario, f_nacimiento, telefono, correo, contra) VALUES (?, ?, ?, ?, ?)";
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "sssss", $param_usuario, $param_f_nacimiento, $param_telefono, $param_correo, $param_contra2);
                //Estableciendo parametro
                $param_usuario = $usuario;
                $param_f_nacimiento = $f_nacimiento;
                $param_telefono = $telefono;
                $param_correo = $correo;
                $param_contra2 = password_hash($contra2, PASSWORD_DEFAULT); //Encriptando contraseña
                if (mysqli_stmt_execute($stmt)) {
                    header("location: ../FrontEnd Cliente/login.php");
                } else {
                    echo " Algo salio mal, intentalo despues.";
                }
            }
        }   
        mysqli_close($link);      
    }
?>