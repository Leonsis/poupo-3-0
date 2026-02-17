// JavaScript para alternar a visibilidade da senha.
const elementEye = document.querySelectorAll('.eye');
elementEye.forEach(function (eye) {

    eye.addEventListener('click', function() {
        
        input = eye.previousElementSibling; // Seleciona o input anterior ao ícone de olho
        input.type = (input.type === "password" ? "text" : "password");
    });
});