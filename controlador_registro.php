<?php
    require 'modelo_excel.php';
    $ME =new Modelo_Excel();
    $idTable = htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8');
    $nombreTable = htmlspecialchars($_POST['nom'],ENT_QUOTES,'UTF-8');
    $descriptionTable = htmlspecialchars($_POST['desc'],ENT_QUOTES,'UTF-8');

    $array_id = explode(",",$idTable);
    $array_nombre = explode(",",$nombreTable);
    $array_descrip = explode(",",$descriptionTable);

    for ($i=0; $i <count($array_id) ; $i++) { 
        $consultar = $ME->registrarExcel($array_id[$i],$array_nombre[$i],$array_descrip[$i]);
    }
    echo $consultar;


?>