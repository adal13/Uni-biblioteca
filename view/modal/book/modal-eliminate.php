
<div class="modal fade" id="delete<?php echo $libro['id_libro']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">¿Realmente desea eliminar el siguiente libro?</h5>
			</div>

			<div class="modal-body">
				<strong>
					<?php echo $libro['nombre']; ?>
				</strong>
			</div>

			<div class="modal-footer">
				<form action="../controllers/controllers.view.php?requestBook=desactive" method="post">
					<input hidden type="text" value="<?php echo $libro['id_libro']; ?>" name="id">
					<a type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</a>
					<button type="submit" class="btn btn-danger" data-dismiss="modal">Eliminar</butt>
				</form>	
				<!-- <a type="submit" class="btn btn-danger" data-dismiss="modal" href="<?='../models/delete.php?id_libro=' . $id ?>">Eliminar</a> -->
			</div>
		</div>
	</div>
</div>