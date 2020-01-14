<?php
session_start();
$_SESSION = array();
session_destroy();
header("location: ../FrontEnd Negocio/login.php");
exit;
?>