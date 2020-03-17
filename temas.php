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
				<?php if(!empty($_SESSION['usuario'])): ?>
				<a href="config.php"><li><?php echo $_SESSION['usuario']; ?>&nbsp;<img class="pfp"src="pfps/<?php echo $rs['perfil']; ?>"></li></a>
				<?php endif; ?>
				<?php if(empty($_SESSION['usuario'])): ?>
				<a href="login.php"><li>iniciar sesion</li></a>
				<?php endif; ?>
			</ul>
		</div>
    <div class="container-temas">
	
	<?php while($titulo = $stmt->fetch()): ?>
	<div class="tema">
		<img src="banners/<?php echo $titulo['banner']; ?>" class="thumbnail">
		<h1 class="titulo-tema"><?php echo $titulo['titulo']; ?></h1>
		<hr>
		<p class="descripcion-breve"><?php echo $titulo['descripcion']; ?></p>
		<p class="boton-tema"><a href="index.php?<?php echo 'id=' . $titulo['id']; ?>">Entrar</a></p>
	</div>
	<?php endwhile; ?>
    </div>
	</body>
</html>