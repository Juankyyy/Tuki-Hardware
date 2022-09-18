<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="a/favi3.png" type="image/gif" />
	<link rel="stylesheet" href="css/responsive.css">
	<title>Tuki Registro</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/registerStyle.css">
</head>

<body>
	<a href="index.html"><img class="logo" src="a/logo1.png" /></a>


	<div class="iniciar">
		<h1 class="registrarse">Registrarse</h1>
		<form class="formularioR" name="register" method="POST" action="register.php">
			<hr>
			<h3>Email: <input class="inputsMios" type="email" name="email" required autofocus placeholder="Juanky@example.com"> </h3>
			<h3>Usuario: <input class="inputsMios" type="text" name="usuario" required placeholder="Juanky"> </h3>
			<h3>Contraseña: <input class="inputsMios" type="password" name="contraseña" required placeholder="12345"> </h3>
			<h3>Confirmar Contraseña: <input class="inputsMios" type="password" name="confirmar" required placeholder="12345"> </h3>
			<hr>
			<br>
			<input id="btn" type="submit" name="register" value="Registrarse">
		</form>
		<br>

<?php
	if (isset($_POST['contraseña']) && isset($_POST['confirmar'])) {
		$contraseña = $_POST['contraseña'];
		$confirmar = $_POST['confirmar'];
		if ($contraseña == $confirmar) {
			echo "<span class=validacion>Se ha registrado a Tuki Hardware</span>";
		} else {
			echo "<span class=validacion>Verifique los datos y vuelva a intentar</span>";
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