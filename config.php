<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header("location:index.php");
	}
	require('conexion.php');

	$pfp = $conexion->prepare("SELECT * FROM cuentas WHERE nombre = :nomb");
	$pfp->execute(array(':nomb' => $_SESSION['usuario']));
	$resul = $pfp->fetch();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$cmp_usr = filter_var(strtolower($_POST['compr_nombre']), FILTER_SANITIZE_STRING);
		$cmp_pass = $_POST['compr_contra'];

		$error = '';

		$cmp_foto = $_FILES['compr_foto']['name'];
		$cmp_foto_tmp = $_FILES['compr_foto']['tmp_name'];
		$cmp_dir = 'pfps/' . $cmp_foto;

		if($cmp_usr == $resul['nombre']){
			$error .= '<p class="error_cuenta">El nombre no puede ser igual.</p><br><br>';
		}

		if($cmp_pass == $resul['password']){
			$error .= '<p class="error_cuenta">La contraseña no puede ser igual.</p><br><br>';
		}
		else if(empty($cmp_pass)){
			$error .= '<p class="error_cuenta">El espacio de la contraseña esta vacia.</p><br><br>';
		}

		if($cmp_foto == $resul['perfil']){
			$error .= '<p class="error_cuenta">No puedes usar la misma foto.</p><br><br>';
		}
		else if(empty($cmp_foto)){
			$error .= '<p class="error_cuenta">El espacio de la foto esta vacia.</p><br><br>';
		}

		if($error == ''){
			$cmp_pass = hash('sha512', $cmp_pass);
			$exsql = $conexion->prepare("UPDATE cuentas SET nombre = :nom, password = :pas, perfil = :fot");
			$exsql->execute(array(":nom" => $cmp_usr, ":pas" => $cmp_pass, ":fot" => $cmp_foto));
			move_uploaded_file($cmp_foto_tmp, $cmp_dir);
			header("cierre.php");
		}

		if(isset($_POST['cerrar'])){
			session_destroy();
			header("location:cierre.php");
		}
	}
	require('config.view.php');
 ?>
