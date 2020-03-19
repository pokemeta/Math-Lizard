<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header("location:temas.php");
	}
	require('conexion.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usr = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
		$pass = $_POST['contra'];
		$pass = hash('sha512', $pass);

		$error = '';

		$stm = $conexion->prepare('SELECT * FROM cuentas WHERE nombre = :usuario AND password = :contra');
		$stm->execute(array(':usuario' => $usr, ':contra' => $pass));

		$resul = $stm->fetch();
		if($resul != false){
			$_SESSION['usuario'] = $usr;
			header("location:index.php");
		}
		else{
			$error .= '<p class="error_cuenta">Los datos son incorrectos</p><br><br>';
		}
	}
	require('login.view.php');
 ?>
