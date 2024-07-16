<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAVYC</title>
  <link rel="icon" href="vista/dist/img/logo-icono.png"> <!--Logo del navegador -->

<!-- ==================
PLUGINGS DE CSS
======================= -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/dist/css/adminlte.css">
  <link rel="stylesheet" href="vista/dist/css/custom.css">

<!-- =======================
    PLUGINGS DE JAVASACRIPT  
=============================-->
  <!-- jQuery -->
  <script src="vista/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vista/dist/js/adminlte.min.js"></script>
</head>

<!-- =======================
    BODY
=============================-->

<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <?php 

  include "modulos/header.php";
  include "modulos/sidebar.php";

  if(isset ($_GET["ruta"])){
    if($_GET["ruta"] == "inicio" || $_GET["ruta"] == "categorias" || $_GET["ruta"] == "tpago" || $_GET["ruta"] == "divisa" || $_GET["ruta"] == "proveedores" || $_GET["ruta"] == "unidad" || $_GET["ruta"] == "general" || $_GET["ruta"] == "clientes" || $_GET["ruta"] == "roles"){
      include "modulos/". $_GET["ruta"] . ".php";
    } else {
      include "modulos/construccion.php";
    }

  }else{
      include "modulos/inicio.php";
  } 

  include "modulos/footer.php";
  
  ?>
</body>
</html>