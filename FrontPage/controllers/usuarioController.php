<?php 
//Agregamos el modelo al controlador
require_once 'models/usuario.php';

//Controlador que nos permitira mover todo lo que necesitamos del usuario
class usuarioController{
    //Metodo que nos regresa a nuestro login
    public function index(){
            require_once 'views/Index.php';
    }

    //Metodo que realiza el login y verifica si nuestro usuario existe
    public function login(){
        if(isset($_POST)){
            $usuario = new Usuario();
            
            $usuario->setUsuario($_POST['usuario']);
            $usuario->setPassword($_POST['password']);

            $result = $usuario->login();
        
            if($result !== NULL){
                //Creamos nuestra cookie, esta sera consumida en el header
                setcookie("user", $this->getUsua, time() + (86400 * 30));
                header("Location:".base_url."master/index");
            }
            else
            {
                header("Location:".base_url);
            }
                
            
        }
    }

    //Metodo que se ocupa a la hora de cerrar la sesion
    public function cerrarSesion(){
        header("Location:".base_url);
    }
}