function pintaCampo(objeto){
    objeto.style.border = "1px solid red"
}

function limpiaCampo(objeto){
    objeto.style.border = "1px solid gray"
}

function cargarContenedor(html){
    let contenedor = document.getElementById('contenedorData');
    contenedor.innerHTML = "";
    contenedor.innerHTML = html;
}

function validaCamposObligatorios(campos){
    let elementos = campos;
    let error = false;

    for(let i = 0; i < elementos.length; i++){
        if(elementos[i].value === "")
        {
            pintaCampo(elementos[i]);
            error = true;
        }
        else
            limpiaCampo(elementos[i]);
    }

    return error;
}

function loadScriptAsync(uri){
    return new Promise((resolve, reject) => {
      var tag = document.createElement('script');
      tag.src = uri;
      tag.async = true;
      tag.onload = () => {
        resolve();
      };
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
   });
  }