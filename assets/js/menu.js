const cadastro = document.getElementById("btnCadastro");

cadastro.addEventListener("click", fnNewPageCadastro)

function fnNewPageCadastro(btnCadastro){
   const win = window.open("../assets/html/formCadastro.html","_self")
}



const prontuario = document.getElementById("btnProntuario");

prontuario.addEventListener("click", fnNewPageProntuario)

function fnNewPageProntuario(btnProntuario){
   const win = window.open("./prontuario/formProntuario.html","_self")
}


const agenda = document.getElementById("btnAgenda");

agenda.addEventListener("click", fnNewPageAgenda)

function fnNewPageAgenda(btnAgenda){
   const win = window.open("./agenda/formAgenda.html","_self")
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
          if (v.length == 4) i.value +="-";
 }
 }
