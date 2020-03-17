<html>
	<head>
		<?php require('titulo.php'); ?>
	</head>
	<body>
	<div class="edit_cont"></div>
		<form method="POST"  action="config.php" enctype="multipart/form-data">
			<div class="opciones" id="content"  name="formula">
			<h2>Tu foto de perfil:</h2><br>
			<center><img width="250" height="250" src="pfps/<?php echo $resul['perfil']; ?>"></center><br>
			<input type="file" name="compr_foto"><br><br>
			
			<h2>Tu nombre de usuario:</h2><br>
			<input type="text" name="compr_nombre" value="<?php echo $resul['nombre']; ?>"><br><br>
			
			<h2>Tu contraseña:</h2><br>
			<input type="password" name="compr_contra"><br><br>
			<?php if(!empty($error)): ?>
			<?php echo $error ?>
			<?php endif; ?>
				<center><input type="submit" name="subir_tema" value="enviar" class="btn-tema"></center>
				<center><input type="submit" name="cerrar" value="cerrar sesión" class="btn-tema"></center>
			</div>
		</form>
	</body>
</html>