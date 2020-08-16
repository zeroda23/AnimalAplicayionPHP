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
    <div style="float: right; width: 70%;">
        <br>
        <table>
            <thead>
                <tr>
                    <th>Animal</th>
                    <th>Ubicacion</th>
                    <th>Habitad natural</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($animal = $animales->fetch_object()): ?>
                    <tr>
                        <td><?=$animal->NombreAnimal?></td>
                        <td><?=$animal->Ubicacion?></td>
                        <td><?=$animal->HabitadNatural?></td>
                        <td class="actions">
                            <a href="<?=base_url?>animal/cargaAnimal&id=<?=$animal->AnimalId?>" ><img src="../images/editIcon.png" title="Editar"/></a>
                            <a href="<?=base_url?>animal/delete&id=<?=$animal->AnimalId?>" ><img src="../images/deleteIcon.png" title="Eliminar" /></a>
                        </td>
                    </tr>
                <?php endwhile; ?>                             
            </tbody>
        </table>
    </div>

<?php
require_once 'layouts/footer.php';
?>
</body>
<script src="../js/globalFunction.js"></script>
<script src="../js/pagesJS/consulta.js"></script>
</html>