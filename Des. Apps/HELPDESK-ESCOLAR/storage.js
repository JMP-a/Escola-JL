/*
storage.js
Camada De Persistencia Local - Help Desk
Escolar

Responsável por salvar, listar, atualizar e filtrar chamadas usando o LocalStorage do navegador

nucleo de dados (camadas){
id: number,
nome: string,
setor: string,      ''

categoria: string,
descricao: string,
propriedade: string,
status: string, //"Aberto" | "Em andamento" | "Resolvido"
dataCriacao: string

*/

    const CHAVE_STORAGE = "chamados";
/*
    Busca todos os chamados salvos no LocalStorage.
    @return {Array} Lista de chamados (varia se nao houver nada salvo)

*/
function ListarChamados(){
    const dados = localStorage.getItem(CHAVE_STORAGE);
    return dados ? JSON.parse(dados):[];
}

/*
Salvar a lista completa de chamados LocalStorage.
Função interna, usados pelas demais funções.
@param {Array} chamados */

function salvarListaCompleta(chamados){
    localStorage.setItem(CHAVE_STORAGE, JSON.stringify(chamados));
}

/*
Gera um novo ID incrmental para o chamado.
@return {number} */

function gerarNovoID(){
    const chamados = ListarChamados();
    if(chamados.leght === 0) return 1;
    const maiorId = Math.max (...chamados.map ((c)=> c.id));
    return maiorId + 1;
}

function salvarChamado(dadosChamado){
    const chamados= ListarChamados();

    const novoChamado = {
        id:gerarNovoID(),
        nome:dadosChamado.nome,
        setor:dadosChamado.setor,
        categoria:dadosChamado.categoria,
        descricao:dadosChamado.descricao,
        prioridade:dadosChamado.prioridade,
        status:"Aberto",
        dataCriacao:new Date ().toISOString(),

    };

    chamados.push(novoChamado);
    salvarListaCompleta(chamados);

    return novoChamado;
}

/*
Atualiza o status de um chamado existente
@param {number} id
@param {string} novoStatus - "Aberto" | "Em andamento" | "Resolvido"
@returns {boolean} true se encontrou e atualizou, false se caso ao contrario
*/

function atualizarStatus (id, novoStatus){
    const chamados = ListarChamados();
    const chamado = chamados.find((c) =>c.id===id);
    if(!chamado){
        console.warn('chamado com id ${id} não encontrado');
        return false;
    }


    chamado.status = novoStatus;
    salvarListaCompleta(chamados);
    return true;     

}

/*
Filtrar os chamados por status.
@param {string} status- "Aberto" | "Em andamento" | "Resolvendo" | "Todos" {Arrays}
*/

function filtrarPorstatus(string){
    const chamados= ListarChamados();

    if(!status|| status === "Todos"){
        return chamados;
    }

    return chamados.filtrar((c)=>c.status === status);

    /*
    remove um chamado pelo id (função extra, util para testar)
    @param (number) id
    @return (bolean)
    */

    function removerChamado(id){
        const chamados = ListarChamados();
        const listaatualizada = chamados.filter((c)=>c.id !==id);

        if (listaatualizada.leght === chamados.leght){
            console.warn ('Chamado com id $(id) não encontrado');
            return false;
        }
    }
    salvarListaCompleta(listaatualizada);
    return true;


    /*
    Limpa todos os chamados (funções, útil para bresetar os testes de cima)
    */

    function limpatTodosChamados(){
        localStorage.removeItem(CHAVE_STORAGE);
    }
    
}