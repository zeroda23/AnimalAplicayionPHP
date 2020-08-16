<!DOCTYPE html>
<html>
    <head>
        <link href="../css/styles.css" type="text/css" rel="stylesheet" />
        <title>Bienvenido</title>
        <link rel="shortcut icon" href="../images/icono.png"/>
    </head>
    <body>
<?php
require_once 'layouts/header.php';
require_once 'layouts/menu.php';
?>
<div>
<form action="<?=base_url?>animal/actualizaAnimal" method="POST">
    <input id="guardar" type="submit" value="Guardar" style="float: right;" />
    <br><br>
    <div id="contenedorAlta">
        <div class="contenedorIzquierda">      
                <input type="hidden" name="animalId" value="<?=$animal->AnimalId?>" />    
                <label for="nombre">Nombre</label>
                <br>
                <input id="nombre" name="nombre" type="text" placeholder="Ingresa el nombre del animal" class="requerido" value="<?=$animal->NombreAnimal?>" />

                <br>
                <label for="ubicacion">Ubicación</label>
                <br>
                <input id="ubicacion" name="ubicacion" type="text" placeholder="Ingresar la ubicación de los animales" class="requerido" value="<?=$animal->Ubicacion?>" />

                <br>
                <label for="habitadNatural">habitad natural</label>
                <br>
                <input id="habitadNatural" name="habitadNatural" type="text" placeholder="Ingresar la habitad natural" class="requerido" value="<?=$animal->HabitadNatural?>"/>

                <br>
                <label for="grupoAnimal">Grupo animal</label>
                <br>
                <select id="grupoAnimal" name="grupoAnimal" value="<?=$animal->GrupoAnimal?>">
                    <?php while($grupoObj = $gruposAnimal->fetch_object()): ?>
                        <option value="<?=$grupoObj->GrupoId?>"><?=$grupoObj->Descripcion?>
                        </option>
                    <?php endwhile; ?>
                </select>
                
                <br><br>
                <label for="descripcion">Descripcion</label>
                <br>
                <textarea id="descripcion" class="requerido" name="descripcion" >
                    <?=$animal->Descripcion?>
                </textarea>
            </div>  
    </div>
</form>
</div>

<?php
require_once 'layouts/footer.php';
?>
</body>
<script src="../js/globalFunction.js"></script>
    <script src="../js/views/events/altaEvents.js"></script>
    <script src="../js/pagesJS/alta.js"></script>
</html>

