<title>Remis</title>
<link href="../../img/remis.png" rel="icon">
  <link href="../../template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../template/assets/css/main.css" rel="stylesheet">
  <link href="../../css/estilos.css" rel="stylesheet">
<?php
require "../../php/cabecera3.php";
?>
<?php
require "../../php/conexion.php";
$id = $_GET['id_viaje'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from viajes where id_viaje=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='viaje3.php' method='GET'>");
    echo("<h1>Viajes</h1>");
    echo("<select id='cliente' name='cliente'>");
    require "../../php/conexion.php";
    $q="select * from clientes order by nombrec";
    $r=mysqli_query($con, $q);
    while($datos2=mysqli_fetch_array($r)){
    echo("<option value=". $datos2['id_cliente'].">". $datos2['nombrec']."</option>");
    }
    
    echo("</select>"); 
    echo(  "<br>"); 
         echo(  " <input type='text' name='id_viaje' readonly value=".$datos['id_viaje'].">");
          echo(  "<br>");
          echo(  " <input type='number' name='precio'  placeholder='precio' value=".$datos['precio'].">");
          echo(  "<br>");
          echo("<label>Fecha</label>");
          echo(  "<br>");
          echo(  " <input type='date' name='fecha' placeholder='fecha' value=".$datos['fecha'].">");
           echo(  "<br>");
           echo(  "<br>");
           echo(  " <input type='number' name='año' placeholder='año' value=".$datos['añov'].">");
           echo(  "<br>");
           echo("<input type='text' name='salida' placeholder='hora de salida' value=".$datos['hora_salida'].">");
           echo(  "<br>");
           echo(  " <input type='text' name='retorno' placeholder='hora de retorno' value=".$datos['hora_retorno'].">");
           echo(  "<br>");
           echo(  " <input type='text' name='estado' placeholder='estado' value=".$datos['estado'].">");
           echo(  "<br>");
           echo(  " <input type='text' name='disponible' placeholder='cantidad de asientos disponible' value=".$datos['cant_asiento_dispo'].">");
           echo(  "<br>");
           echo(  " <input type='text' name='vendidos' placeholder='cantidad de asientos vendidos' value=".$datos['cant_asiento_vendido'].">");
           echo(  "<br>");
           echo("<label>Coche</label>");
          echo(  "<br>");
          echo("<select id='marca' name='marca'>");
         require "../../php/conexion.php";
         $q="select * from coches order by descripcion";
         $r=mysqli_query($con, $q);
        while($datos1=mysqli_fetch_array($r)){
         echo("<option value=". $datos1['id_coche'].">". $datos1['descripcion']."</option>");
    }
   
     echo("</select>");
    echo(  "<br>");
    echo("<label>Destino</label>");
    echo(  "<br>");
echo("<select id='destino' name='destino'>");
require "../../php/conexion.php";
$q="select * from destinos order by hasta";
$r=mysqli_query($con, $q);
while($datos2=mysqli_fetch_array($r)){
echo("<option value=". $datos2['id_destino'].">". $datos2['hasta']."</option>");
}

echo("</select>"); 
echo(  "<br>");      
    echo("<input type='text' readonly name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='viaje3.php' method='GET'>");
    echo("<h1>Viajes</h1>");

    echo("<select id='cliente' name='cliente'>");
    require "../../php/conexion.php";
    $q="select * from clientes order by nombrec";
    $r=mysqli_query($con, $q);
    while($datos2=mysqli_fetch_array($r)){
    echo("<option value=". $datos2['id_cliente'].">". $datos2['nombrec']."</option>");
    }
    
    echo("</select>"); 
    echo(  "<br>");    

    echo(  " <input type='hidden' name='id_viaje' readonly >");
    echo(  "<br>");
    echo(  " <input type='number'  name='precio' placeholder='precio' >");
    echo(  "<br>");
    echo("<label>Fecha</label>");
    echo(  "<br>");
    echo(  " <input type='date' name='fecha' placeholder='fecha' >");
     echo(  "<br>");
     echo(  "<br>");
     echo(  " <input type='number' name='año' placeholder='año'>");
           echo(  "<br>");
     echo("<input type='text' name='salida' placeholder='hora de salida' >");
     echo(  "<br>");
     echo(  " <input type='text' name='retorno' placeholder='hora de retorno' >");
     
     echo(  " <input type='hidden' name='estado' placeholder='estado' value='S' >");
     echo(  "<br>");
     echo(  " <input type='text' name='disponible' placeholder='asientos disponible' >");
     echo(  "<br>");
     echo(  " <input type='text' name='vendidos' placeholder='asientos vendidos' >");
     echo(  "<br>");
     echo("<label>Coche</label>");
    echo(  "<br>");
    echo("<select id='marca' name='marca'>");
   require "../../php/conexion.php";
   $q="select * from coches order by descripcion";
   $r=mysqli_query($con, $q);
  while($datos3=mysqli_fetch_array($r)){
   echo("<option value=". $datos3['id_coche'].">". $datos3['descripcion']."</option>");
}

echo("</select>");
echo(  "<br>");
echo("<label>Destino</label>");
echo(  "<br>");
echo("<select id='destino' name='destino'>");
require "../../php/conexion.php";
$q="select * from destinos order by hasta";
$r=mysqli_query($con, $q);
while($datos4=mysqli_fetch_array($r)){
echo("<option value=". $datos4['id_destino'].">". $datos4['hasta']."</option>");
}

echo("</select>"); 
echo(  "<br>"); 
     echo("<input type='text' readonly name='funcion' value=".$F.">");
     echo(  "<br>");
     echo( "<input type='submit' value='agregar'>");
echo ("</form>");


}
?>
<?php
require "../../php/pie.php";
?>