<?php
//archivo que se encarga ed la conexion a la base de datos
$dbip="localhost";
$dbuser="root";
$dbpass="";
$dbname="remis";
//conexion
$con=mysqli_connect($dbip, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()){
    echo'conexion fallida :'   , mysqli_connect_error();
    exit();
}
?>