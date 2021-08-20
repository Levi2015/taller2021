<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="Vistas/img/logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ELECTRONICA LEVI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <?php 
            if ($_SESSION['foto']!="")
            {

              echo '<img src="'.$_SESSION["foto"].'" class="img-circle elevation-2" alt="User Image">';
             
             } else
              {
                echo '<img src="Vistas/img/levi.jpg" class="img-circle elevation-2" alt="User Image">';
              }
            

           ?>
          
        </div>
        <div class="info">

          <?php 
            if ($_SESSION['n_usuario']!="")
            {

              echo '<a class="d-block">'.$_SESSION['n_usuario'].'</a></div>';
            }

              else
              {
                echo '<a href="#" class="d-block"> Nombre de usuario </a></div>';
              }
           ?>

        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
         <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                USUARIOS
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="estados" class="nav-link">
              <i class="nav-icon fas fa-toggle-off"></i>
              <p>
                ESTADOS
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                ADMINISTRACIÓN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ingresos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pagoalquiler" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pago Alquiler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="proveedores" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="acreedores" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Acreedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deudores" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deudores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="clientes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hammer"></i>
              <p>
                SERVICIOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="trabajorealizado" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trabajos Realizados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="trabajopendiente" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trabajos Pendientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="estadogarantia" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado de Garantía</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                REPUESTO EXISTENTE
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="telefonos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dispositivos Móviles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="electrodomesticos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Electrodomesticos</p>
                </a>
              </li>
              
            </ul>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>