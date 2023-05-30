<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "usuario_senha";

$connect = mysqli_connect($host, $db_user, $db_password, $db_name );

function login($connect){
    if(isset($_POST['entra']) AND !empty($_POST['email'] and !$_POST['password'] )){

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $senha = sha1($_POST['password']);

    $query = "SELECT * FROM usuarios WHERE EMAIL = '$email' and senha ='$senha' ";
    $executar = mysqli_query($connect, $query );
    $return = mysqli_fetch_assoc($executar);
if(!empty($return ['email'])){
 echo  $return ['email'];
}else {
    echo "usuário ou senha não encontrado!";}

    echo $return ['email'];

    }
}