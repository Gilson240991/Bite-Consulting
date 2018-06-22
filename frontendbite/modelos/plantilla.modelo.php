<?php 	

require_once "conexion.php";

class ModeloPlantilla{

	static public function mdlEstiloPlantilla($tabla){
		$con = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$con -> execute();

		return $con -> fetch();

		$con -> close();

		$con = null;
	}
}