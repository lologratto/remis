<?php
require "../../php/cabecera3.php";
?>
<?php
require "../../php/conexion.php";
$id = $_GET['id_destino'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from destino where id_destino=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='destino3.php' method='GET'>");
        
         echo(  " <input type='text' name='id_destino' readonly value=".$datos['id_destino'].">");
          echo(  "<br>");
          echo(  " <input type='text' name='desde'  value=".$datos['desde'].">");
          echo(  "<br>");
          echo(  " <input type='text' name='hasta' value=".$datos['hasta'].">");
           echo(  "<br>");
           echo("<input type='text' readonly name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='destino3.php' method='GET'>");
    
    echo(  " <input type='hidden' name='id_destino' readonly >");
    echo(  "<br>");
    echo(  " <input type='text' name='desde' >");
    echo(  "<br>");
    echo(  " <input type='text' name='hasta' >");
     echo(  "<br>");
     echo("<input type='text' readonly name='funcion' value=".$F.">");
     echo(  "<br>");
     echo( "<input type='submit' value='agregar'>");
echo ("</form>");


}
?>
<?php
require "php/pie.php";
?>