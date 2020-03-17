<html>
	<head>
		<?php require('titulo.php'); ?>
	</head>
	<body>
	<div class="edit_cont"></div>
		<form method="POST"  action="crear.php" enctype="multipart/form-data">
			<div class="opciones" id="content"  name="formula">
			<h2>Tu nombre de usuario:</h2><br>
			<input type="text" name="nombre"><br><br>
			
			<h2>Tu foto de perfil:</h2><br>
			<input type="file" name="foto"><br><br>
			
			<h2>Tu contraseña:</h2><br>
			<input type="password" name="contra"><br><br>
			
			<h2>confirma la contraseña:</h2><br>
			<input type="password" name="contra2"><br><br>
			
			<?php if(!empty($error)): ?>
			<?php echo $error ?>
			<?php endif; ?>
				<center><input type="submit" name="subir_tema" value="enviar" class="btn-tema"></center>
				<h2>¿Ya tienes cuenta? <a href="login.php">inicia sesión aqui</a></h2>
			</div>
		</form>
	</body>
</html>