<?php 
include("conexion.php");
Conectarse();

$titulo=$_POST['titulo'];
$link=$_POST['link'];
$descripcion=$_POST['descripcion'];

if(empty($titulo || $link || $descripcion)){
	?>
	<script type="text/javascript">
		alert("Favor de llenar los campos...");
		window.location="../perfil.php";
	</script>
	<?php
}else{
	$sql="INSERT INTO vinculo VALUES (NULL, '$titulo', '$link', '$descripcion')";
	$insertar= mysql_query($sql);

	if(!$insertar){
		?>
		<script type="text/javascript">
			alert("Algo salio mal...");
			window.location="../perfil.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Post completo...");
			window.location="../perfil.php";
		</script>
		<?php
	}
}

 ?>