<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
	<h1>Tu pedido se ha confirmado</h1>
	<p>
		Tu pedido ha sido guardado con exito, una vez que realizes la transferencia bancaria  a la cuenta 
		Nº 9887553356877 con el
		coste del pedido sera procesado y enviado.
	</p>
	<br/>
	<?php if(isset($pedido)): ?>
		<h3>Datos del pedido</h3>
			Numero del pedido: S/ <?= $pedido->id  ?> <br>
			Total a pagar:  <?= $pedido->coste  ?>	<br>
			Productos: 
			<table>
					<tr>
						<th>Imagen</th>
						<th>Nombre</th>
						<th>precio</th>
						<th>Unidades</th>
					</tr>
				<?php while($producto = $productos->fetch_object()): ?>
					<tr>
						<td><?php if($producto->imagen != null): ?>
							<img src="<?=base_url ?>uploads/images/<?=$producto->imagen ?>" alt="" class="img_carrito" />
							<?php else: ?>
								<img src="<?=base_url ?>assets/img/camiseta.png" alt="" class="img_carrito" />
							<?php endif; ?>
						</td>
						<td>
							<a href="<?=base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
						</td>
						<td>
							<?= $producto->precio ?>
						</td>
						<td>
							<?= $producto->unidades ?>
						</td>

					</tr>
				<?php endwhile; ?>
			</table>
	<?php endif; ?>

<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
	<h1>Tu pedido no puede procesarce</h1>
<?php endif; ?>	
