<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="inicio" class="nav-link">Inicio</a>
      </li>
      
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="nav-icon fas fa-users fa-2x"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <?php 
          if($_SESSION['n_usuario']!=""){
            echo ' <span class="dropdown-item dropdown-header">'.$_SESSION["n_usuario"].'</span>';
          }else{
            echo '<span class="dropdown-item dropdown-header">Nombre de Usuario</span>';  
          }
          ?>
         
          <div class="dropdown-divider"></div>
          <a href="salir" class="dropdown-item">
            <i class="fas fa-user-times"></i> Cerrar Sesión
            <span class="float-right text-muted text-sm">Activa</span>
          </a>
         
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

