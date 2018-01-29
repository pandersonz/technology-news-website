<?php
class conexion{
var $serv="localhost";//su nombre del servidor
var $usuario="root";//su nombre de usuario
var $contra="";//su contraseña
var $conexi;
function conecta()
{
$s=$this->serv;
$u=$this->usuario;
$c=$this->contra;
$conex=mysql_connect($s,$u,$c);
$this->conexi=$conex;
}

}
$cono= new conexion();
$cono->conecta();
$c=$cono->conexi;
$select=mysql_select_db("bd_tagibal",$c);//su nombre de su base de datos
?>

