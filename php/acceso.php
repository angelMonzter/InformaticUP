<?php 
//Proceso de conexión con la base de datos
include("conexion.php");
$link=Conectarse();

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$nombre= $_POST['correo'];
$password= $_POST['contraseña'];


//include 'AES.php';
	$consulta= "SELECT * FROM registro WHERE correo='$nombre'"; 

$resultado= mysql_query($consulta,$link) or die (mysql_error());
$fila=mysql_fetch_array($resultado);

$contrabd=$fila[5];
echo $fila[3];
echo $fila[5];

//encryption($password);

if(empty($nombre && $password)){
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../index.html";
	</script>
	<?php
}

//echo $contrabd;
//echo $password;

else{

if($contrabd == $password){
	$_SESSION['nombre'] = $fila['nombre'];
	header("Location: ../inicio.php"); 
	
}
else{
?>
	<script type="text/javascript">
		alert("Datos no validos, Favor de verificar los datos...");
		window.location="../index.html";
	</script>
	<?php	
}
}

?>
