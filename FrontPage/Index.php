<?php
//Pagina de inicio, donde se lleva acabo toda la configuracion de nuestro proyecto
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';

//Si no existe la ruta esta nos manda al controlador de error
function show_error(){
	$error = new errorController();
	$error->index();
}

//Verificamos que nos hayan mandado un controlador por la url y sseguido verificamos que tengamos una accion, de lo contrario mandamos un controlador de error
if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
	
}else{
	show_error();
	exit();
}

//Verificamos si existe el controlador y su action, si no existe mandamos el controlador de error
if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		show_error();
	}
}else{
	show_error();
}

