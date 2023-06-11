<?php 

    $mysqli = new mysqli('localhost', 'root', '', 'biblioteca');

    /* Comprobando si hay un error de conexión. */
    if ($mysqli->connect_error) {
        die('Error de conexion ' . $conn->connect_error);
    }
?>