<?php 
    include 'bd_biblioteca.php';

    $sql = "SELECT * FROM libros WHERE estatus = 1";
    
    $removed = "SELECT * FROM libros WHERE estatus = 0";
?>