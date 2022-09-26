<?php  
	$host = 'bbmywt3zp4kvns81iguk-mysql.services.clever-cloud.com';
	$pwd = 'uScjKxlBoydngFgNdvIc';
	$user = 'ungrwtiy2fgsh7ko';
	$dbName= 'bbmywt3zp4kvns81iguk';

	try {
		$bd = new PDO(
			'mysql:host=' . $host . ';
			dbname='.$dbName,
			$user,
			$pwd,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>