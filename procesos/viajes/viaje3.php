<?php
require "../../php/conexion.php";

$p=$_GET['precio'];
$f=$_GET['fecha'];
$s=$_GET['salida'];
$r=$_GET['retorno'];
$e=$_GET['estado'];
$dis=$_GET['disponible'];
$v=$_GET['vendidos'];
$m=$_GET['marca'];
$d=$_GET['destino'];
$F=$_GET['funcion'];
$id=$_GET['id_viaje'];
$año=$_GET['año'];
$cl=$_GET['cliente'];



if($F=="A"){
    
    $q="insert into viajes(precio, fecha, hora_salida, hora_retorno, estado, cant_asiento_dispo, cant_asiento_vendido, id_coche, id_destino, añov, id_cliente ) values ('$p', '$f', '$s','$r', '$e', '$dis','$v', '$m', '$d', '$año', '$cl')";
}
elseif($F=="M"){
    $q="update viajes set precio=$p, fecha='$f', añov='$año', hora_salida='$s', hora_retorno='$r', estado='$e', cant_asiento_dispo=$dis, cant_asiento_vendido=$v, id_coche=$m, id_destino=$d, id_cliente=$cl where id_viaje=$id";
}
else
{
    $q="delete from viajes where id_viejes=$id";
    
    
}
//echo($q);
$r=mysqli_query($con, $q);

header("location:viaje.php");

?>