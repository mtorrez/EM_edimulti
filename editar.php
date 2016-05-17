<?php 
require_once('librerias/conectaBd.php');

$sql = "select * from contacto";

$result = $conn->query($sql);
echo "<h2>Edicion en linea</h2>";
echo "<form action='edicion.php' method='post'>";
echo "<table >";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Telefono</th>";
echo "<th>Correo</th>";
echo "</tr>";
$i = 0;
while ($fila = $result->fetch_array()){
	$id = $fila["id"];
	$nombre = $fila["nombre"];
	$telefono = $fila["telefono"];
	$correo = $fila["correo"];
	echo "<input type='hidden' name='id$i' value='$id'>";
	echo "<tr style='background-color:yellow'>";
	echo "<td><input type='text' name='nombre$i' value='$nombre'></td>";
	echo "<td><input type='text' name='telefono$i' value='$telefono'></td>";
	echo "<td><input type='text' name='correo$i' value='$correo'></td>";
	echo "</tr>";
	$i++;
}
echo "</table>";
echo "<input type='submit' value='Grabar'>";

echo "</form>";
?>