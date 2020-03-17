<!--ESTA PAGINA FUE CREADA EL 1 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		require ('conexion.php');
		$pfp = $conexion->prepare("SELECT * FROM cuentas WHERE nombre = :nomb");
		$pfp->execute(array(':nomb' => $_SESSION['usuario']));
		$rs = $pfp->fetch();
	}
	require ('conexion.php');
	$stmt = $conexion->prepare("SELECT * FROM integrales");
	$stmt->execute();
?>
<html>
	<head>
		<?php require('titulo.php'); ?>
	</head>
	<body>
	<?php require('cabecera.php'); ?>
    <div class="container-temas">
	
	<?php while($titulo = $stmt->fetch()): ?>
	<div class="tema">
		<img src="banners/<?php echo $titulo['banner']; ?>" class="thumbnail">
		<h1 class="titulo-tema"><?php echo $titulo['titulo']; ?></h1>
		<hr>
		<p class="descripcion-breve"><?php echo $titulo['descripcion']; ?></p>
		<div class="boton-tema"><a href="contenido.php?<?php echo 'id=' . $titulo['id']; ?>">Entrar</a></div>
	</div>
	<?php endwhile; ?>
	
	<?php if(!empty($_SESSION['usuario'])): ?>
		<?php if($rs['rol'] == "admin"): ?>
		<div class="icon-plus">
			<div class="ico">
				<a href="insertar_integ.php"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
			</div>
		</div>
		<?php endif; ?>
	<?php endif; ?>
    </div>
	</body>
</html>