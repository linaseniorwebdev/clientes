<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>INICIAR SESIÓN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<link rel="shortcut icon" type="image/png" href="public/assets/images/icon/favicon.ico">-->
	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/assets/css/themify-icons.css">
	<link rel="stylesheet" href="public/assets/css/metisMenu.css">
	<link rel="stylesheet" href="public/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/assets/css/slicknav.min.css">
	<link rel="stylesheet" href="public/assets/css/typography.css">
	<link rel="stylesheet" href="public/assets/css/default-css.css">
	<link rel="stylesheet" href="public/assets/css/styles.css">
	<link rel="stylesheet" href="public/assets/css/responsive.css">
	<link rel="stylesheet" href="public/vendors/sweetalert/sweetalert.css">
	<script src="public/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<div id="preloader">
	<div class="loader"></div>
</div>

<div class="login-area">
	<div class="container">
		<div class="login-box ptb--100">
			<form action="<?php echo base_url('member/login'); ?>" method="post">
				<div class="login-form-head">
					<h4>iniciar sesión</h4>
				</div>
				<div class="login-form-body">
					<div class="form-gp <?php if (isset($username)) echo 'focused'; ?>">
						<label>Nombre/Email</label>
						<input name="username" value="<?php if (isset($username)) echo $username; ?>" />
						<i class="ti-user"></i>
					</div>
					<div class="form-gp <?php if (isset($password)) echo 'focused'; ?>">
						<label>Contraseña</label>
						<input type="password" name="password" value="<?php if (isset($password)) echo $password; ?>" />
						<i class="ti-lock"></i>
					</div>
					<div class="row mb-4 rmber-area">
						<div class="col-6">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" name="remember" id="remember" <?php if (isset($remember)) echo 'checked'; ?> />
								<label class="custom-control-label" for="remember">Recuérdame</label>
							</div>
						</div>
						<div class="col-6 text-right">
							<a href="#">Olvidó su contraseña?</a>
						</div>
					</div>
					<div class="submit-btn-area">
						<button id="form_submit" type="submit">Iniciar sesión <i class="ti-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="public/assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="public/assets/js/popper.min.js"></script>
<script src="public/assets/js/bootstrap.min.js"></script>
<script src="public/assets/js/owl.carousel.min.js"></script>
<script src="public/assets/js/metisMenu.min.js"></script>
<script src="public/assets/js/jquery.slimscroll.min.js"></script>
<script src="public/assets/js/jquery.slicknav.min.js"></script>
<script src="public/vendors/sweetalert/sweetalert.min.js"></script>

<script src="public/assets/js/plugins.js"></script>
<script src="public/assets/js/scripts.js"></script>
<script>
	$(document).ready(function() {
		<?php
		if (isset($reason)) {
			if ($reason == 'password')
				echo 'swal("Advertencia", "Contraseña incorrecta", "warning");';
			elseif ($reason == 'nouser')
				echo 'swal("Advertencia", "Usuario no identificado", "warning");';
		}
		?>
	});
</script>
</body>

</html>