function validar() {
//                alert("envia");
    var nuevaImagen = document.getElementById('ubicacion').value;
    if (nuevaImagen === '') {
        alert("coloque el nombre del archivo y su extension, ej: <strong>cliente12.png</strong>"); 
    }
    else {
        document.getElementById('nuevaImg').submit();
    }
}

function editar(id_texto) {
    document.getElementById('id_texto').value = id_texto;
    document.getElementById('form2').submit();
}

function borrar(BorrarTexto) {
    document.getElementById('id_pagina').value = BorrarTexto;
    window.alert('Si está seguro de borrar, pulse aceptar');
    document.getElementById('form3').submit();
}

function editar2(id_imagen) {
    document.getElementById('id_imagen').value = id_imagen;
    document.getElementById('form4').submit();
}

function borrar2(Borrarcodigo) {
    document.getElementById('Borrarcodigo').value = Borrarcodigo;
     window.alert('Si está seguro de borrar, pulse aceptar');
    document.getElementById('form5').submit();
}

function editar3(id_art){
    document.getElementById('id_art').value= id_art;
    document.getElementById('form6').submit();
}

function borrar3(id_art){
     document.getElementById('id_art').value= id_art;
    document.getElementById('form7').submit();
}

function editar4(id_art){
    document.getElementById('id_art').value = id_art;
    document.getElementById('form8').submit();
}

function actuar()
{
    var nombretexto = document.getElementById('nombretexto').value;
    if(nombretexto === ''){
        alert("coloque un dato");
    }
    else{
        document.getElementById('actualizacion').submit();
    }
}

function ver(numeroArticulo)
{
    document.getElementById('numeroArticulo').value=numeroArticulo;
    document.getElementById('articulo1').submit();
}