<?php
include("clase_conexion.php");
$buscar_datos="select titulo, idArticulo, resumen from articulo where idArticulo=1";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['titulo1']=$row['titulo'];
$ar['resumen1']=$row['resumen'];
$ar['idArticulo1']=$row['idArticulo'];
mysql_free_result($muestra_datos);
//----------------------------------------//
$buscar_datos="select titulo, idArticulo, resumen from articulo where idArticulo=1";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['titulo2']=$row['titulo'];
$ar['resumen2']=$row['resumen'];
$ar['idArticulo2']=$row['idArticulo'];
mysql_free_result($muestra_datos);
//---------------------------------------//
$buscar_datos="select titulo, idArticulo, resumen from articulo where idArticulo=1";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['titulo3']=$row['titulo'];
$ar['resumen3']=$row['resumen'];
$ar['idArticulo3']=$row['idArticulo'];
mysql_free_result($muestra_datos);
//---------------------------------------//
$buscar_datos="select titulo, idArticulo, resumen from articulo where idArticulo=1";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['titulo4']=$row['titulo'];
$ar['resumen4']=$row['resumen'];
$ar['idArticulo4']=$row['idArticulo'];
mysql_free_result($muestra_datos);
//--------------------------------------//
$buscar_datos="select titulo, idArticulo, resumen from articulo where idArticulo=1";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['titulo5']=$row['titulo'];
$ar['resumen5']=$row['resumen'];
$ar['idArticulo5']=$row['idArticulo'];
mysql_free_result($muestra_datos);
$dato_json=json_encode($ar);
echo $dato_json;
    ?>