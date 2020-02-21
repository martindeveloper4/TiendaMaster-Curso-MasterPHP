<h1>Gestionar Productos</h1>


<a href="<?=base_url  ?>producto/crear" class="button button-small">
	Crear Producto
</a>
<?php if(isset($_SESSION['producto']) && $_SESSION['producto']='completed'): ?>
	<strong class="alert_green">El producto se agregado correctamente</strong><br>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto']='falled'): ?>	
	<strong class="alert_red">El producto no se agregado correctamente</strong><br>	
<?php endif; ?>	
<?php Utils::deleteSession('producto'); ?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete']='complete'): ?>
	<strong class="alert_green">El producto se ha borrado correctamente</strong><br>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete']='falled'): ?>	
	<strong class="alert_red">El producto no se borrado correctamente</strong><br>	
<?php endif; ?>	
<?php Utils::deleteSession('delete'); ?>
<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>DESCRIPCION</th>
		<th>PRECIO</th>
		<th>STOCK</th>
		<th>ACCIONES</th>
	</tr>
	<?php while($pro = $productos->fetch_object()): ?>
	<tr>
		<td><?= $pro->id;  ?></td>
	    <td><?= $pro->nombre;  ?></td>
	    <td><?= $pro->descripcion;  ?></td>
	    <td><?= $pro->precio;  ?></td>
	    <td><?= $pro->stock;  ?></td>
	    <td>
	    	<a href="<?=base_url ?>producto/editar&id=<?php echo $pro->id ?>" class="button button-gestion">Editar</a>
	    	<a href="<?=base_url ?>producto/eliminar&id=<?php echo $pro->id ?>" class="button button-gestion button-red">Eliminar</a>
	    </td>

	</tr>
	<?php endwhile; ?>
</table>

