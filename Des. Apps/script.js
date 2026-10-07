let historico = [];

let totalentradasPermitidas = 0;

function verificarEntrada () {

    

    let uniforme = document.getElementById("uniforme").value === "true";
    let lista = document.getElementById("lista").value === "true";
    let atraso = document.getElementById("atraso").value === "true";
    let autorizacao = document.getElementById("autorizacao").value === "true";
    let pendencia = document.getElementById("pendencia").value === "true";
    let lotado = document.getElementById("lotado").value === "true";

    let resultado = document.getElementById("resultado");
    let contador = document.getElementById("contador");
    let listaHistorico = document.getElementById("listaHistorico");

    if (isNaN(atraso)){
        resultado.innerText = "Informe o atraso em minutos.";
        resultado.style.color = "orange";
        return;
    }

    let mensagem = "";

    if(lotado){
        mensagem = "Entada negada - Laboratório lotado";
        resultado.style.color = "red";
    }
    else if(!uniforme){
        mensagem = "Entrada negada - Aluno sem uniforme";
        resultado.style.color = "red";
    }
    else if(!lista){
        mensagem = "Entada negada - Aluno não está na lista";
        resultado.style.color = "red";
    }
    else if(pendencia){
        mensagem = "Entrada negada - Aluno com pendência";
        resultado.style.color = "red";
    }
    else if(atraso > 10 && !autorizacao){
        mensagem = "Entrada negada - Aluno com mais de 10 minutos de atraso e sem autorização";
        resultado.style.color = "red";
    }
    else{
        mensagem = "Entrada permitida";
        resultado.style.color = "green";

        totalentradasPermitidas++;
    }

    resultado.innerText = mensagem;
    contador.innerText = totalentradasPermitidas;
    historico.push(mensagem);

    let item = document.createElement("li");
    item.innerText = mensagem;
    listaHistorico.appendChild(item);
}