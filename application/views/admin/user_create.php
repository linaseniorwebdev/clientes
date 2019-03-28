<div class="main-content-inner">
	<div class="card mt-4">
		<div class="card-body">
			<?php
			if (isset($message)) {
				if (strlen($message) < 30) {
			?>
			<div class="alert alert-success" role="alert">
				<?php echo $message; ?>
			</div>
			<?php
				} else {
			?>
			<div class="alert alert-danger" role="alert">
				<?php echo $message; ?>
			</div>
			<?php
				}
			}
			?>
			<form action="<?php echo base_url('admin/user/create'); ?>" method="post">
				<div class="form-group">
					<label for="example-text-input" class="col-form-label">Email del usuario</label>
					<input class="form-control" type="text" value="" name="email" />
				</div>
				<button type="submit" class="btn btn-primary">Enviar invitacion</button>
			</form>
		</div>
	</div>
</div>