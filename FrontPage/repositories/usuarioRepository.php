<?php
//Clase de repositorio, esta clase tiene la funcionalidad de gestionar el llamado a bd
class UsuarioRepository{
    private $db;

    //Contructor, inicializamos la conexion a bd
    public function __construct()
    {
        $this->db = Database::connect();
    }

    //Seleccionamos un registro dependiendo el usuario y la contraseña
    function getUserLogin($usuario, $password){
        $result = null;
        $sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$usuario' and Password = '$password'";

        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1){
            $result = $login->fetch_object();
        }

        return $result;
    }
}