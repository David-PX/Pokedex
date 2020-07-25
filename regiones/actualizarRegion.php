<?php 




require_once "../database/conexion.php";
require_once "../database/metodos.php";


$id = $_POST['id_region'];
$nombre_region = $_POST['txtNombreRegion'];


$datos = array($nombre_region,$id);

$obj = new Metodos();
if($obj->EditarRegion($datos)==1){
    header("Location: region.php");
}else{
    echo "Fallo al editar";
}























?>