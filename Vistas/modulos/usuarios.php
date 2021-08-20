  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">LISTA DE USUARIOS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">TALLER LEVI</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <!--creacion de la tabla usuarios-->

   <div class="box">
        <div class="box-header with-border">
            
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>
        <div class ="box-body">
          
                <table class="table table-striped tabladatatable dt-responsive">
          <thead>
            <tr>
              <th scope="col" width="10px">#</th>
              <!--<th scope="col">Nombre</th>*/-->
              <th scope="col">Usuario</th>
              <th scope="col">Rol</th>
              <th scope="col">Foto</th>
              <th scope="col">Estado</th>
              <th scope="col">Ultima conexion</th>
            </tr>
          </thead>
          <tbody>

            <?php 
            $item=null;
            $valor=null;
            $usuario=ControladorUsuarios::ctrMostrarUsuarios($item,$valor);
            foreach ($usuario as $key => $value) {
              echo '<tr>
              <th scope="row">'.$value['id_usuario'].'</th>
              <td>'.$value['n_usuario'].'</td>
              <td>'.$value['Perfil'].'</td>';
              if ($value["foto"]!="")
              {
                 echo '<td><img src="'.$value['foto'].'" class="img-thumnail" width="40px"></td>';
                
              }
              else{
               echo '<td><img src="vistas/img/user.png" class="img-thumnail" width="40px"></td>';
              }
              
              echo '<td><button class="btn btn-success btn-xs">Activo</button></td>
              <td>05/01/2021</td>
            </tr>';
              # code...
            }
             ?>
           
          </tbody>
        </table>
      </div>

  <!-- /.content modal- -->
 <div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <form role="form" method="post" enctype="multipart/form-data">

    <div class="modal-content">
      <div class="modal-header" style="background: #3c8dbc; color: white;"; >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar usuario</h4>
      </div>
      <div class="modal-body">
         <div class="box-body">
           <div class="form-group">
             <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
             </div>
           </div>
          
           <div class="form-group">
             <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-lock"></i></span>
               <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
             </div>
           </div>
            <div class="form-group">
             <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-lock"></i></span>
               <select class="form-control input-lg" name="nuevoPerfil">
                 <option value="">Seleccionar Perfil</option>
                 <option value="Administrador">Administrador</option>
                 <option value="Especial">Especial</option>
                 <option value="vendedor">Vendedor</option>
               </select>
             </div>
           </div>
            <div class="form-group">
             <div class="panel">SUBIR FOTO</div>
             <input type="file" class="nuevaFoto" name="nuevaFoto" class="center-block">
             <p class="center-block">Peso maximo de la foto 200Mb</p>
             <img src="vistas/img/user.png" class="thumbnail center-block previsualizar" width="100px">
            </div>

         </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>


 

    <?php
      $crearUsuario = new ControladorUsuarios();
      $crearUsuario ->ctrCrearUsuario();

    ?>
  </form>

        </div>  
  </div>
  <!-- /.content-wrapper -->
 