<?php

    if(isset($_POST['submit'])){
       // print_r($_POST['nome']);
       // print_r('<br>');
       // print_r($_POST['email']);
       // print_r('<br>');
       // print_r($_POST['telefone']);

       // print_r($_POST['genero']);
       // print_r('<br>');
       // print_r($_POST['data_nascimento']);
        //print_r('<br>');
       //print_r($_POST['cidade']);
       // print_r('<br>');
       // print_r($_POST['estado']);
       // print_r('<br>');
       // print_r($_POST['endereco']);

       include("config.php");

       $id = $_POST['id'];
       $nome = $_POST['nome'];
       $senha = $_POST['senha'];
       $email = $_POST['email'];
       $telefone = $_POST['telefone'];
       $host = $_POST['host'];
       $operadora = $_POST['operadora'];
       $circuito = $_POST['circuito'];


       $result =mysqli_query($conexao,"INSERT INTO `host`(`id`, `nome`, `senha`, `email`, `telefone`, `host`, `operadora`, `circuito`) 
       VALUES ('','$nome','$senha','$email','$telefone','$host','$operadora','$circuito')");

      header('location: sistema.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/1654289787404.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>THINK</title>
</head>
<body>
<a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="formiEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulario de Clientes</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Cliente</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="host" id="host" class="inputUser" required>
                    <label for="telefone" class="labelInput">host</label>
                </div>

                <br><br>

                 <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="circuito" id="circuito" class="inputUser" required>
                    <label for="telefone" class="labelInput">circuito</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="operadora" id="operadora" class="inputUser" required>
                    <label for="telefone" class="labelInput">Operadora</label>
                </div>


                <br><br>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>