<?php
 

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