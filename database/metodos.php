<?php

class Metodos
{

    public function MostarDatos($sql)
    {
        $c = new Conexion();
        $conexion = $c->conectar();

        $result = mysqli_query($conexion, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
    public function GuardarDatos($datos)
    {

        $c = new Conexion();
        $conexion = $c->conectar();

        $sql = "INSERT INTO pokemon (nombre,tipo1,tipo2,movimientos,id_region,imagen)
           VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]',$datos[4],'$datos[5]')";

        return $result = mysqli_query($conexion, $sql);

    }
    public function EditarDatos($datos)
    {
        $c = new Conexion();
        $conexion = $c->conectar();
        $sql = "UPDATE pokemon SET nombre='$datos[0]',tipo1='$datos[1]',
tipo2='$datos[2]',movimientos='$datos[3]',id_region=$datos[4],imagen='$datos[5]'
WHERE id=$datos[6]";

        return $result = mysqli_query($conexion, $sql);

    }

    public function EliminarDatos($id)
    {
        $c = new Conexion();
        $conexion = $c->conectar();
        $sql = "DELETE FROM pokemon WHERE id ='$id'";
        return $result = mysqli_query($conexion, $sql);
    }

    public function GuardarRegion($datos)
    {

        $c = new Conexion();
        $conexion = $c->conectar();

        $sql = "INSERT INTO regiones (nombre_region)
           VALUES('$datos[0]')";

        return $result = mysqli_query($conexion, $sql);

    }
    public function EditarRegion($datos)
    {
        $c = new Conexion();
        $conexion = $c->conectar();
        $sql = "UPDATE regiones SET nombre_region='$datos[0]' WHERE id_region=$datos[1]";

        return $result = mysqli_query($conexion, $sql);

    }
      public function EliminarRegion($id)
    {
        $c = new Conexion();
        $conexion = $c->conectar();
        $sql = "DELETE FROM regiones WHERE id_region ='$id'";
        return $result = mysqli_query($conexion, $sql);
    }


}
