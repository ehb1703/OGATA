<?php
	$serverName = "localhost\COMPAC";
	$connectionInfo = array("Database"=>"adOSESADM", "UID"=>"sa", "PWD"=>"Naranja2008.", "CharacterSet"=>"UTF-8");
	$conexion = sqlsrv_connect($serverName, $connectionInfo);

	if($conexion){
		echo "conexion exitosa.\n";
	}else{
		echo "fallo en la conexión";
	}

?>
