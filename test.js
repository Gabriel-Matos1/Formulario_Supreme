var campoSenha = document.getElementById('senha');
var mostrarSenhaCheckbox = document.getElementById('mostrarSenha');

mostrarSenhaCheckbox.addEventListener('change', function() {
    if (mostrarSenhaCheckbox.checked) {
        campoSenha.setAttribute('type', 'text');
    } else {
        campoSenha.setAttribute('type', 'password');
    }
});

