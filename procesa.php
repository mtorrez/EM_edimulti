<?php 
require_once('librerias/conectaBD.php');

$ncampos = count($_POST)/4;

for ( $i = 0; $i < $ncampos; $i++){
	$id = $_POST['id'.$i];
	$nombre = $_POST['nombre'.$i];
	$telefono = $_POST['telefono'.$i];
	$correo = $_POST['correo'.$i];

	$sql = "update contacto set nombre = '$nombre', telefono='$telefono', correo='$correo' 
		where id='$id'";

	if (!$conn->query($sql)){
		echo "<br>Error en actualización";
	}
}

header('Location: index.php');
?>