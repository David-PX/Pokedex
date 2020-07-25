<?php 

require_once "../database/conexion.php";
require_once "../database/metodos.php";



$nombre_region = $_POST['txtRegion'];


$datos = array($nombre_region);


$obj = new Metodos();
if($obj->GuardarRegion($datos)==1){
    header("Location: region.php");
}else{
    echo "Fallo al agregar";
}







?>