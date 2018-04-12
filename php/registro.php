<?php

include("conexion.php");
Conectarse();
// variables
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$contrasena2=$_POST['contrasena2'];
$edad=$_POST['edad'];
$especialidad=$_POST['especialidad'];
$github=$_POST['git'];

echo $nombre;


//$encrip=password_hash($contrasena,PASSWORD_DEFAULT);
if (empty($nombre && $apellido && $correo && $contrasena && $contrasena2 && $edad && $especialidad && $github)) {
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../index.html";
	</script>
	<?php
}else{


	if ($contrasena == $contrasena2) {
$sql="INSERT INTO registro VALUES(NULL,'$nombre', '$apellido', '$correo', '$edad', '$contrasena','1','$github')";
$ejecutar=mysql_query($sql);
if(!$ejecutar){
	echo "error";
}else{
	echo "datos guadardos..";
}
	//$consulta=mysql_query("INSERT INTO registro (`nombre`, `apellido`, `correo`, `edad`, `contraseña`, `especialidad`, `github`) values ('$nombre', '$apellido', '$correo', '$edad', '$contrasena','1','$github')",$link) or die (mysql_error($consulta));

	?>
<body>
		<script type="text/javascript">
		
		alert("Se ha registrado con exito, inicia sesión...");
		window.location="../index.html";
		</script>
</body>

	<?php

}else{	
	?>
	<script type="text/javascript">
		alert("Contraseña o llave incorrectas favor de corregir");
		window.location="../index.html";
	</script>
	<?php
}
}

mysql_close($conex);


?>
