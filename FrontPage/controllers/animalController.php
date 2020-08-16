<?php
    //Agregamos el modelo al controlador
    require_once 'models/animal.php';
    require_once 'models/grupoAnimal.php';

class AnimalController{
    private $animal;

    //Metodo del controlador que nos  lleva a la pagina de alta
    public function crear(){
        $grupoAnimal = new GrupoAnimal();

        $gruposAnimal = $grupoAnimal->getGrupoAnimal();

        require_once 'views/Alta.php';
    }

    //Metodo que utilizamos para insertar un animal
    public function insertaAnimal(){
        if(isset($_POST)){
            $this->animal = new Animal();

            $this->animal->setNombreAnimal($_POST['nombre']);
            $this->animal->setUbicacion($_POST['ubicacion']);
            $this->animal->setHabitadNatural($_POST['habitadNatural']);
            $this->animal->setGrupoAnimal($_POST['grupoAnimal']);
            $this->animal->setDescripcion($_POST['descripcion']);

            $valida = $this->animal->ValidaDatos();

            if($valida === ""){
                $result = $this->animal->CreateAnimal();
                
                header("Location:".base_url."animal/consulta");
            }
            else{
                var_dump($valida);
            }
        }
    }

     //Metodo que utilizamos para actualizar un animal
    public function actualizaAnimal(){
        if(isset($_POST)){
            $this->animal = new Animal();

            $this->animal->setAnimalId($_POST['animalId']);
            $this->animal->setNombreAnimal($_POST['nombre']);
            $this->animal->setUbicacion($_POST['ubicacion']);
            $this->animal->setHabitadNatural($_POST['habitadNatural']);
            $this->animal->setGrupoAnimal($_POST['grupoAnimal']);
            $this->animal->setDescripcion($_POST['descripcion']);

            $valida = $this->animal->ValidaDatos();

            if($valida === ""){
                $result = $this->animal->UpdateAnimal();
                
                header("Location:".base_url."animal/consulta");  
            }
            else{
                var_dump($valida);
            }          
        }
    }

     //Metodo que utilizamos para consultar todos los animales existentes
    public function consulta(){
        $this->animal = new Animal();
        $animales = $this->animal->GetAnimals();

        
        require_once 'views/Consulta.php';
    }

     //Metodo que utilizamos para cargar un animal por su id
    public function cargaAnimal(){
        //require_once 'views/Alta.php';
        if(isset($_GET)){

            $this->animal = new Animal();
            $this->animal->setAnimalId($_GET['id']);
            $animal = $this->animal->GetAnimal();

            
            $grupoAnimal = new GrupoAnimal();

            $gruposAnimal = $grupoAnimal->getGrupoAnimal();

            require_once 'views/Actualiza.php';
        }
    }

    //Metodo que utilizamos para eliminar un animal por su id
    public function delete(){
        if(isset($_GET['id'])){
            $this->animal = new Animal();

            $this->animal->setAnimalId($_GET['id']);
            $result = $this->animal->DeleteAnimal();           

            header("Location:".base_url."animal/consulta");
        }     
        else        
            header("Location:".base_url."error/index");
    }
}