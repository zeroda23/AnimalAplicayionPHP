<?php

//Clase de repositorio, esta clase tiene la funcionalidad de gestionar el llamado a bd
class GrupoAnimalRepository{
    private $db;

    //Contructor, inicializamos la conexion a bd
    public function __construct()
    {
        $this->db = Database::connect();
    }

    //Seleccionamos registros de la bd
    function SelectAll(){
        $sql = "SELECT * FROM catgrupoanimal";

        $catalogo = $this->db->query($sql);       

        return $catalogo;
    }
}