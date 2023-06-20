function mascara_cpf() {
    var cpf = document.getElementById('cpf')
    if(cpf.value.length == 3 || cpf.value.length == 7) {
        cpf.value += "."
    } else if (cpf.value.length == 11) {
        cpf.value += "-"
    }
}

const formCadUsuario = document.getElementById("form-cad-usuario");
if (formCadUsuario) {
    formCadUsuario.addEventListener("submit", async(event) => {
        event.preventDefault();
        // Receber os dados do formulario
        const dadosForm = new FormData(formCadUsuario);

        // Enviar os dados para o arquivo "cadastrar.php", deve salvar no BD
        const dados = await fetch("cadastrar.php", {
            method: "POST",
            body: dadosForm
        });
        const resposta = await dados.json();
        //console.log(resposta);

        if (resposta['status']) {
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];
            formCadUsuario.reset();
        } else {
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];
        }
    });
}