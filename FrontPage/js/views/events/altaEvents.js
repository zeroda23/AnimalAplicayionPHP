var addAltaEvents = function(){
    let guardar = document.getElementById('guardar');

    guardar.addEventListener('click', function(e){
     
        let elementos = document.getElementsByClassName('requerido');
        let error = false;
        error = validaCamposObligatorios(elementos);

        if(error){
            alert('Es necesario llenar los datos obligatorios');
            e.preventDefault();
            return false
        }
    });
}


function limpiaCampos(){
    let nombre = document.getElementById('nombre');
    let ubicacion = document.getElementById('ubicacion');
    let habitadNatural = document.getElementById('habitadNatural');
    let grupoAnimal = document.getElementById('grupoAnimal');
    let descripcion = document.getElementById('descripcion');

    nombre.value = "";
    ubicacion.value = "";
    habitadNatural.value = "";
    descripcion.value = "";
}