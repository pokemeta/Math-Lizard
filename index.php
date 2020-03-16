<!--ESTA PAGINA FUE CREADA EL 22 A 24 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php 

require ('conexion.php');
	$num = $_GET['id'];
	$stmt = $conexion->prepare("SELECT * FROM temas WHERE id = $num");
	$stmt->execute();
	$titulo = $stmt->fetch();
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