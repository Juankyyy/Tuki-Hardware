<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="a/favi3.png" type="image/gif"/>
	<link rel="stylesheet" href="css/responsive.css">
	<title>Tuki Login</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/registerStyle.css">
</head>

<body>
<nav>
	<div class="atrasR">
		<a href="index.php" id="logo"><img src="a/logo1.png"></img></a>
		<div class=" sign_btn">
			<a id="atrasbtn" href="register.php">Registrarse</a>
		</div>
	</div>
</nav>

<br>

	<div class="iniciar">
		<h1 class="login">Iniciar Sesión</h1>
		<form class="formularioR" name="login" method="POST">
			<hr>
			<h3>Email: <input class="inputsMios" type="email" name="email" required autofocus placeholder="Juanky@example.com"> </h3>
			<h3>Contraseña: <input class="inputsMios" type="password" name="contraseña" required placeholder="12345"> </h3> <hr> <br>
			<input id="btn" type="submit" name="login" value="Iniciar Sesión">
		</form>
		<br>

<?php
	if (isset($_POST['contraseña'])) {
		$contraseña = $_POST['contraseña'];
		if ($contraseña == "rafa123") {
			echo "<span class=validacion>Iniciaste sesión</span>";
		} else {
			echo "<span class=validacion>Vuelve a intentarlo</span>";
		}
	}
?>
<br>

<footer>
	<div class="abajo">
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>© Tuki Hardware 2022 Todos los derechos reservados</a><a href="a/tuki.jpg" target="_blank">tuki</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</body>
</html>