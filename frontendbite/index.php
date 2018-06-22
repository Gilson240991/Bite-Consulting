<?php 	

require_once 'controladores/principal.controlador.php';
require_once "modelos/plantilla.modelo.php";
require_once "controladores/slide.controlador.php";
require_once "modelos/slide.modelo.php";
require_once "modelos/rutas.php";


$principal = new ControladorPrincipal();

$principal->plantilla();


