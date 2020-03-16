<!--ESTA PAGINA FUE CREADA EL 1 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php 
require ('conexion.php');
	$stmt = $conexion->prepare("SELECT * FROM temas");
	$stmt->execute();
?>
<html>
	<head>
		<title>math lizard</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="nav">
			<ul>
				<a href=""><li>tema 1</li></a>
				<a href=""><li>tema 2</li></a>
				<a href=""><li>tema 3</li></a>
			</ul>
		</div>
    <div class="container-temas">
	
	<?php while($titulo = $stmt->fetch()): ?>
	<div class="tema">
		<img src="banners/<?php echo $titulo['banner'] ?>" class="thumbnail">
		<h1 class="titulo-tema"><?php echo $titulo['titulo']; ?></h1>
		<hr>
		<p class="descripcion-breve"><?php echo $titulo['descripcion']; ?></p>
		<p class="boton-tema"><a href="index.php?<?php echo 'id=' . $titulo['id']; ?>">Entrar</a></p>
	</div>
	<?php endwhile; ?>
    </div>
	</body>
</html>