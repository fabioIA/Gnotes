<?php

    if(isset($_POST['submit'])) {

        include_once('../config.php');

        $pnote = $_POST['pnote'];
        $nnote = $_POST['nnote']; 
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $ncar = $_POST['ncar'];

        $result = mysqli_query($conexao, "INSERT INTO notebook(patrimonio_notebook, numero_notebook, modelo, marca, numero_carrinho) 
        VALUES ('$pnote', '$nnote', '$modelo', '$marca', '$ncar')");
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
    <form action="notebooks.php" method="POST">
        <fieldset>
            <legend>Cadastrar notebook</legend>

            <div class="box">
                <input type="text" name="pnote" id="pnote" class="Input" autocomplete="off" maxlenght="20" required>
                <label for="pnote" class="labelInput">Patrimônio</label>
            </div>
            
            <div class="box">
                <input type="tel" name="nnote" id="nnote" class="Input" autocomplete="off" oninput="mascaranote(this)" required>
                <label for="nnote" class="labelInput">Número</label>
            </div>
            
            <div class="box">
                <input type="text" name="modelo" id="modelo" class="Input" autocomplete="off" maxlenght="15" required>
                <label for="modelo" class="labelInput">Modelo</label>
            </div>
            
            <div class="box">
                <input type="text" name="marca" id="marca" class="Input" autocomplete="off" maxlenght="10" required>
                <label for="marca" class="labelInput">Marca</label>
            </div>

            <div class="box">
                <input type="tel" name="ncar" id="ncar" class="Input" autocomplete="off" oninput="mascaracar(this)" required>
                <label for="ncar" class="labelInput">Número do carrinho</label>
            </div>
            
            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>

    <style>
        body {
            background: transparent;
        }
    </style>

    <script src="../../script.js"></script>
</body>
</html>