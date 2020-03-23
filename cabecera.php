<header>
	<meta charset="UTF-8"/>
	<div class="logo">Math Lizard</div>
	<div class="active"></div>
		<nav>
			<ul>
				<li><a href="#">tema 1</a></li>
				<li><a href="#">tema 2</a></li>
				<?php if(!empty($_SESSION['usuario'])): ?>
					<li><a href="config.php"><?php echo $_SESSION['usuario']; ?>&nbsp;<img class="pfp"src="pfps/<?php echo $rs['perfil']; ?>"></a></li>
				<?php endif; ?>
				<?php if(empty($_SESSION['usuario'])): ?>
					<li><a href="login.php">iniciar sesion</a></li>
				<?php endif; ?>
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
