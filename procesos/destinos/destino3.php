<?php
require "../../php/conexion.php";

$n=$_GET['desde'];
$a=$_GET['hasta'];
$F=$_GET['funcion'];
$id=$_GET['id_destino'];




if($F=="A"){
    
    $q="insert into destinos(desde, hasta ) values ('$n', '$a')";
}
elseif($F=="M"){
    $q="update destinos set desde='$n', hasta='$a' where id_destino=$id";
}
else
{
    $q="delete from destinos where id_destino=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:destino.php");

?>