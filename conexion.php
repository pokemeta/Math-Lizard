<!--ESTA PAGINA FUE CREADA EL 22 A 24 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php 

try{
	$conexion = new PDO('mysql:host=localhost;dbname=mathlizard', 'root', '');
}
catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
	die();
}
?>