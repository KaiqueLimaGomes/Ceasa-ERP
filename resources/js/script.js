// Importação das dependências
import axios from 'axios';

// Função para carregar os dados dos produtores
function carregarProdutores() {
  axios.get('/produtores')
    .then(response => {
      // Processar os dados dos produtores
      const produtores = response.data;
      // Fazer algo com os produtores carregados
    })
    .catch(error => {
      console.error('Erro ao carregar os produtores:', error);
    });
}

// Função para realizar uma venda
function realizarVenda(verdura, quantidade, valor, localEntrega, observacao) {
  axios.post('/vendas', {
    verdura: verdura,
    quantidade: quantidade,
    valor: valor,
    localEntrega: localEntrega,
    observacao: observacao
  })
    .then(response => {
      // Venda realizada com sucesso
      // Fazer algo com a resposta do servidor, se necessário
    })
    .catch(error => {
      console.error('Erro ao realizar a venda:', error);
    });
}

// Função para excluir uma venda
function excluirVenda(vendaId) {
    axios.delete(`/vendas/${vendaId}`)
      .then(response => {
        // Venda excluída com sucesso
        // Fazer algo com a resposta do servidor, se necessário
      })
      .catch(error => {
        console.error('Erro ao excluir a venda:', error);
      });
  }
  
  // Função para editar uma venda
  function editarVenda(vendaId, dados) {
    axios.put(`/vendas/${vendaId}`, dados)
      .then(response => {
        // Venda editada com sucesso
        // Fazer algo com a resposta do servidor, se necessário
      })
      .catch(error => {
        console.error('Erro ao editar a venda:', error);
      });
  }

  // Função para carregar os dados do estoque
function carregarEstoque() {
    axios.get('/estoque')
      .then(response => {
        // Dados do estoque carregados com sucesso
        const estoque = response.data;
        
        // Fazer algo com os dados do estoque, como atualizar a interface
        
      })
      .catch(error => {
        console.error('Erro ao carregar o estoque:', error);
      });
  }
  
  // Função para realizar a venda de um produto
  function venderProduto(produtoId, quantidade, valor) {
    const dados = {
      produto_id: produtoId,
      quantidade,
      valor
    };
  
    axios.post('/vendas', dados)
      .then(response => {
        // Venda realizada com sucesso
        // Fazer algo com a resposta do servidor, se necessário
        
        // Atualizar o estoque após a venda
        carregarEstoque();
      })
      .catch(error => {
        console.error('Erro ao realizar a venda:', error);
      });
  }
  
  