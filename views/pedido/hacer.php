<?php if(isset($_SESSION['identity'])): ?>
	<h1>Hacer pedido</h1>
	<p>
		<a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
	</p>
	<br>
	<h3>Direccion para el envio</h3>
	<form action="<?= base_url ?>pedido/add" method="POST" accept-charset="utf-8">
		<label for="provincia">Provincia: </label>
		<input type="text" name="provincia" />
		<label for="localidad">Localidad: </label>
		<input type="text" name="localidad" />
		<label for="direccion">Direccion: </label>
		<input type="text" name="direccion" />

		<input type="submit" value="Confirmar Pedido">
	</form>

<?php else: ?>
	<h1>Necesitas estar identificado</h1>
	<p>Necesitas estar logueado en la web para hacer tu pedido</p>	
<?php endif; ?>