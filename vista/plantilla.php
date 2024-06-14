<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Sistema Automatizado para la Gestión de Compra y Venta de Productos (SAGCV)</title>
  <link rel='icon' href='vistas/dist/img/AdminLTELogo.png'> <!--Logo del navegador -->

<!-- ==================
PLUGINGS DE CSS
======================= -->

  <!-- Google Font: Source Sans Pro -->
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'>
  <!-- Font Awesome -->
  <link rel='stylesheet' href='vistas/plugins/fontawesome-free/css/all.min.css'>
  <!-- Theme style -->
  <link rel='stylesheet' href='vistas/dist/css/adminlte.css'>

<!-- =======================
    PLUGINGS DE JAVASACRIPT 
=============================-->
  <!-- jQuery -->
  <script src='vistas/plugins/jquery/jquery.min.js'></script>
  <!-- Bootstrap 4 -->
  <script src='vistas/plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
  <!-- AdminLTE App -->
  <script src='vistas/dist/js/adminlte.min.js'></script>
  <!-- AdminLTE for demo purposes -->
  <script src='vistas/dist/js/demo.js'></script>

</head>

<!-- =======================
    BODY
=============================-->

<body class='hold-transition sidebar-mini'>
<!-- Site wrapper -->
<div class='wrapper'>

  <?php 

  include 'modulos/cabecera.php';
  include 'modulos/sidebar.php';

  if(isset ($_GET['ruta'])){
    if($_GET['ruta'] == 'inicio' || $_GET['ruta'] == 'productos' || $_GET['ruta'] == 'categorias'){
      include 'modulos/'. $_GET['ruta'] . '.php';
    } else {
      include 'modulos/error.php';
    }

  }else{
      include 'modulos/inicio.php';
  } 

  include 'modulos/footer.php';
  
  ?>

  
</div>
</body>
</html>