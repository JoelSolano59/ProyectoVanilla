<?php
    function obtener_datos() {
        require_once "conexion.php";

        $sql = "SELECT * FROM cliente WHERE id_cliente =".$_SESSION["id_cliente"];
        $res = mysqli_query($link, $sql);
        $filas = array();
        while ($fila = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            $filas[] = $fila;
        }

        mysqli_close($link);
        return $filas;
    }
?>