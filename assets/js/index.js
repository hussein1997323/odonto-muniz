function login() {
    window.location.href = "./menu.html";
}

function validetefields(){
  const email =document.getElementById("email").value;
  if(!email){
    document.getElementById('recover-password-button').disabled = true;
  }
}

function valideteemail(email){
    return  /\S+@\S+\.\S+/.test(email);
}