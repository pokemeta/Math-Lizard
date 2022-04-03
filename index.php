<!--ESTA PAGINA FUE CREADA EL 1 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		require ('conexion.php');
		$pfp = $conexion->prepare("SELECT * FROM cuentas WHERE nombre = :nomb");
		$pfp->execute(array(':nomb' => $_SESSION['usuario']));
		$rs = $pfp->fetch();
	}
	require ('conexion.php');
	$stmt = $conexion->prepare("SELECT * FROM integrales");
	$stmt->execute();
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>math lizard</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
		<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
	</head>
	<body>
		<header>
			<div class="logo">Math Lizard</div>
			<div class="active"></div>
				<nav>
					<ul>
						<li><a href="#">tema 1</a></li>
						<li><a href="#">tema 2</a></li>
						<li><a href="config.php">usuario cualquiera&nbsp;<img class="pfp"src="pfps/lizard-icon-simple-style-vector-9672733.jpg"></a></li>
						<li><a href="login.php">iniciar sesion</a></li>
					</ul>
				</nav>
			<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</header>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.menu-toggle').click(function(){
				$('nav').toggleClass('active')
			})
		})
	</script>


		<div class="container-temas">
			<div class="tema">
				<img src="banners/variable.png" class="thumbnail">
				<h1 class="titulo-tema">lorem ipsum</h1>
				<hr>
				<p class="descripcion-breve">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<div class="boton-tema"><a href="contenido.php">Entrar</a></div>
			</div>
			<div class="icon-plus">
				<div class="ico">
					<a href="insertar_integ.php"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</body>
</html>
