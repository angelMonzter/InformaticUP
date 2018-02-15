<?php 

	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	
	mail('floreria-antohan@flanha.xyz', $asunto, $mensaje);
	
 ?>
