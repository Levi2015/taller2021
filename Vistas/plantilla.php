
<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>electronica levi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="Vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="Vistas/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Vistas/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="Vistas/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!--Datatable-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.css">


<!-- jQuery -->
<script src="Vistas/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="Vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="Vistas/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="Vistas/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="Vistas/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="Vistas/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="Vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Vistas/plugins/moment/moment.min.js"></script>
<script src="Vistas/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="Vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="Vistas/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="Vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Vistas/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Vistas/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Vistas/dist/js/demo.js"></script>

<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="vistas/plugins/datatables-responsive/js/datatables.responsive.min.js"></script>

<script type="text/javascript" src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- swalalert2  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>




  <?php 
    if(isset($_SESSION['iniciarSesion'])&&$_SESSION['iniciarSesion']=="ok")
    {

      echo '<body class="hold-transition sidebar-mini layout-fixed">';

echo '<div class="wrapper">';

      include "Vistas/modulos/encabezado.php";
    include "Vistas/modulos/menu.php";

    if(isset($_GET['ruta'])){

      if ($_GET['ruta']=="inicio"||
          $_GET['ruta']=="usuarios"||
           $_GET['ruta']=="estados"||
            $_GET['ruta']=="ingresos"||
             $_GET['ruta']=="pagoalquiler"||
               $_GET['ruta']=="proveedores"||
                $_GET['ruta']=="acreedores"||
                 $_GET['ruta']=="deudores"||
                  $_GET['ruta']=="clientes"||
                   $_GET['ruta']=="trabajorealizado"||
                    $_GET['ruta']=="trabajopendiente"||
                     $_GET['ruta']=="estadogarantia"||
                      $_GET['ruta']=="telefonos"||
                       $_GET['ruta']=="electrodomesticos"||
                        $_GET['ruta']=="salir")
                       { 


       include "Vistas/modulos/".$_GET['ruta'].".php"; 
    }
    else {
      include "Vistas/modulos/404.php";
    }
    }
      include "Vistas/modulos/footer.php";
    }
  else{
    echo '<body class="hold-transition sidebar-mini layout-fixed login-page">';

  include "vistas/modulos/login.php";
 }

  
   ?>
<script src="Vistas/js/plantilla.js"></script>
<script src="Vistas/js/usuarios.js"></script>


</body>
</html>
