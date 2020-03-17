<!--ESTA PAGINA FUE CREADA EL 22 A 24 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php 
session_start();
require ('conexion.php');
	$num = $_GET['id'];
	if(empty($num) or $num <= 0){
		header("location:temas.php");
	}
	else{
		$stmt = $conexion->prepare("SELECT * FROM temas WHERE id = $num");
		$stmt2 = $conexion->prepare("SELECT * FROM cuentas WHERE nombre = :nom");
		$stmt->execute();
		if(!empty($_SESSION['usuario'])){
			$stmt2->execute(array(':nom' => $_SESSION['usuario']));
		}
		else{}
		$titulo = $stmt->fetch();
		$rs = $stmt2->fetch();
	}
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
    <div class="container">
      <div class="form">
        <h1>formularios</h1>
        <a href="#"><p class="link">formula 1</p></a>
      </div>
      <div class="post">
        <h1><?php echo $titulo['titulo']; ?></h1>
        <hr>
        <p><?php echo $titulo['contenido']; ?></p>
      </div>
    </div>
	</body>
</html>