// Validación del formulario antes de enviarlo
function validarFormulario() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var errorMessage = document.getElementById("error-message");

    // Limpiar mensaje de error
    errorMessage.innerText = "";

    // Verificación simple
    if (username === "" || password === "") {
        errorMessage.innerText = "Por favor, complete todos los campos";
        return false;
    }

    return true;
}
