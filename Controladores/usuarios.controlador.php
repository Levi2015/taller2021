<?php 
class ControladorUsuarios{

	static public function ctrCrearUsuario(){
			if(isset($_POST['nuevoNombre'])){
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevoPassword'])){

/*---------------------------------------------------------------------------------------------------*/
$ruta="";
if(isset($_FILES['nuevaFoto']['tmp_name'])){
 list($ancho, $alto) = getimagesize($_FILES['nuevaFoto']['tmp_name']);
 $nuevoancho = 500;
 $nuevoalto = 500;
//Crear directorio

 $directorio = "Vistas/img/usuarios/".$_POST['nuevoNombre'];
 mkdir($directorio,0755);

//De acuerdo al tipo de imagen se hace el proceso de recorte de la foto

 if($_FILES['nuevaFoto']['type']=="image/jpeg"){
  $aleatorio = mt_rand(100,999);
  $ruta = $directorio."/".$aleatorio.".jpg";
  $origen = imagecreatefromjpeg($_FILES['nuevaFoto']['tmp_name']);
  $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);
  imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
  imagejpeg($destino,$ruta);
  }
 if($_FILES['nuevaFoto']['type']=="image/png"){
  $aleatorio = mt_rand(100,999);
  $ruta = $directorio."/".$aleatorio.".png";
  $origen = imagecreatefrompng($_FILES['nuevaFoto']['tmp_name']);
  $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);
  imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
  imagepng($destino,$ruta);
  }

 }





				$tabla = "usuario";
				$salt= md5($_POST['nuevoPassword']); 
				$passwordEncriptado=crypt($_POST['nuevoPassword'],$salt);
				$datos = array("n_usuario" => $_POST['nuevoNombre'],
					"contrasena" => $passwordEncriptado,
					"Perfil" => $_POST['nuevoPerfil'],
					"ruta"=> $ruta);
				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla,$datos);
				if($respuesta =="ok"){

					echo ("<script>

					Swal.fire({
							  title: 'Success!',
							  text: '¡Registro Exitoso!',
							  icon: 'success',
							  confirmButtonText: 'Ok'
						
							});

				</script>");

				}

			

			}else{
				//echo ('<script>alert ("ingreso");</script>');
				echo ("<script>

					Swal.fire({
							  title: 'Error!',
							  text: '¡No puedes usar caraacteres especiales!',
							  icon: 'error',
							  confirmButtonText: 'Ok'
						
							});

				</script>");
			}


			}
		}

	static public function ctrIngresar(){

		if(isset($_POST['ingUsuario'])){
				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingUsuario'])&&preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingPassword'])){

					$tabla = "usuario";
					$item = "n_usuario";
					$valor= $_POST['ingUsuario'];


						$salt= md5($_POST['ingPassword']); 
				$passwordEncriptado=crypt($_POST['ingPassword'],$salt);


					$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);
					

					if($respuesta['n_usuario']==$_POST['ingUsuario']&&$respuesta['contrasena']==$passwordEncriptado)
					{
						$_SESSION['iniciarSesion']="ok";

						$_SESSION['n_usuario']=$respuesta['n_usuario'];
						
			
						$_SESSION['foto']=$respuesta['foto'];


							echo '<script>

								window.location = "inicio";
							</script>';
			
					}
					else{
						echo("<div class='alert alert-danger'>error al iniciar al sistema</div>");
					}
				}
	}
}
static public function ctrMostrarUsuarios($item,$valor){

	$tabla="usuario";
	$respuesta=ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);
	return $respuesta;
}
}
 ?>