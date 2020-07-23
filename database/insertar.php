<?php 

require_once "conexion.php";
require_once "metodos.php";



$nombre = $_POST['txtNombre'];
$tipo1 = $_POST['txtTipo1'];
$tipo2 = $_POST['txtTipo2'];
$movimientos = json_encode($_POST['movimientos']);
$region = $_POST['txtRegion'];
$imagen = addslashes(file_get_contents($_FILES['txtFoto']['tmp_name']));

$datos = array($nombre,$tipo1,$tipo2,$movimientos,$region,$imagen);


$obj = new Metodos();
if($obj->GuardarDatos($datos)==1){
    header("Location: ../index.php");
}else{
    echo "Fallo al agregar";
}







?>