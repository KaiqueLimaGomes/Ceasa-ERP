// Scripts para Dispositivos Móveis

// Mostrar/Esconder menu mobile
document.querySelector(".menu-mobile").addEventListener("click", function () {
    document.querySelector(".menu").classList.toggle("ativo");
});

// Expandir/Contrair seções
document.querySelectorAll(".secao .titulo").forEach(function (titulo) {
    titulo.addEventListener("click", function () {
        this.parentNode.classList.toggle("expandido");
    });
});

// Validação do formulário de cadastro
document
    .querySelector("#formulario-cadastro")
    .addEventListener("submit", function (evento) {
        var inputs = this.querySelectorAll("input");
        var validacao = true;
        inputs.forEach(function (input) {
            if (input.value === "") {
                validacao = false;
                input.classList.add("erro");
            }
        });

        if (!validacao) {
            evento.preventDefault();
        }
    });

// Função para realizar uma ação específica
function minhaFuncao() {
    // Código da função
}
