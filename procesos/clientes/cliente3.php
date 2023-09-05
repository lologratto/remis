<?php
require "../../php/conexion.php";

$n=$_GET['nombrec'];
$a=$_GET['apellido'];
$p=$_GET['poblacion'];
$F=$_GET['funcion'];
$na=$_GET['nacimiento'];
$id=$_GET['id_cliente'];



if($F=="A"){
    
    $q="insert into clientes(nombrec, apellido, localidad, fecha_nacimiento) values ('$n', '$a', '$p', '$na')";
}
elseif($F=="M"){
    $q="update clientes set nombrec='$n', apellido='$a', fecha_nacimiento='$na', localidad='$p' where id_cliente=$id";
}
else
{
    $q="delete from cliente where id_cliente=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:cliente.php");

?>