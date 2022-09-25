<?php  
	$pwd = '';
	$user = 'root';
	$dbname= 'tukidb';

	try {
		$bd = new PDO(
			'mysql:host=localhost;
			dbname='.$dbname,
			$user,
			$pwd,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>