<!--ESTA PAGINA FUE CREADA EL 22 A 24 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php
	require ('conexion.php');
	$titulo = $_POST['titulo_tema'];
	$desc = $_POST['descripcion'];
	$textVal = '';

	$nomb = $_FILES['banner']['name'];
	$tempo =  $_FILES['banner']['tmp_name'];
	$dir = 'banners/' . $nomb;

	foreach($_POST['cont'] as $texto){
		$textVal .= '<p class="texto-siz">' . $texto . '</p>' . '\n\n';
	}
	$consulta = $conexion->prepare("INSERT INTO integrales(titulo, contenido, banner, descripcion)
		VALUES('$titulo', '$textVal', '$nomb', '$desc');");
	if(empty($titulo) or empty($texto) or empty($desc)){
		header('location:insertar.php');
		}
		else {
		move_uploaded_file($tempo, $dir);
		$consulta->execute();
		header('location:index.php');
	}


?>
