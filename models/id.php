<?php

    include 'bd_biblioteca.php';

    $id_libro = $_GET['id_libro']; 
    //codigo de editar, asi com el delete de eliminar
    $query = "SELECT * FROM libros WHERE id_libro = '$id_libro' ";

    $query = mysqli_query($mysqli, $query);
    $row=mysqli_fetch_array($query);
?>
