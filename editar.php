<?php

require_once 'conexion.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$description=$_POST['description'];

$inser = "UPDATE excel SET id='$id',nombre='$nombre',description='$description' WHERE id=$id;";
$query = mysqli_query($conexion,$inser);
if ($query) {
    echo '<script> 
    alert("guardado Correctamente");
    location.href = "listadoi.php";
     </script>';
}

?>