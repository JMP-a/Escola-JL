#Arquitetura do sistema
    O sistema será desenvolvido em arquitetura Front-end simples, utilizando do HTML, CSS e Java script

#camada
    ###interface
        Responsável pela exibição das telas e interação com o usuário

    ###Lógica de aplicação
        Responsável pelas regras de cadastro, listagem, filtro e alteração de status

    ###Persistencia local
        Responsável por salvar e recuperar os dados no localStorage do navegador

    ###Decisão arquitetural
        Foi ecolhido localStorage para simplificar o desenvolvimento inicial, evitando dependência de servidor e banco de dados