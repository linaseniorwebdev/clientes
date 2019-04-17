<style>
	table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child:before {
		top: 50%;
		transform: translateY(-50%);
		left: 6px;
	}

	.slidecontainer {
		width: 100%;
	}

	.slider {
		-webkit-appearance: none;
		width: 100%;
		height: 15px;
		border-radius: 5px;
		background: #d3d3d3;
		outline: none;
		opacity: 0.7;
		-webkit-transition: .2s;
		transition: opacity .2s;
	}

	.slider:hover {
		opacity: 1;
	}

	.slider::-webkit-slider-thumb {
		-webkit-appearance: none;
		appearance: none;
		width: 25px;
		height: 25px;
		border-radius: 50%;
		background: #4CAF50;
		cursor: pointer;
	}

	.slider::-moz-range-thumb {
		width: 25px;
		height: 25px;
		border-radius: 50%;
		background: #4CAF50;
		cursor: pointer;
	}
</style>
<div class="main-content-inner" style="padding-top: 15px; padding-bottom: 15px;">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div class="data-tables">
					<table id="taskList" class="text-center">
						<thead class="bg-light text-capitalize">
						<tr>
							<th>ID</th>
							<th>Usuario creador</th>
							<th>Asunto</th>
							<th>Prioridad</th>
							<th>Fecha de creación</th>
							<th>Fecha de finalización</th>
							<th>Estatus</th>
							<th>Porciento de progreso</th>
							<th>Usuario asignado</th>
							<th>Acción</th>
						</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="updateModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Actualizar el estado de la tarea</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="slidecontainer">
					<label for="newProgress"></label>
					<input type="range" min="1" max="100" value="50" class="slider" id="newProgress" />
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group text-right">
							<label for="oldValue" class="col-form-label">Viejo progreso</label>
							<div class="input-group">
								<input type="text" class="form-control text-right" id="oldValue" readonly="readonly" />
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">%</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group text-right">
							<label for="newValue" class="col-form-label">Nuevo progreso</label>
							<div class="input-group">
								<input type="text" class="form-control text-right" id="newValue" readonly="readonly" />
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="confirmUpdate()">Save changes</button>
			</div>
		</div>
	</div>
</div>