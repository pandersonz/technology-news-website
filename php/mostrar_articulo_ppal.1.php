<?php
include("clase_conexion.php");
$buscar_datos="select titulo, resumen, a.idArticulo from articulo a, articuloPpal p where p.idArticuloPpal=1 and a.idArticulo=p.idArticulo";
$muestra_datos=mysql_query($buscar_datos);
$row=mysql_fetch_array($muestra_datos);
$ar['titulo']=$row['titulo'];
$ar['resumen']=$row['resumen'];
$ar['idArticulo']=$row['idArticulo'];
mysql_free_result($muestra_datos);
$dato_json=json_encode($ar);
echo $dato_json;
    ?>