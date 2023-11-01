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



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Pago </title>
    
    <script src="../../js/jquery-3.7.0.min.js"></script>
    
</head>
<body>
<header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <a href="" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1>Remis<span>.</span></h1>
  </a>
  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="../viajes/viaje.php">Atras</a></li>
      
  </nav><!-- .navbar -->

  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header>
<div class="container text-center" style="border: 1px #000;">
        <div class="row">
          <div class="col-10">
           <h1 >Procesar Pago </h1>
           
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
      <br>
      
     </div >
     
    <div class="container">
    <form>

    <label> Cliente:</label>
     <select name="namesocio" type="text" class="form-control form-select"  id="socio"placeholder="Cliente">
    
    <?php
    require "../../php/conexion.php";
    $q="SELECT * FROM clientes  ORDER by nombrec";
    $r=mysqli_query($con,$q);
    while($valores=mysqli_fetch_array($r)){
    echo('<option value='.$valores['id_cliente'].'>'.$valores['nombrec'].'</option>');
}
    ?>

    </select>

        <div class="mb-3">
          <label for="año" class="form-label">año</label>
          <input type="number" name="año" class="form-control" value="2023" max="2025" id="año">
        </div>
       
        
    </form>

      <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Importe</th>
            <th scope="col">Fecha</th>
            <th scope="col">Año</th>
            <th scope="col">Hora de salida</th>
            <th scope="col">estado</th>
            <th scope="col">Cantidad de asientos vendidos</th>
            <th scope="col">Coche</th>
            <th scope="col">Destino</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody id="tabla">
         
        </tbody>
      </table>
      
      
    </div>
     
      <script src="../../js/bootstrap.min.js"></script> 
      <script src="../../js/procesarpagoviaje/pagos.js"></script> 
      <?php
require "../../php/pie.php";
?>