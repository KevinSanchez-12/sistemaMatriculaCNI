<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $baseDeDatos = 'cni';
    $conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDeDatos);
    $conexion -> set_charset("utf8");
?>
