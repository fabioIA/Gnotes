<?php

    if(isset($_POST['submit'])) {

        include_once('php/config.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf']; 
        $telefone = $_POST['tel'];
        $sexo = $_POST['sexo'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO professor(cpf, nome_professor, telefone, sexo, senha) 
        VALUES ('$cpf', '$nome', '$telefone', '$sexo', '$senha')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="../imgs/logo.png">
    <title>Login</title>
</head>
<body>
    <form action="php/security.php" method="POST">
        <fieldset>
            <legend>Login</legend>

            <div class="box">
                <input type="text" name="cpf" id="cpf" autocomplete="off" class="Input" oninput="mascaracpf(this)" required>
                <label for="cpf" class="labelInput">CPF</label>
            </div>
            
            <div class="box">
                <input type="password" name="senha" id="senha" class="Input" maxlenght="50" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            
            <input type="submit" name="submit" id="submit">

            <div>
                <span>Não estou cadastrado</span>
                <a href="php/cadastro.php" target="_blank">Cadastrar-se</a>
            </div>
        </fieldset>
    </form>

    <style>
        body {
            background: linear-gradient(#57c1fe,#b3d1e3);
            height: 95vh;
        }

        form {
            width: 20vw;
            margin-top: 20vh;
        }

        span, a {
            font-size: 16px;
        }
    </style>

    <script src="script.js"></script>
</body>
</html>