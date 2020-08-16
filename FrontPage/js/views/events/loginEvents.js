var addEvents = function(){
    let button = document.getElementById('iniciaSesion');

    button.addEventListener('click', function(e){
       
        let error = document.getElementById('error');
        let usuario = document.getElementById('usuario');
        let password = document.getElementById('password');
        let result = "";
        result = VerifyData(usuario, password);

        if(result !== ""){  
            e.preventDefault();     
            error.innerHTML = result;
            return false;
        }

    });
}

function VerifyData(usuario, password){
 let error = "";
    if(usuario.value === ""){
        error = "* El usuario es obligatorio <br>";
        pintaCampo(usuario);
    }
    else
        limpiaCampo(usuario);

    if(password.value === ""){
        error += "* El password es obligatorio"
        pintaCampo(password);
    }
    else
        limpiaCampo(password);


    return error;
}