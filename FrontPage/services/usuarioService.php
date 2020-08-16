<?php
require_once 'repositories/usuarioRepository.php';

class UsuarioServicio{

    public function __construct()
    {
        
    }

    function existeUsuario($usuario, $password){
        $usuarioRepository = new UsuarioRepository();

        $result = $usuarioRepository->getUserLogin($usuario, $password);
  
        if($result === NULL)
            return NULL;

        $usuario = $result->NombreUsuario;
       
        return $usuario;
    }
}