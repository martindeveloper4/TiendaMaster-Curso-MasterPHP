<h1>Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register']="Completado"): ?>
	<strong class="alert_green">Registro Completado Correctamente</strong>	
<?php elseif(isset($_SESSION['register']) && $_SESSION['register']="Falled"): ?>
	<strong class="alert_red">Registro fallido</strong>
<?php endif; ?>

<?php Utils::deleteSession('register'); ?>

<form action="<?= base_url ?>usuario/save" method="POST" >
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required />
	<label for="nombre">Apellidos</label>
	<input type="text" name="apellidos" required />
	<label for="email">Email</label>
	<input type="email" name="email" required />
	<label for="password">Password</label>
	<input type="password" name="password" required />

	<input type="submit" value="Registrarse">

</form>