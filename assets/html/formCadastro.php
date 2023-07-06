<?php
include_once('odonto-muniz-main/formcadastro.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css" />
    <script src="../cadastro.js"></script>
    <title>Cadastro de Pacientes</title>

</head>
<body>

    
    <form method="post" action="" enctype="multipart/form-data" id="form-cadastro">
        <form method="post" action="" enctype="multipart/form-data" >
            <p> INSIRA AS INFORMAÇÕES </p>
            <div class="input-block">
                <input type="text" name="nome" id="nome" placeholder="NOME COMPLETO"/>
            </div>
            <br />
            <div class="input-block">
                <input type ="cpf" name="cpf" id="cpf" onkeyup="mascara_cpf()" maxlength="14"  placeholder="CPF" />
            </div>
            <br />
            <div class="input-block">
                <label for ="nascimento">DATA DE NASCIMENTO:</label>
                <input type ="date" nome="dateofbrith" id="dateofbrith" placeholder="data de nascimento" />
            </div>
            <br/>
        
            <select name="genero" id="genero">
                <option value="vasio">selecione o campo</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">feminino</option>
                <option value="outros">outros</option>

            </select>
        
            <br/>
            <div class="input-block">
                <input type ="cep" id="cep" placeholder="CEP"/>
            </div>
            <br/>
            <div class="input-block">
               <input type ="text" name="road" id="road"  placeholder="RUA"/>
            </div>
            <br/>
            <div class="input-block">
                <input type ="text" name="numero" id="numero"  placeholder="N°"/>
            </div>
            <br/>
            <div class="input-block">
                <input type ="text" name="complement" id="complement" placeholder="COMPLEMENTO"/>
            </div>
            <button type="submit" id="salvar"> SALVAR </button>
            <button id="cancelar"> CANCELAR </button>
          
        </form>

   



</body>
</html>

<?php
 include_once('odonto-muniz-main/formcadastro.php');

      include('conexcao/config.php');
        if(isset($_POST['env'] ) && $_POST['env'] && "cadastro" ){
            
            $nome =$_POST ['nome'];
            $cpf =$_POST ['cpf'];
            $dateofbrith =$_POST ['dateofbrith'];
            $genero =$_POST ['genero'];
            $cep =$_POST ['cep'];
            $road =$_POST ['road'];
            $numero =$_POST ['numero'];
            $complement =$_POST ['complement'];
          
         $sql = "INSERT INTO paceinte (nome, cpf, dateofbrith, genero, cep, road, numero, complement ) VALUES ('$nome', '$cpf', '$dateofbrith', '$genero', '$cep', '$road', '$numero', '$complement')";
            if ($mysqli ->query($sql) ) {
    
   
                echo "Dados inseridos com sucesso!";
                } else {
                    
                   
                echo "Erro ao inserir dados: " ;
                }
                
            } 
        
        ?>