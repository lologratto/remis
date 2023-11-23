<?php
$raiz = "../../";
?>
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
  <link href="../../css/1.css" rel="stylesheet">
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
    echo("<div class='container'>");
    echo(" <form action='viaje3.php' method='GET'>");
    echo("<h1>Viajes</h1>");

    echo("<select id='cliente' name='cliente'>");
    require "../../php/conexion.php";
    $q="select * from clientes order by nombrec ";

    $r=mysqli_query($con, $q);
    while($datos2=mysqli_fetch_array($r)){
        if($datos2['id_cliente']==$datos['id_cliente']) {
            echo("<option selected value='". $datos2['id_cliente']."'>". $datos2['nombrec']."</option>");
        }else{
            echo("<option  value='". $datos2['id_cliente']."'>". $datos2['nombrec']."</option>");
        }
    
        }
    
    echo("</select>"); 
    echo(  "<br>"); 
         echo(  " <input type='hidden' name='id_viaje' readonly value=".$datos['id_viaje'].">");
         echo(  " <input type='hidden'  name='nuevo' placeholder='Ingresa tu Nombre, Apellido, localidad y fecha de nacimiento' >"); 

         echo("<div class='container'>") ;
    echo("<div class='row'>") ;
    echo("<div class='col-4'>");
    
    echo("<input type='number'  placeholder='precio del viaje' class='form-control' name='precio' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['precio']." >");
    echo("</div>") ;
    echo("</div>") ;
    echo("</div>") ;
    
    echo("<div class='container'>") ;
    echo("<div class='row'>") ;
    echo("<div class='col-4'>"); 
    echo("<div class='input-group mb-3'>");     
     echo("<label class='input-group-text'  for=''>Fecha del viaje</label>");
      
     echo("<input type='date' class='form-control' name='fecha' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['fecha']." >"); 
    
    
    echo("</div>") ;
    echo("</div>") ;
    echo("<div class='col-1'></div>") ;
    echo("<div class='col-3'>") ;
    echo("<div class='input-group mb-3'>");
    
    echo("<label class='input-group-text'  for=''>Año</label>");
    
    echo("<input type='number'  placeholder='año' class='form-control' name='año' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['añov']." >");
      
   
   
    echo("</div>") ;
    echo("</div>") ;
    echo("</div>") ;
 
   
 
    echo("<div class='container'>") ;
    echo("<div class='row'>") ;
    echo("<div class='col-4'>"); 
    echo("<div class='input-group mb-3'>");     
     echo("<label class='input-group-text'  for=''>Hora de salida</label>");
      
     echo("<input type='time' name='salida' placeholder='hora de salida' class='form-control' name='año' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['hora_salida']." >");
      
    
    echo("</div>") ;
    echo("</div>") ;
    echo("<div class='col-1'></div>") ;
    echo("<div class='col-4'>") ;
    echo("<div class='input-group mb-3'>");
    echo("<label class='input-group-text'  for=''>Hora de retorno</label>");
    echo(  " <input type='time' name='retorno' placeholder='hora de retorno' class='form-control' name='año' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['hora_retorno']." >");
    echo("</div>") ;
    echo("</div>") ;
    echo("</div>") ;
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
            if($datos1['id_coche']==$datos['id_coche']) {
                echo("<option selected value='". $datos1['id_coche']."'>". $datos1['descripcion']."</option>");
            }else{
                echo("<option  value='". $datos1['id_coche']."'>". $datos1['descripcion']."</option>");
            }
         
    }
   
     echo("</select>");

     echo("<label>Lugar de salida</label>");
    echo(  "<br>");
echo("<select id='destino' name='destinol'>");
require "../../php/conexion.php";
$q="select * from desde order by desdel";
$r=mysqli_query($con, $q);
while($datos3=mysqli_fetch_array($r)){
    if($datos3['id_desde']==$datos['id_desde']) {
echo("<option selected value=". $datos3['id_desde'].">". $datos3['desdel']."</option>");
}else{
    echo("<option value=". $datos3['id_desde'].">". $datos3['desdel']."</option>");
}
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
    if($datos4['id_destino']==$datos['id_destino']) {
echo("<option selected value=". $datos4['id_destino'].">". $datos4['hasta']."</option>");
}else{
    echo("<option value=". $datos4['id_destino'].">". $datos4['hasta']."</option>");
}
}

echo("</select>"); 
echo(  "<br>");      
    echo("<input type='text' readonly name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' class='btn btn-success' value='modificar'>");
           echo("</div>");
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo("<div class='container'>");
    echo(" <form action='viaje3.php' method='GET'>");
    echo("<h1>Viajes</h1>");
    echo(  " <input type='hidden'  name='nuevo' placeholder='Ingresa tu Nombre, Apellido, localidad y fecha de nacimiento' >"); 

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
    echo("<div class='container'>") ;
    echo("<div class='row'>") ;
    echo("<div class='col-4'>");
    
    echo("<input type='number'  placeholder='precio del viaje' class='form-control' name='precio' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >");
    echo("</div>") ;
    echo("</div>") ;
    echo("</div>") ;
    
    echo("<div class='container'>") ;
    echo("<div class='row'>") ;
    echo("<div class='col-4'>"); 
    echo("<div class='input-group mb-3'>");     
     echo("<label class='input-group-text'  for=''>Fecha del viaje</label>");
      
     echo("<input type='date' class='form-control' name='fecha' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >"); 
    
    
    echo("</div>") ;
    echo("</div>") ;
    echo("<div class='col-1'></div>") ;
    echo("<div class='col-3'>") ;
    echo("<div class='input-group mb-3'>");
    
    echo("<label class='input-group-text'  for=''>Año</label>");
    
    echo("<input type='number'  placeholder='año' class='form-control' name='año' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >");
      
   
   
    echo("</div>") ;
    echo("</div>") ;
    echo("</div>") ;
 
   
 
    echo("<div class='container'>") ;
    echo("<div class='row'>") ;
    echo("<div class='col-4'>"); 
    echo("<div class='input-group mb-3'>");     
     echo("<label class='input-group-text'  for=''>Hora de salida</label>");
      
     echo("<input type='time' name='salida' placeholder='hora de salida' class='form-control' name='año' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >");
      
    
    echo("</div>") ;
    echo("</div>") ;
    echo("<div class='col-1'></div>") ;
    echo("<div class='col-4'>") ;
    echo("<div class='input-group mb-3'>");
    echo("<label class='input-group-text'  for=''>Hora de retorno</label>");
    echo(  " <input type='time' name='retorno' placeholder='hora de retorno' class='form-control' name='año' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >");
    echo("</div>") ;
    echo("</div>") ;
    echo("</div>") ;
 
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
echo("<label>Lugar de salida</label>");
echo(  "<br>");
echo("<select id='destino' name='destinol'>");
require "../../php/conexion.php";
$q="select * from desde order by desdel";
$r=mysqli_query($con, $q);
while($datos2=mysqli_fetch_array($r)){
echo("<option value=". $datos2['id_desde'].">". $datos2['desdel']."</option>");
}

echo("</select>"); 

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
     echo( "<input type='submit' class='btn btn-success' value='agregar'>");
     echo("</div>");
echo ("</form>");


}
?>
<?php
require "../../php/pie.php";
?>