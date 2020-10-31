<?php

require_once 'conexion.php';

$id=$_POST['id'];
$name=$_POST['nombre'];
$description=$_POST['description'];

$inser = "INSERT INTO excel VALUE ('$id','$name','$description')";
$query = mysqli_query($conexion,$inser);
if ($query) {
    echo '<script> 
    alert("guardado Correctamente");
    location.href = "listadoi.php";
     </script>';
}

?>