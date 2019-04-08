let table;

$(document).ready(function() {
	table = $('#customerList').DataTable({
		responsive: true,
		processing: true,
		serverSide: true,
		autoWidth: false,
		order: [],
		ajax: {
			url : "../../api/customer/list",
			type: "POST",
			error: function (xhr, ajaxOptions, thrownError) {
				console.log(xhr);
			}
		},
		columnDefs: [
			{
				targets: [0],
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
				orderable: false
			},
			{
				targets: [5],
				orderable: false
			},
			{
				targets: [6],
				orderable: false
			},
			{
				targets: [7],
				orderable: false
			},
			{
				targets: [8],
				orderable: false
			},
			{
				targets: [9],
				orderable: false
			},
			{
				targets: [10],
				orderable: false
			},
			{
				targets: [11],
				orderable: false
			},
			{
				targets: [12],
				orderable: false
			},
			{
				targets: [13],
				orderable: false
			},
			{
				targets: [14],
				orderable: false
			},
			{
				targets: [15],
				orderable: false
			},
			{
				targets: [16],
				orderable: false
			},
			{
				targets: [17],
				orderable: false
			},
			{
				targets: [18],
				orderable: false
			},
			{
				targets: [19],
				orderable: false
			},
			{
				targets: [20],
				orderable: false
			},
			{
				targets: [21],
				width: '80px',
				render: function ( data, type, row ) {
					let buffer = '<input type="hidden" value="' + row[1] + '" />';
					buffer += ('<button type="button" class="btn btn-rounded btn-primary mr-2" onclick="editCustomer(this)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>');
					buffer += ('<a class="btn btn-rounded btn-flat btn-outline-success" href="https://www.google.com/maps/search/?api=1&query=' + row[22] + ',' + row[23] + '" target="_blank" style="padding: 11px 16.5px;"><i class="fa fa-map-marker" aria-hidden="true"></i></a>');
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

function editCustomer(obj) {
	var customer_code = obj.previousSibling.value;
	location.href = "../../admin/customer/edit/" + customer_code;
}