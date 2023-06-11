<?php
    include 'conection.php';
    
    // $id_libro= $_REQUEST['id_libro'];
    // $DeleteRegistro = ("DELETE FROM libros WHERE id_libro= '".$id_libro."' "); 
    // mysqli_query($mysqli, $DeleteRegistro);
    
    // $id_libro=$_GET['id_libro'];
    
    // $delete = "DELETE FROM  libros WHERE id_libro= '$id_libro'";
    
    // $result = mysqli_query($mysqli, $delete);
    
    $id_libro=$_GET['id_libro'];

    $delete = "UPDATE libros SET estatus = 1 WHERE id_libro = '$id_libro'";
    
    $result = mysqli_query($mysqli, $delete);

    if ($result){
        header("Location:../view/removed.php");
    }

?>