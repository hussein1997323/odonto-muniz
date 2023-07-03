<?php
$name = $_POST ["nome"];
$cpf = $_POST ["cpf"];
$dateofbrith = $_POST ["dateofbrith"];
$road = $_POST ["road"];
$numero = $_POST ["numero"];
$complement= $_POST ["complement"];


$con = new mysqli("localhost", "root", "", "pacient");
if($con->connect_error){
    die("connect failed :". $con->connect_error);
}  else{
    $stmt =$con->prepare("insert into pessoas(nome, cpf, dateofbrith, road, numero, complement)
    valuse(?,?,?,?,?)");
    $stmt->bind_param("ssds", $name, $cpf, $dateofbrith, $road, $numero, $complement);
    $stmt->execute();
    echo"registrantion suceesfully...";
    $stmt->close();
    $stmt->close();

}





?>