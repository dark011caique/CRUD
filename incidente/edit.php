<?php

    if(!empty($_GET['id'])){
       

       include("config.php");

       $id = $_GET['id'];

       $sqlSelect = "SELECT * FROM host WHERE id=$id";

       $result = $conexao->query($sqlSelect);

       if($result->num_rows > 0)
       {
        while($user_data = mysqli_fetch_assoc($result)){
            
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $host = $user_data['host'];
            $telefone = $user_data['telefone'];
            $circuito = $user_data['circuito'];
            $operadora = $user_data['operadora'];

        }

        //print_r($nome);
       }
       else
       {
        header('location: sistema.php');
       }

    }
    else{
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
    <link rel="stylesheet" href="./css/edit.css">

    <title>Formulario</title>

    <style>
        body{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color:white;
        }

    </style>
</head>
<body>
<a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulario de Clientes</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?> "required>
                    <label for="nome" class="labelInput">Cliente</label>
                </div>

                <br><br>

                

                <br><br>

                <div class="inputBox">
                    <input type="text" name="host" id="host" class="inputUser" value="<?php echo $host ?>" required>
                    <label for="host" class="labelInput" >Host</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="circuito" id="circuito" class="inputUser" value="<?php echo $circuito ?>" required>
                    <label for="circuito" class="labelInput">Circuito</label>
                </div>

                <br><br>

                 <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="operadora" id="operadora" class="inputUser" value="<?php echo $operadora?>" required>
                    <label for="operadora" class="labelInput">Operadora</label>
                </div>

                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>