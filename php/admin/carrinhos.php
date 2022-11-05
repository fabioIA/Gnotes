<?php

    if(isset($_POST['submit'])) {

        include_once('../config.php');

        $pcar = $_POST['pcar'];
        $ncar = $_POST['ncar'];

        $result = mysqli_query($conexao, "INSERT INTO carrinho(numero_carrinho, patrimonio_carrinho) 
        VALUES ('$ncar', '$pcar')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <form action="carrinhos.php" method="POST">
        <fieldset>
            <legend>Cadastrar carrinho</legend>

            <div class="box">
                <input type="text" name="pcar" id="pcar" class="Input" autocomplete="off" maxlenght="20" required>
                <label for="pcar" class="labelInput">Patrimônio</label>
            </div>
            
            <div class="box">
                <input type="text" name="ncar" id="ncar" class="Input" autocomplete="off" oninput="mascaracar(this)" required>
                <label for="ncar" class="labelInput">Número</label>
            </div>
            
            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>

    <script src="../../script.js"></script>
</body>
</html>