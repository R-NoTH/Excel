<?php

if (is_array($_FILES['archivoexcel']) && count($_FILES['archivoexcel'])>0 ) {
    require 'PHPExcel/Classes/PHPExcel.php';
    require 'conexion.php';

    $tmpfname = $_FILES['archivoexcel']['tmp_name'];
    $leerExcel = PHPExcel_IOFactory::createReaderForFile($tmpfname);

    $excelObj = $leerExcel->load($tmpfname);

    $hoja = $excelObj->getSheet(0);
    $filas = $hoja->getHighestRow();
    $colum = $hoja->getHighestColumn();

    echo "<table id='table_detalle' class='table' style='width:100%; table-layout:fixed'>
    <thead>
        <tr bgcolor='black' style='color:white'>    
            <td>Id</td>
            <td>Nombre</td>
            <td>Description</td>
         </tr>   
         </thead><tbody id='tbody_table_detalle'>";
         for($row = 2;$row<=$filas;$row++){
             $id = $hoja->getCell('A'.$row)->getValue();
             $nombre = $hoja->getCell('B'.$row)->getValue();
             $description = $hoja->getCell('C'.$row)->getValue();
             $query ="select count(*) as contador from excel where id='".$id."'" ;
             $resultado = $conexion->query($query);
             $respuesta = $resultado->fetch_assoc(); 
             if ($respuesta['contador']==0) {
                
                 if ($id =="") {
                     
                 }else{
                     
                     echo "<tr>";
                     echo "<td>".$id."</td>";
                     echo "<td>".$nombre."</td>";
                     echo "<td>".$description."</td>";
                     echo "</tr>";
     
                 }
             }

         }
         echo "</tbody>
         </table>";
    # code...
}
?>