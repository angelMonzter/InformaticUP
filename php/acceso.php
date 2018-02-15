<?php 
//Proceso de conexión con la base de datos
include("conexion.php");
$link=conectar();

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$nombre= $_POST['usuario'];
$password= $_POST['contrasena'];
//include 'AES.php';

//$contra=SED::encryption($password);

$consulta=mysql_query("SELECT usuario, contrasena FROM registro WHERE usuario = '".$nombre."'");
$fila = mysql_fetch_row($consulta);
$contrabd=$fila[1];
$user=$fila[0];
global $user; 
//echo $contrabd;
//echo $password;

if(empty($nombre && $password)){
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../sistem-sesion.html";
	</script>
	<?php
}else{
if($contrabd == $password){
	$_SESSION['nombre'] = $fila['nombre'];
	header("Location: ../sistem-pedido.html"); 
	
}
else{
?>
	<script type="text/javascript">
		alert("Datos no validos, Favor de verificar los datos...");
		window.location="../sistem-sesion.html";
	</script>
	<?php	
}
}
	?>
<body>
	$usuariog=$nombre;
	<a href="php/pedido.php/?usuariog=<?php echo $usuariog?>"> </a>
</body>
	<?php

?>
