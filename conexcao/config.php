<?php

$dbhost ='localhost';
$dbuser ='root';
$dbpass ='';
$dbname ='cadastro';
   
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if( $mysqli-> connect_errno){
printf("connetion failed", $mysqli-> connect_error);
exit();
}
?>