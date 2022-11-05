<?php

    include_once('../config.php');    

    $notebooks = "SELECT numero_notebook, patrimonio_notebook, modelo, marca, numero_carrinho FROM notebook";
    $result = mysqli_query($conexao, $notebooks);
    
    echo "<fieldset><legend>Notebooks</legend><div id='tabela'><table><tr><th>Número do notebook</th><th>Patrimônio</th><th>Modelo</th><th>Marca</th><th>Carrinho do notebook</th></tr></div></fieldset>";

    /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
    while($tupla = mysqli_fetch_assoc($result)){

         /*Escreve cada linha da tabela*/
         echo "<tr><td>" . $tupla['numero_notebook'] . "</td><td>" . $tupla['patrimonio_notebook'] . "</td><td>" . $tupla['modelo'] . "</td><td>" . $tupla['marca'] . "</td><td>" . $tupla['numero_carrinho'] . "</td></tr>";

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
<!-- <body>
    <fieldset>
        <legend>Notebooks</legend>
        
        <div id="tabela">
            <table>
                <tr>
                    <th>Número do notebook</th>
                    <th>Patrimônio</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Carrinho do Notebook</th>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
            </table>
        </div>
    </fieldset> -->
</body>
</html>