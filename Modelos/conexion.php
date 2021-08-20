<?php 
class conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=taller1","root","");
		$link -> exec("set names uto8");
		return $link;
	}
}
 ?>