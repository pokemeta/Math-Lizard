<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header("location:index.php");
	}
	require ('conexion.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usr = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
		$pas1 = $_POST['contra'];
		$pas2 = $_POST['contra2'];

		$error = '';

		$pfp_nomb = $_FILES['foto']['name'];
		$pfp_tempo =  $_FILES['foto']['tmp_name'];
		$dir = 'pfps/' . $pfp_nomb;

		if(empty($usr) or empty($pas1) or empty($pas2) or empty($pfp_nomb) or empty($pfp_tempo) or empty($dir)){
			$error .= '<p class="error_cuenta">Por favor rellena los datos correctamente</p><br><br>';
		}
		else{
			$stmn = $conexion->prepare("SELECT * FROM cuentas WHERE nombre = :usuario LIMIT 1");
			$stmn->execute(array(':usuario' => $usr));
			$res = $stmn->fetch();

			if($res != false){
				$error .= '<p class="error_cuenta">El nombre de usuario ya existe</p><br><br>';
			}

			$pas1 = hash('sha512', $pas1);
			$pas2 = hash('sha512', $pas2);

			if($pas1 != $pas2){
				$error .= '<p class="error_cuenta">Las contraseñas no son iguales</p><br><br>';
			}
		}

		if($error == ''){
			$ins = $conexion->prepare("INSERT INTO cuentas(id, nombre, password, perfil, rol) VALUES(null, :usuario, :contra, :foto, 'normal')");
			move_uploaded_file($pfp_tempo, $dir);
			$ins->execute(array(':usuario' => $usr, ':contra' => $pas1, ':foto' => $pfp_nomb));

			header('location:index.php');
		}

	}
	require('crearcuentas.view.php');
?>
