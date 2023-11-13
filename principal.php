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
<br>
<div class="container">
     <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/4.png"class=" card-img-top" width="100%" alt="">
                <div class="card-body">
                    <h5 class="card-title">Remises para cualquier transporte</h5>
                     <p class="card-text">Nostros nos encargamos de que tu viaje sea rapido y seguro gracias a nuestros nuevos y eficientes vehículos </p>
                </div>
                    </div>
             </div>

             <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/destino.jpeg"class=" card-img-top" width="100%" alt="">
                <div class="card-body">
                    <h5 class="card-title">Todos los detinos</h5>
                     <p class="card-text">Tenemos una amplia variedad de destinos, ya sea en la provincia de buenos aires y en el resto del pais</p>
                </div>
                    </div>
             </div>

             <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/turismo.webp"class=" card-img-top" width="100%" alt="">
                <div class="card-body">
                    <h5 class="card-title">Tus sueños se hacen realidad con nosotros</h5>
                     <p class="card-text">Ademas de transportarte por todo el pais tambien ofrecemos transporte para que te vallas de viajes el unico limite es tu mente</p>
                </div>
                    </div>
             </div>


</div><!--fin fila-->
</div><!--fin container-->

<br>
<?php
require "php/pie.php";
?>