<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Error 404</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/assets/css/default-css.css">
	<link rel="stylesheet" href="public/assets/css/styles.css">
	<link rel="stylesheet" href="public/assets/css/responsive.css">
</head>

<body>
<div id="preloader">
	<div class="loader"></div>
</div>
<div class="error-area ptb--100 text-center">
	<div class="container">
		<div class="error-content">
			<h2>404</h2>
			<p>Huy! Algo salió mal</p>
			<a href="<?php echo base_url(); ?>">Ir a la primera pagina</a>
		</div>
	</div>
</div>
<script src="public/assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="public/assets/js/bootstrap.min.js"></script>
<script>
	(function($) {
		"use strict";

		var preloader = $('#preloader');
		$(window).on('load', function() {
			preloader.fadeOut('slow', function() { $(this).remove(); });
		});
	})(jQuery);
</script>
</body>

</html>