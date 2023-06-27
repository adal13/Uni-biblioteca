<?php
include 'home/head.php';
session_start();
?>

<header>
    <?php include_once 'home/header.php' ?>
</header>

<div class="container mt-5">
    <table class="table table-striped ">
        <thead>
            <tr class="text-center">
                <th scope="col">Nombre</th>
                <th scope="col">Volumen</th>
                <th scope="col">Etiqueta</th>
                <th scope="col">Autor</th>
                <!-- <th scope="col">Estatus</th> -->
                <th scope="col" colspan="2">Botones</th>
            </tr>
        </thead>

        <?php
        foreach ($_SESSION['data'] as $libro) {
            $status = $libro['estatus'];
            if ($status != 0) { ?>
                <tbody>
                    <tr class="text-center">
                        <?php $id = $libro['id_libro']; ?>
                        <td>
                            <?php echo $libro['nombre'] ?>
                        </td>
                        <td>
                            <?php echo $libro['volumen'] ?>
                        </td>
                        <td>
                            <?php echo $libro['etiqueta'] ?>
                        </td>
                        <td>
                            <?php echo $libro['autor'] ?>
                        </td>
                        <div class="m-auto">
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#update<?php echo $libro['id_libro']; ?>">Editar</button></td>

                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete<?php echo $libro['id_libro']; ?>">Eliminar</button></td>
                        </div>
                    </tr>
                </tbody>
                <!-- Modal window to edit -->
                <?php include 'modal/book/modal-edit.php'; ?>
                <!-- Modal window to delete -->
                <?php include 'modal/book/modal-eliminate.php'; ?>

            <?php }
        } ?>
    </table>

    <!-- <a class="btn btn-primary" href="register-book.php" role="button">Agregar</a> -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#register-book">Agregar</button>

    <?php include 'modal/book/modal-register.php' ?>

</div>

<!-- Footer -->
<?php include 'home/footer.php'; ?>