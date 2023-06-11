<div class="modal fade" id="delete<?php echo $row['id_libro']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Realmente desea restaurar a</h5>
			</div>

			<div class="modal-body">
				<strong>
					<?php echo $row['nombre']; ?>
				</strong>
			</div>

			<div class="modal-footer">
				<a type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</a>
				<a type="submit" class="btn btn-danger" data-dismiss="modal" href="<?='../models/restore.php?id_libro=' . $id ?>">Si</a>
			</div>
		</div>
	</div>
</div>