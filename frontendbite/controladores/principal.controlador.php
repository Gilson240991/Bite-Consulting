<?php 	

class ControladorPrincipal{

/*=============================================
LLAMAMOS LA PLANTILLA PRINCIPAL
=============================================*/

public function plantilla(){

	include "vistas/principal.php";

}

/*=============================================
TRAEMOS LOS ESTILOS DINÁMICOS DE LA PLANTILLA
=============================================*/

public function ctrEstiloPlantilla(){

	$tabla = "plantilla";

	$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

	return $respuesta;
}

}