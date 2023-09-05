<?php
require "../../php/conexion.php";

$n=$_GET['modelo'];
$F=$_GET['funcion'];
$id=$_GET['id_modelo'];




if($F=="A"){
    
    $q="insert into modelos(modelo) values ('$n')";
}
elseif($F=="M"){
    $q="update modelos set modelo='$n' where id_modelo=$id";
}
else
{
    $q="delete from modelos where id_modelo=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:modelo.php");

?>