<?php
    include 'bd_biblioteca.php';
    
    $id_libro=$_GET['id_libro'];

    $delete = "UPDATE libros SET estatus = 1 WHERE id_libro = '$id_libro'";
    
    $result = mysqli_query($mysqli, $delete);

    if ($result){
        header("Location:../view/removed.php");
    }

?>