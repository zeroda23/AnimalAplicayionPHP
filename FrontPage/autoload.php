<?php

//Con el autoload nos permite un tipo de gestion sobre nuestros controladores
function controllers_autoload($classname){
	include 'controllers/' . $classname . '.php';
}

spl_autoload_register('controllers_autoload');