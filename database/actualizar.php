<?php  

require_once "conexion.php";
require_once "metodos.php";


$id = $_POST['id'];
$nombre = $_POST['txtNombre'];
$tipo1 = $_POST['txtTipo1'];
$tipo2 = $_POST['txtTipo2'];
$movimientos = json_encode($_POST['movimientos']);
$region = $_POST['txtRegion'];
$imagen = addslashes(file_get_contents($_FILES['txtFoto']['tmp_name']));;

$datos = array($nombre,$tipo1,$tipo2,$movimientos,$region,$imagen,$id);

$obj = new Metodos();
if($obj->EditarDatos($datos)==1){
    header("Location: ../index.php");
}else{
    echo "Fallo al editar";
}















?>