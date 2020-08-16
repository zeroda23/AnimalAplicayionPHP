<?php
    //Agregamos los repositorios que ocuparemos dentro de nuestros repositorios
    require_once 'repositories/animalRepository.php';
    require_once 'repositories/grupoAnimalRepository.php';

    class AnimalService{
        public function __construct()
        {
            
        }

        //Metodo que manda a llamar el repositorio de insertar datos
        function insertaAnimal($animal, $ubicacion, $habitad, $grupo, $descripcion){
            $animalRepository = new AnimalRepository();
            $id = uniqid();

            $result = $animalRepository->insert($id, $animal, $ubicacion, $habitad, $grupo, $descripcion);

            return $result;
        }
        //Metodo que manda a llamar el repositorio de actualizar datos
        function editarInformacionAniaml($id, $animal, $ubicacion, $habitad, $grupo, $descripcion){
            $animalRepository = new AnimalRepository();

            $result = $animalRepository->update($id, $animal, $ubicacion, $habitad, $grupo, $descripcion);

            return $result;
        }
        //Metodo que manda a llamar el repositorio de eliminar datos
        function eliminaAnimal($id){
            $animalRepository = new AnimalRepository();

            $result = $animalRepository->delete($id);

            return $result;
        }
        //Metodo que manda a llamar el repositorio de consultar datos
        function consultaAnimales(){
            $animalRepository = new AnimalRepository();

            $result = $animalRepository->selectAll();

            return $result;
        }
        //Metodo que manda a llamar el repositorio de consultar datos por id
        function consultaAnimal($id){
            $animalRepository = new AnimalRepository();

            $result = $animalRepository->selectById($id);

            return $result;
        }

        //Metodo que manda a llamar el repositorio de consultar grupos
        function consultaGrupoAnimal(){
            $grupoAnimal = new GrupoAnimalRepository();

            $result = $grupoAnimal->SelectAll();

            return $result;
        }
    }
