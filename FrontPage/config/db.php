<?php

class Database{
	//funcion estatica que nos ayuda a inicializar una conexion  en mysql
	public static function connect(){
		//Conexion a bd
		$db = new mysqli('localhost', 'developer', '', 'animal');
		//indicamos que la codificacion sea utf8
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}