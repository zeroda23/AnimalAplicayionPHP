<?php

//Clase de repositorio, esta clase tiene la funcionalidad de gestionar el llamado a bd
class AnimalRepository{
    private $db;

    //Contructor, inicializamos la conexion a bd
    public function __construct()
    {
        $this->db = Database::connect();
    }

    //Insertamos datos a la bd
    function insert($id, $animal, $ubicacion, $habitad, $grupo, $descripcion){
        $result = false;
        $sql = "INSERT INTO animales VALUES ('$id','$animal','$ubicacion','$habitad','$grupo', '$descripcion')";

        $save = $this->db->query($sql);

        if($save)
            $result = true;

        return $result;
    }

    //Actualizamos datos en la bd
    function update($id, $animal, $ubicacion, $habitad, $grupo, $descripcion){
        $result = false;

        $sql = "UPDATE animales SET ";
        $sql .= "NombreAnimal = '$animal', ";
        $sql .= "Ubicacion = '$ubicacion', ";
        $sql .= "HabitadNatural = '$habitad', ";
        $sql .= "GrupoAnimal = '$grupo', ";
        $sql .= "Descripcion = '$descripcion' ";
        $sql .= "Where AnimalId = '$id' ";

        $update = $this->db->query($sql);
        var_dump($update);
        var_dump($sql);
        if($update)
            $result = true;

        return $result;
    }

    //Eliminamos registro en la bd dependiendo su id
    function delete($id){
        $result = false;
		$sql = "DELETE FROM animales WHERE AnimalId = '$id'";
		$delete = $this->db->query($sql);

		if($delete){
			$result = true;
		}
		return $result;
    }

    //Seleccionamos registros de la bd
    function selectAll(){
        $sql = "SELECT * FROM animales";
        
        $animales = $this->db->query($sql);
        
		return $animales;
    }

    //Seleccionamos un registro de la bd, dependiendo su id
    function selectById($id){
		$sql = "SELECT * FROM animales "
                . "WHERE AnimalId = '$id'";
                
		$animal = $this->db->query($sql);
		return $animal->fetch_object();
    }
}