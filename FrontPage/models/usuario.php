<?php
//Agregamos el servicio de usuario al modelo
require_once 'services/usuarioService.php';

class Usuario{
    private $usuario;
    private $password;

    public function __construct()
    {
        $this->usuario = "";
        $this->password = "";
    }

    //Obtenemos la informacion de nuestras propiedades
    function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    //Asignamos informacion a nuestras propiedades
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    //Metodo que se encarga de validar que el usuario exista en bd
    function login() {
        $usuarioServicio = new UsuarioServicio();
        $result = $usuarioServicio->existeUsuario($this->getUsuario(), $this->getPassword());


        if($result !== NULL){
             $this->setUsuario($result);
             return $this->getUsuario();
        }
        else
            return NULL;
    }
}