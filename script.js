const cadastro = document.getElementById("btnCadastro");

cadastro.addEventListener("click", fnNewPage)

function fnNewPage(btnCadastro){
   const win = window.open("./cadastro/formCadastro.html","_self")
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

function mascara(i,t){

    var v = i.value;
 
    if(isNaN(v[v.length-1])){
       i.value = v.substring(0, v.length-1);
       return;
    }
 
    if(t == "cpf"){
       i.setAttribute("maxlength", "14");
       if (v.length == 3 || v.length == 7) i.value += ".";
       if (v.length == 11) i.value += "-";
    }
    
 else{
          i.setAttribute("maxlength", "9");
          if (v.length == 4) i.value += "-";
       }
 }
