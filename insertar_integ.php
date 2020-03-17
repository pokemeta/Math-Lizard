<!--ESTA PAGINA FUE CREADA EL 22 A 24 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php
	session_start();
	require('conexion.php');
	$adrol = $conexion->prepare("SELECT * FROM cuentas WHERE nombre = :nom");
	$adrol->execute(array(':nom' => $_SESSION['usuario']));
	$res = $adrol->fetch();
	if($res['rol'] == 'normal' or empty($_SESSION['usuario'])){
		header("location:temas_integrales.php");
	}
	else{}
?>
<html>
	<head>
		<?php require('titulo.php'); ?>
	</head>
	<body>
	<div class="edit_cont"></div>
		<form method="POST"  action="carga.php" enctype="multipart/form-data">
			<div class="opciones" id="content"  name="formula">
				<center><h1>INTEGRALES</h1></center>
				<h2>titulo: </h2><input type="text" name="titulo_tema"><br><br><br>
				<input type="file" name="banner"><br><br><br>
				<h2>descripcion: </h2><textarea name="descripcion" class="tema_texto"></textarea><br><br>
				<h2>contenido: </h2><textarea id="prueba" name="cont[]" class="tema_texto"></textarea><br><br>
				
				<center><input type="submit" name="subir_tema" value="enviar" class="btn-tema"></center>
				<center><input type="button" id="btn2" name="test" value="insertar imagen" class="btn-tema"></center>
				<center><input type="button" id="btn3" onclick="addfield()" name="tema" value="insertar parrafo" class="btn-tema"></center>
				<center><input type="button" id="btn4" onclick="addtitulo()" name="titulobtn" value="insertar titulo" class="btn-tema"></center>
				<script type="text/javascript">
					document.getElementById("btn2").addEventListener('click', function ()
					{ //esto hace que se active lo que ocurrira en el metodo al presionar el boton
						var text = document.getElementById('prueba'); //la variable de text es el contenido del formulario
						text.value += '<br><br><img src="banners/escribe aqui el nombre del archivo.formato de la imagen" width="300" height="500">'; //aqui añade en el valor del textarea el string de la imagen
					});
					function addfield(){
						var formid = document.getElementById("content");
						var input = document.createElement("textarea");
						input.id = "prueba";
						input.name = "cont[]";
						input.setAttribute("class", "tema_texto");
						formid.appendChild(document.createElement("br"));
						formid.appendChild(input);
						formid.appendChild(document.createElement("br"));
					}
					function addtitulo() {
						var formid = document.getElementById("content");
						var input = document.createElement("input");
						input.id = "prueba";
						input.name = "cont[]";
						input.value = "<h3>INSERTAR TITULO</h3><hr>"
						input.setAttribute("class", "subtitulo_texto");
						formid.appendChild(document.createElement("br"));
						formid.appendChild(input);
						formid.appendChild(document.createElement("br"));
					}
				</script>
			</div>
		</form>
	</body>
</html>