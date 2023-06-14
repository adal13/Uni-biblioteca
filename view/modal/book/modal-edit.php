<div class="modal fade" id="update<?php echo $libro['id_libro']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form action="../controllers/controllers.view.php?requestBook=update" method="POST">

                    <input type="hidden" class="form-control" name="id_libro" value="<?php echo $libro['id_libro'];?>">

                    <div class="row-cols-sm-1 mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $libro['nombre'];?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Volumen</label>
                        <input type="text" class="form-control" name="volumen" value="<?php echo $libro['volumen'];?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Etiqueta</label>
                        <input type="text" class="form-control" name="etiqueta" value="<?php echo $libro['etiqueta'];?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" value="<?php echo $libro['autor'];?>">
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