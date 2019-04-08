let table;

$(document).ready(function() {
	table = $('#userList').DataTable({
		responsive: true,
		processing: true,
		serverSide: true,
		autoWidth: false,
		order: [],
		ajax: {
			url : "../../api/user/list",
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
				orderable: false
			},
			{
				targets: [4],
				render: function ( data, type, row ) {
					let buffer = '';
					if (data == 'No aplicado')
						buffer = '<span class="badge badge-pill badge-secondary">No aplicado</span>';
					if (data == 'Normal')
						buffer = '<span class="badge badge-pill badge-success">Normal</span>';
					if (data == 'Suspendido')
						buffer = '<span class="badge badge-pill badge-warning">Suspendido</span>';
					return buffer;
				},
				orderable: false
			},
			{
				targets: [5],
				orderable: false
			},
			{
				targets: [6],
				width: '80px',
				render: function ( data, type, row ) {
					let buffer = '';
					if (row[4] == 'No aplicado')
						buffer = '';
					if (row[4] == 'Normal')
						buffer = '<button type="button" class="btn btn-xs btn-rounded btn-secondary" onclick="disable(this)">Deshabilitar</button>';
					if (row[4] == 'Suspendido')
						buffer = '<button type="button" class="btn btn-xs btn-rounded btn-success" onclick="enable(this)">Habilitar</button>';
					buffer += ('<input type="hidden" value="' + row[0] + '" />');
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
});

function enable(obj) {
	$.post(
		'../../api/user/update',
		{
			ID: obj.nextElementSibling.value,
			Status: 1
		},
		function (data) {
			table.ajax.reload( null, false );
		}
	);
}

function disable(obj) {
	$.post(
		'../../api/user/update',
		{
			ID: obj.nextElementSibling.value,
			Status: 2
		},
		function (data) {
			table.ajax.reload( null, false );
		}
	);
}