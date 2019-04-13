
$(document).ready(function() {
	$("#Assigned").select2();
});

$("button").click(function() {
	let Subject = $("#Subject").val();
	if (Subject.length < 1) {
		swal("Advertencia", "Por favor verifica que todos los datos estén dados", "warning");
		return;
	}
	let Details = $("#Details").val();
	if (Details.length < 1) {
		swal("Advertencia", "Por favor verifica que todos los datos estén dados", "warning");
		return;
	}
	let Assigned = $("#Assigned").val();
	if (Assigned === null) {
		swal("Advertencia", "Por favor verifica que todos los datos estén dados", "warning");
		return;
	}
	Assigned = Assigned.join(",");
	$.post(
		'../../api/task/create',
		{
			Subject: Subject,
			Details: Details,
			Priority: $("#Priority").val(),
			Assigned: Assigned
		},
		function () {
			location.href = "list";
		}
	);
});