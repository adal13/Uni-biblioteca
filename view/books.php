<?php require_once '../models/view.php'; ?>

<?php include 'home/head.php'; ?>

    <header>
        <?php include_once 'home/header.php'?>
    </header>

    <div class="container mt-5">
        <table class="table table-striped table ">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Volumen</th>
                    <th scope="col">Etiqueta</th>
                    <th scope="col">Autor</th>
                    <!-- <th scope="col">Estatus</th> -->
                    <th scope="col" colspan="2">Botones</th>
                </tr>
            </thead>

            <?php 
            if($result = $mysqli->query($sql)){ 
                while($row = $result->fetch_assoc()){?>
                    <tbody>
                        <tr>
                            <?php $id=$row ['id_libro'];?>
                            <?php $nombre=$row ['nombre'];?>
                            <?php $estatus=$row ['estatus'];?>
                            <td><?php echo $row ['nombre']?></td>
                            <td><?php echo $row ['volumen']?></td>
                            <td><?php echo $row ['etiqueta']?></td>
                            <td><?php echo $row ['autor']?></td>
                            <!-- <td><?php echo $row ['estatus']?></td> -->
                            <div>
                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update<?php echo $row['id_libro']; ?>">Editar</button></td>

                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['id_libro']; ?>">Eliminar</button></td>
                            
                                <!-- <a class="link-ligh" href="<?='./update.php?id_libro=' . $id ?>">Editar</a> -->
                                <!-- <a class="link-ligh" href="<?='./eliminar.php?id_libro=' . $id ?>">Eliminar</a> -->
                            </div>
                        </tr>
                    </tbody>

                    <!-- Modal window to edit -->
                    <?php include 'modal/modal-edit.php';?>
                    <!-- Modal window to delete -->
                    <?php include 'modal/modal-eliminate.php';?>

                <?php }
            }?>
            
        </table>
        <a class="btn btn-primary" href="alta.php" role="button">Agregar</a>
    </div>


    <!-- Footer -->
    <?php include 'home/footer.php';?>

