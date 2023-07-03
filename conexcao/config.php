<?php

$dbhost = 'localhost';
$dbUsername = 'root';
$dbpassowrd = '';
$dbName = 'cadastro';

$conexao = new mysqli($dbhost,$dbUsername,$dbpassowrd,$dbName);

if($conexao->connect_errno)
{
    echo "conectado";
}

?>