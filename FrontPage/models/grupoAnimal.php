<?php
    //Asignamos el servicio a nuestro modelo
    require_once 'services/animalService.php';

    class GrupoAnimal{
        private $id;
        private $descripcion;

        public function __construct()
        {
            
        }

        //Metodo que nos carga el catalogo de grupo animal
        function getGrupoAnimal(){
            try{
                $animalService = new AnimalService();
    
                $result = $animalService->consultaGrupoAnimal();
        
               return $result;
            }
            catch (Exception $e){
                return 'Ocurrio un problema ' + $e->getMessage();
            }
        }
    }