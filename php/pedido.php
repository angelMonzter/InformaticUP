<?php

include("conexion.php");
conectar();
// variables
$nombre= $_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$detallesd=$_POST['detallesd'];
$detallesp=$_POST['detallesp'];
$unidades=$_POST['unidades'];
$costo=$_POST['costo'];
$total=$_POST['total'];
$fecha=$_POST['fecha'];


//$encrip=password_hash($contrasena,PASSWORD_DEFAULT);
if (empty($nombre && $correo && $telefono && $direccion && $total && $costo && $detallesd && $detallesp && $unidades && $fecha)) {
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../sistem-pedido.html";
	</script>
	<?php
}else{
//include 'AES.php';
 //$contra=SED:: encryption($contrasena);

	$consulta=mysql_query("INSERT INTO pedido (`id_pedido`, `id_registro`, `nombre`, `correo`, `telefono`, `direccion`, `detallesd`, `detallesp`, `unidades`, `costo`, `total`, `fecha`) values (NULL, '1', '$nombre', '$correo', '$telefono', '$direccion', '$detallesd', '$detallesp', '$unidades', '$costo', '$total', '$fecha')", $conex) or die(mysql_error($consulta));
	?>
<body>
		<script type="text/javascript">
		
		alert("Se ha registrado con exito...");
		window.location="../sistem-pedido.html";
		</script>
</body>

	<?php

}
mysql_close($conex);
?>