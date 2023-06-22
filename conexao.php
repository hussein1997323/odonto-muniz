<?php

define('HOST','localhost');
define('DATABASENAME','cadastro');
define('USER','root');
define('PASSOWARD','');

class connect{
    protected $connection;
    function __construct()
    {
      $this->connectDatabase();
    }
   
     function connectDatabase()
     {
        try
        {
       $this->connection =new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSOWARD);
        }
        catch(PDOException $e) 
        {
        echo "Error!".$e->getMessage();
        die();
        }

     }
}
$testconnection = new connect();
?>