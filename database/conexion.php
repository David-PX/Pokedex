<?php 

class Conexion{

  
private $servidor="127.0.0.1";
private $usuario="root";
private $bd="pokedex";
private $password="";



  public function conectar(){

         $conexion = mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);
         return $conexion;



  }


}












?>