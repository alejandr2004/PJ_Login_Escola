/*  
---- VALIDA USERNAME ----
- Que el campo no esté vacío
- Que el campo no tenga menos de 3 cc
- Que el campo no sea un numero
- No debe contener cc especiales
- Si todo OK se limpia el campo
*/
function ValidaUserName() {
    let username = document.getElementById('usuario').value;
    let errorUser = document.getElementById('error_user');

    if (username === "") {
        errorUser.innerHTML = "El campo no tiene que estar vacío";
        return false;
    } else if (username.length < 3) {
        errorUser.innerHTML = "El campo tiene que tener más de 3 carácteres";
        return false;
    } else if (!isNaN(username)) {
        errorUser.innerHTML = "El campo no tiene que ser un número";
        return false;
    } else if (!/^[a-zA-Z]+$/.test(username)) {
        errorUser.innerHTML = "El campo no tiene que tener carácteres especiales";
        return false;
    } else {
        errorUser.innerHTML = "";
        return true;
    }
}
/*
---- VALIDA PASSWORD ----
- Que el campo no esté vacío
- Que la contraseña tenga min 8cc
- Que contenga numeros y letras
-- Si todo OK se limpia
*/

function ValidaPsswd() {
    let psswd = document.getElementById('password').value;
    let errorPsswd = document.getElementById('error_psswd');

    if (psswd === "") {
        errorPsswd.innerHTML = "El campo no puede estar vacío";
        return false;
    } else if (psswd.length < 8) {
        errorPsswd.innerHTML = "El campo debe contener como mínimo 8 carácteres";
        return false;
    } else if (!/[a-zA-Z0-9]+$/.test(psswd)) {
        errorPsswd.innerHTML = "El campo debe contener solo números y letras";
        return false;
    } else {
        errorPsswd.innerHTML = "";
        return true;
    }

}

function ValidaForm() {
    return ValidaUserName() && ValidaPsswd();
}



