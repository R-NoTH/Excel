<?php
require_once ('conexion.php');

$query ="SELECT * FROM excel" ;
$sentencia=$conexion->query($query);
$registros=$sentencia->fetch_all(MYSQLI_ASSOC);
// print_r($registros);
?>