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
require "../../php/cabecera3.php";
?>
<?php
require "../../php/conexion.php";
$id = $_GET['id_cliente'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from clientes where id_cliente=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='cliente3.php' method='GET'>");
        
         echo(  " <input type='text' name='id_cliente' readonly value=".$datos['id_cliente'].">");
          echo(  "<br>");
          echo( " <input type='text' name='nombrec' placeholder='nombre' value=".$datos['nombrec'].">");
          echo(  "<br>");
           echo( "<input type='text' name='apellido' placeholder='apellido' value=".$datos['apellido'].">");
           echo(  "<br>");
           echo("<input type='text' name='poblacion' placeholder='localidad' value=".$datos['poblacion'].">");
           echo(  "<br>");
           echo("<input type='date' name='nacimiento' placeholder='fecha de nacimiento' value=".$datos['fecha_nacimiento'].">");
           echo(  "<br>");
           echo("<input type='text' readonly name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='cliente3.php' method='GET'>");
    echo(  " <input type='text' name='id_cliente' readonly>");
    echo(  "<br>");
    echo( " <input type='text' name='nombrec' placeholder='nombre' >");
    echo(  "<br>");
     echo( "<input type='text' name='apellido' placeholder='apellido' >");
     echo(  "<br>");
     echo("<input type='text' name='poblacion' placeholder='localidad' >");
     echo(  "<br>");
     echo("<label>Fecha de nacimiento </label>");
     echo(  "<br>");
     echo("<input type='date' name='nacimiento' placeholder='fecha de nacimiento' >");
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