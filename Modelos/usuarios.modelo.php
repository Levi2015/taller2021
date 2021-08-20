<?php 
require_once "conexion.php";

class ModeloUsuarios {
	static public function mdlMostrarUsuarios($tabla,$item,$valor)
	{
		if ($item!=null){


			$stmt = conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item,$valor,PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
			}
			else
			{
			$stmt = conexion::conectar() -> prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
			}
			$stmt ->close();
			$stmt= null;

	}

		static public function mdlIngresarUsuario ($tabla,$datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(n_usuario, contrasena, Perfil, foto) VALUES (:n_usuario, :contrasena, :Perfil,:foto)");


		$stmt -> bindParam(":n_usuario", $datos["n_usuario"],PDO::PARAM_STR);
		$stmt -> bindParam(":contrasena", $datos["contrasena"],PDO::PARAM_STR);
		$stmt -> bindParam(":Perfil", $datos["Perfil"],PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["ruta"],PDO::PARAM_STR);
		
		if($stmt->execute()){
					
				return "ok";
		}else{
				
				return "error";

		}

		$stmt = null;
	}

}
 ?>