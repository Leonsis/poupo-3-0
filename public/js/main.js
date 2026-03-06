// JavaScript para alternar a visibilidade da senha.
const elementEye = document.querySelectorAll('.eye');
elementEye.forEach(function (eye) {

    eye.addEventListener('click', function() {
        
        input = eye.previousElementSibling; // Seleciona o input anterior ao ícone de olho
        input.type = (input.type === "password" ? "text" : "password");
    });
});

// Mascara para o iten de valor da table
document.querySelectorAll('.inputValor').forEach(function(input) {
    
    input.addEventListener('input', function(e) {

        var value = e.target.value.replace(/\D/g, '');

        if(value === '') {
            e.target.value = '';
            return;
        }
        
        value = (value / 100).toFixed(2) + '';
        value = value.replace('.', ',');
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

        e.target.value = "R$ " + value;
    });
});