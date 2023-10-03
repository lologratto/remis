<?php
$q=$_GET['q'];
require '../../php/conexion.php';
$r=mysqli_query($con,$q);
if($r){
    echo("1");
}
else
{
    echo("0");
}
?>