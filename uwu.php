<?php 
	session_start();
	include_once './conn.php';
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$sentencia = $bd->prepare('select * from clientes where 
								correo = ? and contraseña = ?;');
	$sentencia->execute([$correo, $contraseña]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.html');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['correo'] = $datos->correos;
		header('Location: index.html');
	}
?>