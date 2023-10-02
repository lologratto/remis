<title>Remis</title>
<?php
session_start();
if(!isset ($_SESSION['usuario'])){
    header("location:index.php");
}
$nomusuario=$_SESSION["usuario"];
?>
<?php
$raiz = " ";

?>
<?php
require "php/cabecera.php";
?>
<img src="img/4.png" width="80%" alt="">
<?php
require "php/pie.php";
?>