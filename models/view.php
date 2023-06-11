<?php 
    include 'conection.php';

    $sql = "SELECT * FROM libros WHERE estatus = 1";
    
    $removed = "SELECT * FROM libros WHERE estatus = 0";
?>