<title>Remis</title>
<?php
session_start();
if(!isset ($_SESSION['usuario'])){
    header("location:../../index.php");
}
$nomusuario=$_SESSION["usuario"];
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
           <h1 >Clientes </h1>
           
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
     
      <div class="container">
      <div class="caja3 ">
      
        
      <div class="row">
          <div class="col-5">
        
        
        <table class="table caja2" border="2px"> 
     </div >

     <table class="table table-bordered border-dark table-secondary table-hover" border="2px">
        <thead class="m-1">
      
        <thead>
          <tr>
            <th scope="col">funciones</th>
            
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Localidad</th>
            <th scope="col">Fecha De nacimiento</th>
          </tr>
        </thead>
        <tbody>
  <?php
  require "../../php/conexion.php";
  $q="select * from clientes";
  $r=mysqli_query($con, $q);
 
  while( $datos=mysqli_fetch_array($r)){
    echo("<tr>");
    echo("<td scope='row'> <a href='cliente2.php?id_cliente=".$datos['id_cliente']."&funcion=M' ><img src='../../img/dibujo (1).png' alt='' ></a>
  
  <a href='cliente2.php?id_cliente=".$datos['id_cliente']."&funcion=B'><img src='../../img/borrar (3).png' alt=''></a>
  
  <td>". $datos['nombrec']."</td><td>".$datos['apellido']."</td><td>".$datos['localidad']."</td><td>".$datos['fecha_nacimiento']."</td>");
   echo("</tr>");
   


  }
  
  ?>
  </tbody>
  <a href='cliente2.php?id_cliente=0&funcion=A' ><img src='../../img/pluss.png ' class="m-2" height="50px" ></a>
  </table>
  
  </div></div>
  </div>

</body>

<?php
require "../../php/pie.php";
?>