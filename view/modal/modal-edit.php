<div class="modal fade" id="update<?php echo $row['id_libro']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form action="../models/update.php" method="POST">
                    <input class="input-line" type="hidden" name="id_libro" id="id_libro" value="<?php echo $row['id_libro']; ?>" required>

                    <div class="row-cols-sm-1 mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-select" name="nombre" value="<?php echo $row['nombre']; ?>"  >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Volumen</label>
                        <input type="text" class="form-select" name="volumen" value="<?php echo $row['volumen']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Etiqueta</label>
                        <input type="text" class="form-control" name="etiqueta" value="<?php echo $row['etiqueta']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" value="<?php echo $row['autor']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">status</label>
                        <!-- <input type="text" class="form-control" name="status" value="<?php echo $row['status']; ?>"> -->
                        <select id="disabledSelect" class="form-select" name="estatus">
                            <?php if($row['estatus'] == 1){?>
                                <option class="option-user" value="1">Activado</option>
                                <option class="option-user" value="0">Desactivado</option>
                            <?php } if($row['estatus'] == 0){?>
                                <option class="option-user" value="0">Activado</option>
                                <option class="option-user" value="1">Desactivado</option>
                            <?php }?>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>