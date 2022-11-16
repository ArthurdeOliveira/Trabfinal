<?php

function getConexao(){
    $host = "mysql:host=localhost;dbname=progweb";
    $usuario = "root";
    $password = "";

    try{
        $db = new PDO($host, $usuario, $password);
        return $db;
    } catch (PDOException $ex){
        echo 'Erro: ' . $ex->getMessage();
    }
}

?>