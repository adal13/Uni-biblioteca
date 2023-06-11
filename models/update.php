<?php 

    include 'conection.php';

    $id_libro = $_POST['id_libro'];
    $nombre=$_POST['nombre'];
    $volumen=$_POST['volumen'];
    $etiqueta=$_POST['etiqueta'];
    $autor=$_POST['autor'];
    $estatus=$_POST['estatus'];

    $sql="UPDATE libros SET nombre = '$nombre', volumen = '$volumen', 
    etiqueta = '$etiqueta', autor = '$autor', estatus = '$estatus' WHERE  id_libro = '$id_libro' ";

    $result = mysqli_query($mysqli, $sql);

    if($result){

        header("Location:../view/books.php");
    }else{

    }

?>