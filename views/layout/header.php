<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tiendea de Camisetas</title>
	<link rel="stylesheet" href="<?=base_url ?>assets/css/styles.css">
</head>
<body>
	<div id="container">
			
		
	<!-- CABECERA -->
	<header id="header" class="">
		<div id="logo">
			<img src="<?=base_url ?>assets/img/camiseta.png" alt="Camiseta Logo">
			<a href="index.php" title="">
				Tienda de Camisetas
			</a>
		</div>
	</header>
	<!-- MENU -->
	<?php $categorias = Utils::showCategorias(); ?>
	<nav id="menu">
		<ul>
			<li>
				<a href="<?= base_url ?>" title="">Inicio</a>
			</li>
			<?php while($cat = $categorias->fetch_object()): ?>
			<li>
				<a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>" title=""><?=$cat->nombre ?></a>
			</li>
			<?php endwhile; ?>
			
		</ul>
	</nav>

	<div id="content">