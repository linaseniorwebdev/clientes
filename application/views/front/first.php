<div class="login-box ptb--100">
	<form action="<?php echo base_url('front/first/' . $token); ?>" method="post">
		<div class="login-form-head">
			<h4>Configurar</h4>
			<p>Completar su cuenta rellenando este formulario.</p>
		</div>
		<p class="mt-3 text-center">Su dirección de correo electrónico es <?php echo $user['Email']; ?></p>
		<div class="login-form-body pt-20">
			<div class="form-gp">
				<label for="exampleInputName1">Nombre de usuario</label>
				<input type="text" id="exampleInputName1" name="User" />
				<i class="ti-user"></i>
			</div>
			<div class="form-gp">
				<label for="exampleInputPassword1">Contraseña</label>
				<input type="password" id="exampleInputPassword1" name="Pass" />
				<i class="ti-lock"></i>
			</div>
			<div class="form-gp">
				<label for="exampleInputPassword2">Confirmar contraseña</label>
				<input type="password" id="exampleInputPassword2" />
				<i class="ti-lock"></i>
			</div>
			<div class="submit-btn-area">
				<input type="hidden" value="" name="IP" />
				<button id="form_submit" type="button">Enviar <i class="ti-arrow-right"></i></button>
			</div>
		</div>
	</form>
</div>