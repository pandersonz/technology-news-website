<?php
include("clase_conexion.php");
$buscar_datos="select titulo, a.idArticulo from articulo a, articuloSecundario s where a.idArticulo=s.idArticulo and s.idArticuloSecundario=1";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['tituloSec1']=$row['titulo'];
$ar['idArticuloSec1']=$row['idArticulo'];
$buscar_datos="select titulo, a.idArticulo from articulo a, articuloSecundario s where a.idArticulo=s.idArticulo and s.idArticuloSecundario=2";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['tituloSec2']=$row['titulo'];
$ar['idArticuloSec2']=$row['idArticulo'];
$buscar_datos="select titulo, a.idArticulo from articulo a, articuloSecundario s where a.idArticulo=s.idArticulo and s.idArticuloSecundario=3";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['tituloSec3']=$row['titulo'];
$ar['idArticuloSec3']=$row['idArticulo'];
$dato_json=json_encode($ar);
echo $dato_json;