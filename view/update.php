<?php 
    require_once('home/head.php');
    // $this->load->view("header.php");

?>
<?php include '../models/id.php' ?>

    <!-- Modal -->
	<div class="container" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				
				<div class="modal-body">
					<form action="../models/update.php" method="post">
                    <input class="input-line" type="hidden" name="id_libro" id="id_libro" value="<?php echo $row['id_libro']; ?>" required>
                    
						<div class="row-cols-sm-1 mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-select" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>"  >
                            </div>
        
                            <div class="mb-3">
                                <label class="form-label">Volumen</label>
                                <input type="text" class="form-select" id="volumen" name="volumen" value="<?php echo $row['volumen']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Etiqueta</label>
                                <input type="text" class="form-control" id="etiqueta" name="etiqueta" value="<?php echo $row['etiqueta']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Autor</label>
                                <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $row['autor']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">status</label>
                                <input type="text" class="form-control" id="estatus" name="estatus" value="<?php echo $row['estatus']; ?>">
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

    <?php include 'home/footer.php'; ?>