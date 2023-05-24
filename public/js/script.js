// Função executada quando o documento estiver pronto
$(document).ready(function() {
    // Função para manipular o formulário de novo carregamento
    $("#form-novo-carregamento").submit(function(event) {
      event.preventDefault(); // Impede o envio do formulário
  
      // Obtém os dados do formulário
      var data = $("#data").val();
  
      // Realiza uma requisição AJAX para criar um novo carregamento
      $.ajax({
        url: "/carregamentos",
        method: "POST",
        data: { data: data },
        success: function(response) {
          // Redireciona para a página de listagem de carregamentos
          window.location.href = "/carregamentos";
        },
        error: function(error) {
          // Exibe uma mensagem de erro
          alert("Ocorreu um erro ao criar o carregamento.");
        }
      });
    });
  
    // Função para manipular a exclusão de um carregamento
    $(".btn-excluir-carregamento").click(function() {
      var carregamentoId = $(this).data("carregamento-id");
  
      // Realiza uma requisição AJAX para excluir o carregamento
      $.ajax({
        url: "/carregamentos/" + carregamentoId,
        method: "DELETE",
        success: function(response) {
          // Atualiza a página para refletir a exclusão do carregamento
          window.location.reload();
        },
        error: function(error) {
          // Exibe uma mensagem de erro
          alert("Ocorreu um erro ao excluir o carregamento.");
        }
      });
    });
  
    // Outras funções e manipulações do DOM podem ser adicionadas aqui
  });
  