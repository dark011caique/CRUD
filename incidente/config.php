<?php 

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'incidente-php';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName );

    //if($conexao ->connect_errno){
    //    echo"erro";
    //}else{
     //   echo"conexão efetuada com sucesso ";
    //}
    
?>