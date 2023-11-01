<title>Remis</title>
<?php
session_start();
if(!isset ($_SESSION['usuario'])){
    header("location:../../index.php");
}
?>
<?php
$raiz = "../../";
?>
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
<?php
require "../../php/cabecera2.php";
?>
<div class="container text-center" style="border: 1px #000;">
        <div class="row">
          <div class="col-10">
           <h1 >Viajes </h1>
           
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
      <br>
      <div>
      <div class="caja3 ">
          
        
        
        <table class="table caja2" border="2px"> 
     </div >

     <table class="table table-bordered border-dark table-secondary table-hover" border="2px">
        <thead class="m-1">
      
        <thead>
          <tr>
            <th scope="col">funciones</th>
            <th scope="col">Nombre del Cliente</th>
            <th scope="col">Precio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Año</th>
            <th scope="col">Hora de Salida</th>
            <th scope="col">Hora de Retorno</th>
            <th scope="col">Estado</th>
            <th scope="col">Cantidad de Asientos Disponibles</th>
            <th scope="col">Cantidad de Asientos Vendidos</th>
            <th scope="col">Coche</th>
            <th scope="col">Destino</th>
          </tr>
        </thead>
        <tbody>
  <?php
  require "../../php/conexion.php";
  $q="select * from viajes, coches, destinos, clientes where viajes.id_cliente=clientes.id_cliente and  viajes.id_coche=coches.id_coche and  viajes.id_destino=destinos.id_destino";
 // echo($q);
  $r=mysqli_query($con, $q);
 
  while( $datos=mysqli_fetch_array($r)){
    echo("<tr>");
    echo("<td scope='row'> <a href='viaje2.php?id_viaje=".$datos['id_viaje']."&funcion=M' ><img src='../../img/dibujo (1).png' alt='' ></a>
  
  <a href='viaje2.php?id_viaje=".$datos['id_viaje']."&funcion=B'><img src='../../img/borrar (3).png' alt=''></a>
  
  <td>". $datos['nombrec']."</td><td>". $datos['precio']."</td><td>".$datos['fecha']."</td><td>".$datos['añov']."</td><td>".$datos['hora_salida']."</td><td>".$datos['hora_retorno']."</td><td>".$datos['estado']."</td><td>".$datos['cant_asiento_dispo']."</td><td>".$datos['cant_asiento_vendido']."</td><td>".$datos['descripcion']."</td><td>".$datos['hasta']."</td>");
   echo("</tr>");
   


  }
  
  ?>
  </tbody>
  <div class="row">
    <div class="col-2"><a href='viaje2.php?id_viaje=0&funcion=A' ><img src='../../img/pluss.png ' class="m-2" height="50px" ></a></div>
    <div class="col-10 text-end"> <a href="../pagoviajes/pagoviaje.php"><img src="../../img/tarjeta-de-credito.png" style="aling=right; float=right" alt=""></a></div>
  </div>
  
  
  </table>
</body>
<?php
require "../../php/pie.php";
?>