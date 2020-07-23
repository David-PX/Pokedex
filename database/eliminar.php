<?php 
$id=$_GET['id'];

require_once "conexion.php";
require_once "metodos.php";


$obj = new Metodos();
if($obj-> EliminarDatos($id)==1){
    header("Location: ../index.php");
}else{
    echo "Fallo al eliminar";
}


?>