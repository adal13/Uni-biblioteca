<?php
include 'bd_biblioteca.php';

$nombre = $_POST['nombre'];
$volumen = $_POST['volumen'];
$etiqueta = $_POST['etiqueta'];
$autor = $_POST['autor'];

$sql = "INSERT INTO libros (id_libro, nombre, volumen, 
    etiqueta, autor, estatus, fecha_creacion) 
    VALUES (0, '$nombre','$volumen','$etiqueta','$autor',1, now())";
$query = mysqli_query($mysqli, $sql);

if ($query) {
    header("Location:../view/books.php");
} else {
}

?>