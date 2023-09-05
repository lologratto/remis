<?php
require "../../php/conexion.php";

$n=$_GET['modelo'];
$a=$_GET['marca'];
$p=$_GET['pasajeros'];
$F=$_GET['funcion'];
$id=$_GET['id_coche'];
$des=$_GET['descripcion'];



if($F=="A"){
    
    $q="insert into coches(id_modelo, id_marca, cant_pasajero, descripcion ) values ('$n', '$a', '$p', '$des')";
}
elseif($F=="M"){
    $q="update coches set id_modelo='$n', id_marca='$a', descripcion='$des', cant_pasajero='$p' where id_coche=$id";
}
else
{
    $q="delete from coches where id_coche=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:coche.php");

?>