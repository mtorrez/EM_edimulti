<?php 
$serv = 'localhost';
$user = 'root';
$pass = '';
$bdat = 'bd_agenda';

$conn = new mysqli($serv, $user, $pass, $bdat);
if ($conn->connect_errno > 0 ) die('Error en conexion a BD');

?>