<h1>Crear Nueva Categoria</h1>


<form action="<?=base_url ?>categoria/save" method="POST" accept-charset="utf-8">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required="" />	
	<input type="submit" value="Guardar" />	
</form>