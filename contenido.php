<!--ESTA PAGINA FUE CREADA EL 22 A 24 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php 
session_start();
require ('conexion.php');
	$num = $_GET['id'];
	if(empty($num) or $num <= 0){
		header("location:index.php");
	}
	else{
		$stmt = $conexion->prepare("SELECT * FROM integrales WHERE id = $num");
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
		<?php require('titulo.php'); ?>
	</head>
	<body>
		<?php require('cabecera.php'); ?>
    <div class="container">
      <div class="form">
        <h1>formularios</h1>
        <a href="#"><p class="link">formula 1</p></a><br>
		<a href="#"><p class="link">formula 2</p></a><br>
		<a href="#"><p class="link">formula 3</p></a><br>
      </div>
      <div class="post">
        <h1><?php echo $titulo['titulo']; ?></h1>
        <hr>
        <?php echo $titulo['contenido']; ?>
      </div>
    </div>
	</body>
</html>