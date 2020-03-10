<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'vanilla');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (!$link) {
        die ("Error de conexión.".mysqli_connect_error());
    } else {
        echo " Conectado a la base de datos.";
    }
?>