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
$id = $_GET['id_marca'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from marcas where id_marca=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='marca3.php' method='GET'>");
        
         echo(  " <input type='text' name='id_marca' readonly value=".$datos['id_marca'].">");
          echo(  "<br>");
          echo(  " <input type='text' name='marca'  value=".$datos['marca'].">");
          echo(  "<br>");
           echo("<input type='text' readonly name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='marca3.php' method='GET'>");
    
    echo(  " <input type='hidden' name='id_marca' readonly >");
    echo(  "<br>");
    echo(  " <input type='text' name='marca' placeholder='marca' >");
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