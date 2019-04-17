
$(document).ready(function() {
	$.getJSON('https://ipfind.co/me?auth=50e887ce-e3bb-4f00-a9b9-667597db5539', function(data) {
		$("input[name='IP']").val(data.ip_address);
	});
});

$("#form_submit").click(function() {
	let user = $("#exampleInputName1").val();
	if (user.length < 1) {
		swal("Advertencia", "Por favor, compruebe nombre de usuario!", "warning");
		return;
	}
	let pass = $("#exampleInputPassword1").val();
	let repp = $("#exampleInputPassword2").val();
	if (pass.length < 1 || repp.length < 1) {
		swal("Advertencia", "Por favor ingrese la contraseña", "warning");
		return;
	}
	if (pass != repp) {
		swal("Advertencia", "Las contraseñas deben ser las mismas", "warning");
		return;
	}
	$.post(
		'../../api/user/check',
		{
			Name: user
		},
		function (data) {
			data = JSON.parse(data);
			if (data.reply == "exist") {
				swal("Advertencia", "Nombre de usuario ya existe", "warning");
			} else {
				$("form").submit();
			}
		}
	);
});