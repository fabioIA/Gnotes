<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../imgs/logo.png">
    <title>Cadastro professor</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="formu">
        <div id="back">
            <a href="../index.php"><ion-icon name="caret-back-outline"></ion-icon></a>
        </div>

        <form action="../index.php" method="POST">
            <fieldset>
                <legend>Cadastro</legend>

                <div class="box">
                    <input type="text" name="nome" id="nome" class="Input" autocomplete="off" maxlength="90" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>

                <div class="box">
                    <input type="tel" name="cpf" id="cpf" class="Input" autocomplete="off" oninput="mascaracpf(this)" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                
                <div class="box">
                    <input type="tel" name="tel" id="tel" class="Input" autocomplete="off" maxlength="15" oninput="handlePhone(event)" required>
                    <label for="tel" class="labelInput">Telefone</label>
                </div>
                
                <div class="box">
                    <label>Sexo:</label>
                    
                    <div>
                        <div>
                            <input type="radio" name="sexo" value="masculino">
                            <label for="sexo">Masculino</label>
                        </div>
                        
                        <div>
                            <input type="radio" name="sexo" value="feminino">
                            <label for="sexo">Feminino</label>
                        </div>
                    </div>
                        
                </div>
                
                <div class="box">
                    <input type="password" name="senha" class="Input" id="senha" maxlength="50" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
    <style>
        [type="radio"] {
            margin-left: 10;
            width: 15px;
            margin-top: -8px;
            margin-left: 10px;
        }

        .box > div > div {
            display: flex;
            margin-left: 5px;
            font-size: 17px;
            margin-top: 0;
        }

        body {
            background: linear-gradient(#57c1fe,#b3d1e3);
            height: 95vh;
        }

        form {
            width: 20vw;
            margin-top: 10vh;
            max-height: 60vh;
        }
    </style>

    <script src="../script.js"></script>
</body>
</html>