<?php

// Include a conexao BD
include_once "conexao.php";

// Receber os dados enviado pelo JavaScript
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['nome'])){
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Necessário preencher o campo nome!</p>"];
}elseif(empty($dados['cpf'])){
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Necessário preencher o campo e-mail!</p>"];
}elseif(empty($dados['dateofbrith'])){
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Necessário preencher o campo situação!</p>"];
}elseif(empty($dados['cep'])){
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Necessário preencher o campo situação!</p>"];
}elseif(empty($dados['road'])){
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Necessário preencher o campo situação!</p>"];
}elseif(empty($dados['numero'])){
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Necessário preencher o campo situação!</p>"];
}elseif(empty($dados['complement'])){
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Necessário preencher o campo situação!</p>"];
}else{

    $query_usuario = "INSERT INTO usuarios (nome, cpf, dateofbrith, cep, road, numero , complement ) VALUES (:nome, :cpf, :dateofbrith, :cep, :road, :numero, :complement)";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome']);
    $cad_usuario->bindParam(':cpf', $dados['cpf']);
    $cad_usuario->bindParam(':dateofbrith', $dados['dateofbrith']);
    $cad_usuario->bindParam(':cep', $dados['cep']);
    $cad_usuario->bindParam(':road', $dados['road']);
    $cad_usuario->bindParam(':numero', $dados['numero']);
    $cad_usuario->bindParam(':complement', $dados['complement']);
    $cad_usuario->execute();

    if($cad_usuario->rowCount()){
        $retorna = ['status' => true, 'msg' => "<p style='color: green;'>Usuário cadastrado com sucesso!</p>"];
    }else{
        $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>"];
    }    
}
echo json_encode($retorna);