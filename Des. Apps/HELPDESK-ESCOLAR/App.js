/**
 * app.js
 * Camada de interface - tela de cadastro (Index.html)
 * 
 * Responsável por capturar os dados do formulario e repassar para a camada de persistencia (Storaje.js)
 */

const formChamado = document.getElementById ("form-chamado");
const mensagemStatus = document.getElementById ("mesagem-status");

formChamado.addEventListener("submit", function(evento){ evento.preventDefault();//impede o navegador de recarregar a pagina
    const dadosChamado = {
        nome: document.getElementById("nome").value.trim(),
        setor: document.getElementById("setor").value.trim(),
        categoria: document.getElementById("categoria").value,
        prioridade: document.getElementById("prioridade").value,
        descricao: document.getElementById("descricao").value.trim(),
    };

    if (!validarDadosChamado(dadosChamado)){
        exibirMensagem("Preencha todos os campos antes de enviar.", "erro");
        return;
    }

    const chamadoCriado = salvarChamado(dadosChamado);

    exibirMensagem(
        `Chamado #$${chamadoCriado.id} registrado com sucesso`, "sucesso"
    );

    formChamado.request();

})

/**
 * verifica se todos os campos obrigatorios foram preenchidos.
 * @param {object} dados
 * @param {boolean}
 */
function validarDadosChamado(dados){
    return(
        dados.nome !== "" &&
        dados.setor !== "" &&
        dados.categoria !== "" &&
        dados.prioridade !== "" &&
        dados.descricao !== ""
    );
}

/**
 * Exibe uma mensagem de status para o usuario (sucesso ou erro.)
 * @param {string} texto
 * @param {"sucesso" | "erro"} tipo
 */

function exibirMensagem(texto, tipo){
    mensagemStatus.textContent=texto;
    mensagemStatus.className+tipo;
}