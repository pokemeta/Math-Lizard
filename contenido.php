<!--ESTA PAGINA FUE CREADA EL 22 A 24 DE JUNIO DEL AÑO 2019, SE ADAPTO PARA MOVILES EL 22 DE MAYO DEL AÑO 2019-->
<!--versión 0.40 de mathlizard-->
<?php 
session_start();
require ('conexion.php');
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

    <div class="container">
      <div class="form">
        <h1>formularios</h1>
        <a href="#"><p class="link">formula 1</p></a><br>
		<a href="#"><p class="link">formula 2</p></a><br>
		<a href="#"><p class="link">formula 3</p></a><br>
      </div>
      <div class="post">
        <h1>lorem ipsum</h1>
        <hr>
        <p class="texto-siz">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tortor mi. Vivamus ullamcorper diam vel ligula bibendum,
		vel blandit augue commodo. Pellentesque a commodo velit. Morbi ipsum ante, ornare sed nisi sit amet, tincidunt mattis dolor. Mauris elit leo,
		ullamcorper et eros ac, suscipit ornare tortor. Aenean congue urna eget enim ultrices sodales. Nulla orci erat, pulvinar et neque non, vestibulum condimentum turpis.
		Vivamus ut tincidunt nibh. Nulla efficitur porttitor tortor at aliquet. Morbi varius lorem eros, eu malesuada nisl faucibus eu.
		<br><br>
		Aliquam lacinia fermentum est scelerisque dignissim. Integer luctus, arcu non luctus scelerisque, elit nisi blandit augue, et vestibulum tellus
		ligula pharetra nulla. Duis cursus libero libero, ut convallis augue luctus id. Integer ut consequat magna. Nam venenatis maximus odio, sed ornare ipsum. Curabitur
		a molestie magna. Suspendisse aliquet vel lacus eget scelerisque. Integer augue ipsum, eleifend non ex cursus, varius auctor velit. Ut et nisl vitae nibh malesuada
		ullamcorper vitae a lacus. Fusce sodales finibus lorem sit amet feugiat.</p>
      </div>
    </div>
	</body>
</html>