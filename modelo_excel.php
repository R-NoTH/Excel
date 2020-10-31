<?php
    class Modelo_Excel{
        private $conexion;
        function __construct()
        {
            require 'modelo_conexion.php';
            $this->conexion = new conexion();
            $this->conexion->conectar();
            
        }
       
		function registrarExcel($id,$nombre,$description){
			$sql = "call PA_REGISTRAR_DATA_EXCEL('$id','$nombre','$description')";
			if ($resultado = $this->conexion->conexion->query($sql)){
				$id_retornado = mysqli_insert_id($this->conexion->conexion);
				return 1;
			}
			else{
				return 0;
			}
			$this->conexion->Cerrar_Conexion();
		}
    }
?>