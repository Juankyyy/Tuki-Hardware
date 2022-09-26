<?php 
	session_start();
	include_once './conn.php';
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$sentencia = $bd->prepare('select * from clientes where 
								nombre = ? and correo = ? and contraseña = ?;');
	$sentencia->execute([$nombre, $correo, $contraseña]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->nombre;
		header('Location: index.php');
	}
?>