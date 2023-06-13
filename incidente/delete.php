<?php

    if(!empty($_GET['id']))
    {
        include("config.php");

        $id = $_GET['id'];
 
        $sqlSelect = "DELETE FROM `host` WHERE id=$id";
 
        $result = $conexao->query($sqlSelect);
 
        if($result->num_rows > 0)
        {
           $sqlDelete = "DELETE FROM host WHERE id=$id";
           $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('location: sistema.php');

?>