function ValidarRegistro(registrouser) {
    var er_nombre = /^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/
    var er_apellido = /^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/
    var er_CorreoRegistro = /^(.+\@.+\..+)$/
    if (registrouser.documento.value == "" || registrouser.documento.value == " ") {
        alert("Debe registrar el documento");
        registrouser.documento.focus();
        return false;
    }
    if (registrouser.nombre.value == "" || registrouser.nombre.value == " ") {
        alert("Debe registrar los nombres");
        registrouser.nombre.focus();
        return false;
    }
    if (!er_nombre.test(registrouser.nombre.value)) {
        alert("El campo de nombres solo admite letras");
        registrouser.nombre.focus();
        registrouser.nombre.value = "";
        return false;
    }
    if (registrouser.apellido.value == "" || registrouser.apellido.value == " ") {
        alert("Debe registrar los apellidos");
        registrouser.apellido.focus();
        return false;
    }
    if (!er_apellido.test(registrouser.apellido.value)) {
        alert("El campo de apellidos de registro solo admite letras");
        registrouser.apellido.focus();
        registrouser.apellido.value = "";
        return false;
    }
    if (registrouser.direccion.value == "" || registrouser.direccion.value == " ") {
        alert("Debe registrar la direccion");
        registrouser.direccion.focus();
        return false;
    }
    if (registrouser.telefono.value == "" || registrouser.telefono.value == " ") {
        alert("Debe registrar el telefono");
        registrouser.telefono.focus();
        return false;
    }
    if (registrouser.ciudad.selectedIndex == 0) {
        alert("Debe seleccionar una ciudad");
        registrouser.ciudad.focus();
        return false;
    }
    if (confirm("Desea seguir con el registro?")) {
        registrouser.submit();
    }
}

function ValidarAcceso(acceso) {
    if (acceso.documento.value == "" || acceso.documento.value == " ") {
        alert("Debe registrar el campo documento");
        acceso.documento.focus();
        return false;
    } else {
        acceso.submit();
    }
}