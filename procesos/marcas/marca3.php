<?php
require "../../php/conexion.php";

$n=$_GET['marca'];
$F=$_GET['funcion'];
$id=$_GET['id_marca'];




if($F=="A"){
    
    $q="insert into marcas(marca) values ('$n')";
}
elseif($F=="M"){
    $q="update marcas set marca='$n' where id_marca=$id";
}
else
{
    $q="delete from marcas where id_marca=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:marca.php");

?>