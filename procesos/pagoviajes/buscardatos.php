<?php
$ids=$_GET['namesocio'];
$a =$_GET['año'];
require '../../php/conexion.php';
$q = "select * from viajes,coches,destinos where viajes.id_coche=coches.id_coche and viajes.id_destino=destinos.id_destino and id_viaje = $ids and añov=$a";
//$q= "select * from cuotas";
$r=mysqli_query($con,$q);
$array=[];
if($r){
   
while($valores=mysqli_fetch_assoc($r)){
    $array[]=$valores;
}
echo json_encode($array);
}
mysqli_close($con);
?>