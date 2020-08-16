<?php
    //Agregamos los servicios a nuestro modelo
    require_once 'services/animalService.php';

class Animal{
    private $animalId;
    private $nombreAnimal;
    private $ubicacion;
    private $habitadNatural;
    private $grupoAnimal;
    private $descripcion;
    private $imagen;

    //Constructor de la clase
    public function __construct()
    {
        
    }

    //Obtención de nuestras propiedades
    function getAnimalId(){
        return $this->animalId;
    }

    function getNombreAnimal(){
        return $this->nombreAnimal;
    }

    function getUbicacion(){
        return $this->ubicacion;
    }

    function getHabitadNatural(){
        return $this->habitadNatural;
    }

    function getGrupoAnimal(){
        return $this->grupoAnimal;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function getImagen(){
        return $this->imagen;
    }

    //Agregación de valor de nuestras propiedades
    function setAnimalId($animalId){
        $this->animalId = $animalId;
    }

    function setNombreAnimal($nombreAnimal){
        $this->nombreAnimal = $nombreAnimal;
    }

    function setUbicacion($ubicacion){
        $this->ubicacion = $ubicacion;
    }

    function setHabitadNatural($habitadNatural){
        $this->habitadNatural = $habitadNatural;
    }

    function setGrupoAnimal($grupoAnimal){
        $this->grupoAnimal = $grupoAnimal;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    //Validacion de datos
    function ValidaDatos(){
        $result = "";
        if($this->getNombreAnimal() === "")
            $result .= "El animal no puede ir vacio <br>";

        if($this->getUbicacion() === "")
            $result .= "La ubicacion no puede ir vacia <br>";

        if($this->getHabitadNatural() === "")
            $result .= "El habitad no puede ir vacio <br>";

        if($this->getGrupoAnimal() === "")
            $result .= "El grupo animal no puede ir vacio <br>";

        if($this->getDescripcion() === "")
            $result .= "La descripcion no puede ir vacia <br>";
        
        return $result;
    }

    //Validacion de id
    function ValidaId(){
        $result = "";
        if($this->getAnimalId() === "")
            $result .= "El id del animal no puede ir vacio <br>";

        return $result;
    }

    //Metodo que inserta en base de datos
    function CreateAnimal(){
        try{
            $animalService = new AnimalService();

            $result = $animalService->insertaAnimal(
                $this->getNombreAnimal(),
                $this->getUbicacion(),
                $this->getHabitadNatural(),
                $this->getGrupoAnimal(),
                $this->getDescripcion()
            );
    
            if($result)
                return 'El usuario se inserto de manera correcta';
            else 
                return 'Ocurrio un problema, de favor intentelo más tarde';
        }
        catch (Exception $e){
            return 'Ocurrio un problema ' + $e->getMessage();
        }        
    }

    //Metodo que actualiza la informacion en bd
    function UpdateAnimal(){
        try{
            $animalService = new AnimalService();
            var_dump($this->getAnimalId());
            $result = $animalService->editarInformacionAniaml(
                $this->getAnimalId(),
                $this->getNombreAnimal(),
                $this->getUbicacion(),
                $this->getHabitadNatural(),
                $this->getGrupoAnimal(),
                $this->getDescripcion()
            );
    
            if($result)
                return 'El usuario se actualizo de manera correcta';
            else 
                return 'Ocurrio un problema, de favor intentelo más tarde';
        }
        catch (Exception $e){
            return 'Ocurrio un problema ' + $e->getMessage();
        }
    }

    //Metodo que elimina un animal de la bd
    function DeleteAnimal(){
        try{
            $animalService = new AnimalService();

            $result = $animalService->eliminaAnimal(
                $this->getAnimalId()
            );
    
            if($result)
                return 'El usuario se elimino de manera correcta';
            else 
                return 'Ocurrio un problema, de favor intentelo más tarde';
        }
        catch (Exception $e){
            return 'Ocurrio un problema ' + $e->getMessage();
        }
    }

    //Metodo que carga todos los animales
    function GetAnimals(){
        try{
            $animalService = new AnimalService();

            $result = $animalService->consultaAnimales();
    
           return $result;
        }
        catch (Exception $e){
            return 'Ocurrio un problema ' + $e->getMessage();
        }
    }

    //Metodo que obtiene un animal dependiendo su id
    function GetAnimal(){
        try{
            $animalService = new AnimalService();

            $result = $animalService->consultaAnimal(
                $this->getAnimalId()
            );
    
           return $result;
        }
        catch (Exception $e){
            return 'Ocurrio un problema ' + $e->getMessage();
        }
    }
}