<?php 

    include("config.php");

    if(isset($_POST['update']))
    {   
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $host = $_POST['host'];
        $operadora = $_POST['operadora'];
        $circuito = $_POST['circuito'];


        $sqlUpdate = "UPDATE `host` SET `nome`='$nome',`host`='$host',`email`='$email',`senha`='$senha',`telefone`='$telefone',`operadora`='$operadora',`circuito`='$circuito'
         WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('location: sistema.php');

?>