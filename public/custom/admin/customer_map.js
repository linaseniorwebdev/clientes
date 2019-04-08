var lat, lng, map;

$(document).ready(function() {
	lat = 18.488707;
	lng = -69.933043;

	var myLatLng = new google.maps.LatLng(lat, lng),
		myOptions = {
			zoom: 15,
			center: myLatLng
		};
	map = new google.maps.Map(document.getElementById('map'), myOptions);

	/*
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
	*/

	var image = {
		url: '../../public/custom/marker.svg',	// url
		scaledSize: new google.maps.Size(32, 32),								// scaled size
		origin: new google.maps.Point(0, 0),									// origin
		anchor: new google.maps.Point(32, 32)									// anchor
	};

	$.get("../../api/customer/locations", function(data) {
		data = $.parseJSON(data);
		var latlngbounds = new google.maps.LatLngBounds();
		$.each(data.data, function (i, v) {
			var pos = new google.maps.LatLng(v.Latitude, v.Longitude);
			latlngbounds.extend(pos);

			var bufferMarker = new google.maps.Marker({
				position: pos,
				icon: image,
				title: ''
			});

			var infowindow = new google.maps.InfoWindow({
				content: '<div class="p-1"><span style="font-weight: bold;">Código: </span><br/>&nbsp;&nbsp;&nbsp;&nbsp;' + v.Code + '<br/><span style="font-weight: bold;">Nombre: </span><br/>&nbsp;&nbsp;&nbsp;&nbsp;' + v.Name + '<br/><span style="font-weight: bold;">Dirección: </span><br/>&nbsp;&nbsp;&nbsp;&nbsp;' + v.Address + '<br/><a href="https://www.google.com/maps/search/?api=1&query=' + v.Latitude + ',' + v.Longitude + '" target="_blank">Ver en Google Maps</a></div>'
			});

			bufferMarker.addListener('click', function() {
				infowindow.open(map, bufferMarker);
			});

			bufferMarker.setMap(map);
		});

		setTimeout(function() {
			map.fitBounds(latlngbounds);
		}, 1500);
	});
});