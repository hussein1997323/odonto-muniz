const cadastro = document.getElementById("btnCadastro");

cadastro.addEventListener("click", fnNewPage)

function fnNewPage(btnCadastro){
   const win = window.open("./cadastro/formCadastro.html")
}

const prontuario = document.getElementById("btnProntuario");

prontuario.addEventListener("click", fnNewPageTwo)

function fnNewPageTwo(){
    alert ("ESTÁ FUNCIONANDO 2")
    return

}

const agenda = document.getElementById("btnAgenda");

agenda.addEventListener("click", fnNewPageThree)

function fnNewPageThree(){
    alert ("ESTÁ FUNCIONANDO 3")
    return

}