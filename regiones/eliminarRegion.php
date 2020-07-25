<?php 
$id=$_GET['id_region'];

require_once "../database/metodos.php";
require_once "../database/conexion.php";




$obj = new Metodos();
if($obj-> EliminarRegion($id)==1){
    header("Location: region.php");
}else{
    echo "Fallo al eliminar";
}


?>