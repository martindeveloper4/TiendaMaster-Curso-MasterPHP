		
		<h1>Algunos de nuestros Productos</h1>
		<?php while($pro = $productos->fetch_object()): ?>	
			<div class="product">
				<a href="<?=base_url ?>producto/ver&id=<?=$pro->id ?>">
					<img src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>"  alt="">
					<h2><?= $pro->nombre ?></h2>
				</a>
				<p><?= $pro->precio	 ?></p>
				<a href="<?=base_url ?>carrito/add&id=<?=$pro->id ?>" class="button">Comprar</a>
			</div>
		<?php endwhile; ?>	


