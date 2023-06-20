<?php
$host = "localhost";
$dbusername = "root";
$db_password = "";
$db_name = "cadastro";


$conexao = new mysqli($host, $dbusername, $db_password, $db_name );

if($conexao-> connect_errno){
    echo "erro";
}
else{
    echo"conexão com sucesso";
}
?>