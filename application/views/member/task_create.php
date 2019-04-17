<style>
	select.form-control:not([size]):not([multiple]) {
		height: initial;
	}

	.select2-container--default .select2-selection--multiple .select2-selection__rendered {
		padding: .2rem .4rem;
	}
</style>
<div class="main-content-inner" style="padding-top: 15px; padding-bottom: 15px;">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form action="<?php echo base_url('api/task/create') ?>" method="post">
					<div class="form-group" style="max-width: 400px;">
						<label for="Subject" class="col-form-label">Asunto</label>
						<input class="form-control" type="text" value="" id="Subject" name="Subject" />
					</div>
					<div class="form-group">
						<label for="Details" class="col-form-label">Descripción</label>
						<textarea class="form-control" rows="7" id="Details" name="Details" style="resize: none;"></textarea>
					</div>
					<div class="form-group" style="max-width: 150px;">
						<label for="Priority" class="col-form-label">Prioridad</label>
						<select class="form-control" id="Priority" name="Priority">
							<option value="0">Bajo</option>
							<option value="1">Normal</option>
							<option value="2">Alto</option>
						</select>
					</div>
					<div class="form-group">
						<label for="Assigned" class="col-form-label">Prioridad</label>
						<select class="form-control" id="Assigned" name="Assigned" multiple="multiple">
							<?php
							foreach ($users as $user) {
								echo '<option value="' . $user['ID'] . '">' . $user['First'] . ' ' . $user['Last'] . '</option>';
							}
							?>
						</select>
					</div>
					<div class="form-group mt-4 mb-0 text-center">
						<button type="button" class="btn btn-rounded btn-primary">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
