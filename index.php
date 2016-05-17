<?php 
require_once('librerias/conectaBd.php');

$sql = "select * from contacto";

$result = $conn->query($sql);
echo "<h2>Lista de contactos</h2>";
echo "<p><a href='editar.php'>Editar todo</a></p>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Telefono</th>";
echo "<th>Correo</th>";
echo "</tr>";
while ($fila = $result->fetch_array()){
	echo "<tr>";
	echo "<td>".$fila['nombre']."</td>";
	echo "<td>".$fila['telefono']."</td>";
	echo "<td>".$fila['correo']."</td>";
	echo "</tr>";
}
echo "</table>";

echo "</form>";
?>