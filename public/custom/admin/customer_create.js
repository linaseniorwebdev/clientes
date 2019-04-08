var lat, lng, map, marker;
var preloader;

function getLocation() {
	preloader.fadeIn("fast");
	GMaps.geolocate({
		success: function(e) {
			lat = e.coords.latitude;
			lng = e.coords.longitude;
			marker.setPosition(new google.maps.LatLng(lat, lng));
			map.panTo(new google.maps.LatLng(lat, lng));

			$("input[name='Latitude']").val(lat.toFixed(6));
			$("input[name='Longitude']").val(lng.toFixed(6));
			preloader.fadeOut("fast");
		},
		error: function(t) {
			swal({
				text: "Geolocalización fallida",
				type: "warning",
				confirmButtonText: "Cerrar",
			});
			preloader.fadeOut("fast");
		},
		not_supported: function() {
			swal({
				text: "Parece que su navegador no soporta la geolocalización o prohibir. Por favor, asegúrese de que esté habilitado y vuelva a intentarlo.",
				type: "warning",
				confirmButtonText: "Cerrar",
			});
			preloader.fadeOut("fast");
		},
		always: function() {}
	});
}

$(document).ready(function() {
	preloader = $('#preloader');

	lat = parseFloat($("input[name='Latitude']").val());
	lng = parseFloat($("input[name='Longitude']").val());
	if (isNaN(lat) || isNaN(lng)) {
		lat = 18.488707;
		lng = -69.933043;
	}

	var myLatLng = new google.maps.LatLng(lat, lng),
		myOptions = {
			zoom: 15,
			center: myLatLng
		};
	map = new google.maps.Map(document.getElementById('map'), myOptions);

	var infowindow = new google.maps.InfoWindow({
		content: '<span style="color:#000">(¿Es esta tu verdadera ubicación?)</span>'
	});

	marker = new google.maps.Marker({
		position: myLatLng,
		title: 'Aquí es donde estás'
	});

	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});

	marker.setMap(map);

	map.addListener('click', function(e) {
		preloader.fadeIn("fast");
		lat = e.latLng.lat();
		lng = e.latLng.lng();
		marker.setPosition(new google.maps.LatLng(lat, lng));
		map.panTo(new google.maps.LatLng(lat, lng));

		$("input[name='Latitude']").val(lat.toFixed(6));
		$("input[name='Longitude']").val(lng.toFixed(6));
		preloader.fadeOut("fast");
	});
});

function addCustomer() {
	if ($("#customer").valid())
		$("#customer").submit();
	else
		swal("Advertencia", "Por favor llene todos los campos requeridos", "warning");
}