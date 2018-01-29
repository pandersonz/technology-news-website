<?php
include("clase_conexion.php");
$buscar_datos="select contenido from articulo where idArticulo="+$_POST['id'];
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['contenido']=$row['contenido'];
mysql_free_result($muestra_datos);
$dato_json=json_encode($ar);
echo $dato_json;
    ?>