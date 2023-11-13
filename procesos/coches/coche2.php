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
require "../../php/cabecera6.php";
?>
<?php
require "../../php/conexion.php";
$id = $_GET['id_coche'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from coches where id_coche=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='coche3.php' method='GET'>");
        echo("<h1>Coches</h1>");
         echo(  " <input type='text' name='id_coche' readonly value=".$datos['id_coche'].">");
          echo(  "<br>");
          echo("<label>Modelos</label>");
          echo(  "<br>");
          echo("<select id='modelo' name='modelo'>");
          require "../../php/conexion.php";
          $q="select * from modelos order by modelo";
          $r=mysqli_query($con, $q);
          while($datos1=mysqli_fetch_array($r)){
            if($datos1['id_modelo']==$datos['id_modelo']) {
           echo("<option selected value=". $datos1['id_modelo'].">". $datos1['modelo']."</option>");
          }else{
            echo("<option value=". $datos1['id_modelo'].">". $datos1['modelo']."</option>");
         
          }
      }
         
          echo("</select>");
          echo(  "<br>");
          echo("<label>Marca</label>");
          echo(  "<br>");
          echo("<select id='marca' name='marca'>");
          require "../../php/conexion.php";
          $q="select * from marcas order by marca";
          $r=mysqli_query($con, $q);
          while($datos2=mysqli_fetch_array($r)){
            if($datos2['id_marca']==$datos['id_marca']) {
           echo("<option selected value=". $datos2['id_marca'].">". $datos2['marca']."</option>");
          }else{
            echo("<option value=". $datos2['id_marca'].">". $datos2['marca']."</option>");
        
          }
      }
         
          echo("</select>");
           echo(  "<br>");
           echo("<input type='text' name='descripcion' placeholder='descripcion' value=".$datos['descripcion'].">");
           echo(  "<br>");
           echo("<input type='number' name='pasajeros' placeholder='cantidad de pasajeros' value=".$datos['cant_pasajero'].">");
           echo(  "<br>");
           
           echo("<input type='text' readonly name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' class='btn btn-success' value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='coche3.php' method='GET'>");
    echo("<h1>Coches</h1>");
    echo(  " <input type='hidden' name='id_coche'  readonly >");
    echo(  "<br>");
    echo("<label>Modelos</label>");
          echo(  "<br>");
    echo("<select id='modelo' name='modelo'>");
    require "../../php/conexion.php";
    $q="select * from modelos order by modelo";
    $r=mysqli_query($con, $q);
    while($datos3=mysqli_fetch_array($r)){
     echo("<option value=". $datos3['id_modelo'].">". $datos3['modelo']."</option>");
    }
   
    echo("</select>");
    echo(  "<br>");
    echo("<label>Marca</label>");
          echo(  "<br>");
    echo("<select id='marca' name='marca'>");
    require "../../php/conexion.php";
    $q="select * from marcas order by marca";
    $r=mysqli_query($con, $q);
    while($datos4=mysqli_fetch_array($r)){
     echo("<option value=". $datos4['id_marca'].">". $datos4['marca']."</option>");
    }
   
    echo("</select>");
     echo(  "<br>");
     echo("<input type='text' name='descripcion' placeholder='descripcion' >");
           echo(  "<br>");
     echo("<input type='number' name='pasajeros' placeholder='cantidad de pasajeros' >");
     echo(  "<br>");
     echo("<input type='text' readonly name='funcion' value=".$F.">");
     echo(  "<br>");
     echo( "<input type='submit' class='btn btn-success' value='agregar'>");
echo ("</form>");


}
?>
<?php
require "../../php/pie.php";
?>