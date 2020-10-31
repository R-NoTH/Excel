<?php

require_once 'conexion.php';

$id=$_POST['id'];


$inser = "DELETE FROM excel WHERE id=$id;";
$query = mysqli_query($conexion,$inser);
if ($query) {
    echo '<script> 
    alert("Elimino Correctamente");
    location.href = "listadoi.php";
     </script>';
}

?>