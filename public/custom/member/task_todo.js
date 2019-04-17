let table, varID;

$(document).ready(function() {
	let levels = ["Bajo", "Normal", "Alto"];
	let colors = ["success", "primary", "danger"];
	let status = [null, "En progreso", "Terminado", "Cancelado"];

	table = $('#taskList').DataTable({
		responsive: true,
		processing: true,
		serverSide: true,
		autoWidth: false,
		order: [],
		ajax: {
			url : "../../api/task/list/todo",
			type: "POST",
			error: function (xhr, ajaxOptions, thrownError) {
				console.log(xhr);
			}
		},
		columnDefs: [
			{
				targets: [0],
				width: '20px',
				orderable: false
			},
			{
				targets: [1],
				orderable: false
			},
			{
				targets: [2],
				orderable: false
			},
			{
				targets: [3],
				render: function(data, type, row) {
					return '<span class="badge badge-pill badge-' + colors[data] + '">' + levels[data] + '</span>';
				},
				orderable: false
			},
			{
				targets: [4],
				orderable: false
			},
			{
				targets: [5],
				orderable: false
			},
			{
				targets: [6],
				render: function(data, type, row) {
					return '<span class="text-' + colors[data] + '">' + status[data] + '</span>';
				},
				orderable: false
			},
			{
				targets: [7],
				render: function(data, type, row) {
					if (data > 25)
						return '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-' + colors[row[3]] + '" role="progressbar" aria-valuenow="' + data + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + data + '%">' + data + '%</div></div>';
					else
						return '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-' + colors[row[3]] + '" role="progressbar" aria-valuenow="' + data + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + data + '%"></div></div>';
				},
				orderable: false
			},
			{
				targets: [8],
				orderable: false
			},
			{
				targets: [9],
				render: function ( data, type, row ) {
					let buffer = '';
					if (row[6] == 1)
						buffer = '<button type="button" class="btn btn-xs btn-rounded btn-primary" onclick="updateStatus(this)">Actualizar</button>';
					buffer += ('<input type="hidden" value="' + row[0] + '" />');
					buffer += ('<input type="hidden" value="' + row[7] + '" />');
					return buffer;
				},
				orderable: false
			}
		],
		language: {
			"decimal":        "",
			"emptyTable":     "No hay datos en la tabla",
			"info":           "Mostrando _TOTAL_ entradas de _START_ a _END_",
			"infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
			"infoFiltered":   "(Entradas totales se separó por filtración de _MAX_)",
			"infoPostFix":    "",
			"thousands":      ",",
			"lengthMenu":     "Mostrar la entrada _MENU_",
			"loadingRecords": "Cargando...",
			"processing":     "Procesando...",
			"search":         "Búsqueda:",
			"zeroRecords":    "No se encontraron registros coincidentes",
			"paginate": {
				"first":      "Primer",
				"last":       "Último",
				"next":       "Anterior",
				"previous":   "Siguiente"
			},
			"aria": {
				"sortAscending":  ": Activar para ordenar las columnas en orden ascendente",
				"sortDescending": ": Activar para ordenar en orden descendente por columna"
			}
		}
	});

	let slider = document.getElementById("newProgress");
	let output = document.getElementById("newValue");

	slider.oninput = function() {
		output.value = this.value;
	}
});

function updateStatus(obj) {
	varID = parseInt(obj.nextElementSibling.value);
	let varProgress = parseInt(obj.nextElementSibling.nextElementSibling.value);
	$("#newProgress").val(varProgress + 1).attr("min", varProgress + 1);
	$("#newValue").val(varProgress + 1);
	$("#oldValue").val(varProgress);
	$("#updateModal").modal({backdrop: 'static', keyboard: false});
}

function confirmUpdate() {
	$.post(
		'../../api/task/update',
		{
			ID: varID,
			Progress: $("#newValue").val()
		},
		function () {
			table.ajax.reload( null, false );
			swal("", "Estado de la tarea actualizado correctamente", "success");
			$("#updateModal").modal("toggle");
		}
	);
}