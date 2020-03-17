<html>
	<head>
		<title>math lizard</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<div class="edit_cont"></div>
		<form method="POST"  action="login.php" enctype="multipart/form-data">
			<div class="opciones" id="content"  name="formula">
			<h2>Tu nombre de usuario:</h2><br>
			<input type="text" name="nombre"><br><br>
			
			<h2>Tu contraseña:</h2><br>
			<input type="password" name="contra"><br><br>
			
			<?php if(!empty($error)): ?>
			<?php echo $error ?>
			<?php endif; ?>
				<center><input type="submit" name="subir_tema" value="enviar" class="btn-tema"></center>
				<h2>¿No tienes cuenta? <a href="crear.php">crea una aqui</a></h2>
			</div>
		</form>
	</body>
</html>